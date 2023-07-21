<?php
include_once __DIR__ . '/../lib/database.php';
include_once __DIR__ . '/../helpers/format.php';
?>

<?php
class order
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_order($data)
    {
        $orderstatus = mysqli_real_escape_string($this->db->link, $data['orderstatus']);
        $orderuserid = mysqli_real_escape_string($this->db->link, $data['orderuserid']);
        $orderprice = mysqli_real_escape_string($this->db->link, $data['orderprice']);

        if ($orderstatus == '' || $orderuserid == '' || $orderprice == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
            return $arlet;
        } else {
            $query = "INSERT INTO tbl_orders(orderstatus,orderuserid,orderprice) VALUES ('$orderstatus','$orderuserid','$orderprice')";
            $result = $this->db->insert($query);
            if ($result) {
                $arlet = "<div class='alert alert-success' role='alert'>Insert Code Successfully</div>";
                return $arlet;
            } else {
                $arlet = "<div class='alert alert-danger' role='alert'>Insert Code Successfully</div>";
                return $arlet;
            }
        }
    }

    public function show_order()
    {
        $query = "SELECT tbl_orders.*,   tbl_users.*   
        FROM tbl_orders
        INNER JOIN tbl_users ON tbl_orders.orderuserid = tbl_users.userid
        ORDER BY tbl_orders.orderid DESC;";
        $result = $this->db->select($query);

        return $result;
    }


    public function update_order($data, $id)
    {
        $orderstatus = mysqli_real_escape_string($this->db->link, $data['orderstatus']);
        $orderuserid = mysqli_real_escape_string($this->db->link, $data['orderuserid']);
        $orderprice = mysqli_real_escape_string($this->db->link, $data['orderprice']);
        $id = mysqli_real_escape_string($this->db->link, $id);

        if ($orderstatus == '' || $orderuserid == '' || $orderprice == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Category name empty</div>";
            return $arlet;
        } else {
            $query = "UPDATE tbl_orders SET orderstatus = '$orderstatus', orderuserid = '$orderuserid',orderprice = '$orderprice'  WHERE orderid = '$id'";
            $result = $this->db->update($query);
            if ($result) {
                $arlet = "<div class='alert alert-success' role='alert'>Update Category Successfully</div>";
                return $arlet;
            } else {
                $arlet = "<div class='alert alert-danger' role='alert'>Error</div>";

                return $arlet;
            }
        }
    }
    public function delete_order($id)
    {
        $id = mysqli_real_escape_string($this->db->link, $id);
        $query = "DELETE FROM tbl_orders WHERE orderid = '$id'";
        $result = $this->db->delete($query);


        if ($result) {
            $arlet = "<div class='alert alert-success' role='alert'>Delete Code Successfully</div>";
            return $arlet;
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Delete Code Successfully</div>";

            return $arlet;
        }
    }
    public function getorderbyid($id)

    {
        $query = "SELECT * FROM tbl_orders WHERE orderid = '$id'";
        $result = $this->db->select($query);

        return $result;
    }
}
