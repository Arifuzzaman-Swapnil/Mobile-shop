<?php

// PHP Cart class
class Cart
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) {
            throw new Exception("Database connection not established.");
        }
        $this->db = $db;
    }
    // Insert into cart table
    public function insertIntoCart($params = null, $table = "cart")
    {
        if ($this->db->con != null && $params != null) {
            // Prepare SQL statement to prevent SQL injection
            $columns = implode(',', array_keys($params));
            $placeholders = implode(',', array_fill(0, count($params), '?'));
            $values = array_values($params);

            $stmt = $this->db->con->prepare("INSERT INTO {$table} ({$columns}) VALUES ({$placeholders})");
            $stmt->bind_param(str_repeat('s', count($params)), ...$values);

            $result = $stmt->execute();
            $stmt->close();
            return $result;
        }
        return false;
    }
    // To get user_id and item_id and insert into cart table
    public function addToCart($userid, $itemid)
    {
        if (is_numeric($userid) && is_numeric($itemid)) {
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );
            $result = $this->insertIntoCart($params);
            if ($result) {
                header("Location: " . $_SERVER['PHP_SELF']);
                exit;
            }
        }
    }
    // Delete cart item using cart item id
    public function deleteCart($item_id = null, $table = 'cart')
    {
        if (is_numeric($item_id)) {
            $stmt = $this->db->con->prepare("DELETE FROM {$table} WHERE item_id = ?");
            $stmt->bind_param('i', $item_id);

            $result = $stmt->execute();
            $stmt->close();

            if ($result) {
                header("Location: " . $_SERVER['PHP_SELF']);
                exit;
            }
            return $result;
        }
        return false;
    }
    // Calculate sub total
    public function getSum($arr)
    {
        if (is_array($arr)) {
            $sum = array_reduce($arr, function ($carry, $item) {
                return $carry + floatval($item[0]);
            }, 0);
            return sprintf('%.2f', $sum);
        }
        return '0.00';
    }
    // Get item_id of shopping cart list
    public function getCartId($cartArray = null, $key = "item_id")
    {
        if (is_array($cartArray)) {
            return array_map(function ($value) use ($key) {
                return $value[$key];
            }, $cartArray);
        }
        return [];
    }
    // Save for later
    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "cart")
    {
        if (is_numeric($item_id)) {
            $this->db->con->begin_transaction();
            try {
                $stmt1 = $this->db->con->prepare("INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id = ?");
                $stmt1->bind_param('i', $item_id);
                $stmt1->execute();

                $stmt2 = $this->db->con->prepare("DELETE FROM {$fromTable} WHERE item_id = ?");
                $stmt2->bind_param('i', $item_id);
                $stmt2->execute();

                $this->db->con->commit();
                header("Location: " . $_SERVER['PHP_SELF']);
                exit;
            } catch (Exception $e) {
                $this->db->con->rollback();
                throw $e;
            }
        }
        return false;
    }
}