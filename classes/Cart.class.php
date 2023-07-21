<?php
include_once __DIR__ . '/../lib/database.php';
include_once __DIR__ . '/../helpers/format.php';
?>

<?php
class cart
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_cart($data)
    {
        $cartproductid = mysqli_real_escape_string($this->db->link, $data['cartproductid']);
        $cartsession = mysqli_real_escape_string($this->db->link, $data['cartsession']);
        $cartquantity = mysqli_real_escape_string($this->db->link, $data['cartquantity']);
        $cartuserid = mysqli_real_escape_string($this->db->link, $data['cartuserid']);
        $cartstatus = mysqli_real_escape_string($this->db->link, $data['cartstatus']);

        if ($cartproductid == '' || $cartsession == '' || $cartquantity == '' || $cartuserid == '' || $cartstatus == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
            return $arlet;
        } else {
            $query = "INSERT INTO tbl_cart(cartproductid,cartsession,cartquantity,cartuserid,cartstatus) VALUES ('$cartproductid','$cartsession','$cartquantity','$cartuserid','$cartstatus')";
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
    public function add_cart($data)
    {

        $cartproductid = mysqli_real_escape_string($this->db->link, $data['cart']);
        $cartsession = session_id();
        $cartquantity = mysqli_real_escape_string($this->db->link, $data['cartquantity']);
        $cartuserid = mysqli_real_escape_string($this->db->link, $_SESSION['userid']);
        $cartstatus = 1;

        if ($cartproductid == '' || $cartsession == '' || $cartquantity == '' || $cartuserid == '' || $cartstatus == '') {

            $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
            return $arlet;
        } else {
            $query = "SELECT * FROM tbl_cart WHERE cartproductid = '$cartproductid' AND cartuserid = '$cartuserid'";
            $result = $this->db->select($query);

            if ($result) {
                $arlet = "<div class='alert alert-danger' role='alert'>Duplicate record found</div>";
                return $arlet;
            } else {
                $query = "INSERT INTO tbl_cart(cartproductid,cartsession,cartquantity,cartuserid,cartstatus) VALUES ('$cartproductid','$cartsession','$cartquantity','$cartuserid','$cartstatus')";
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
    }
    public function show_cart()
    {
        $query = "SELECT c.*, p.*, u.*, cat.*
        FROM tbl_cart c
        INNER JOIN tbl_products p ON c.cartproductid = p.productid
        INNER JOIN tbl_users u ON c.cartuserid = u.userid
        INNER JOIN tbl_category cat ON p.productcat = cat.categoryid 
        ORDER BY c.cartid DESC;";
        $result = $this->db->select($query);

        return $result;
    }

    public function update_cart($data, $id)
    {
        $cartproductid = mysqli_real_escape_string($this->db->link, $data['cartproductid']);
        $cartsession = mysqli_real_escape_string($this->db->link, $data['cartsession']);
        $cartquantity = mysqli_real_escape_string($this->db->link, $data['cartquantity']);
        $cartuserid = mysqli_real_escape_string($this->db->link, $data['cartuserid']);
        $cartstatus = mysqli_real_escape_string($this->db->link, $data['cartstatus']);
        $id = mysqli_real_escape_string($this->db->link, $id);

        if ($cartproductid == '' || $cartsession == '' || $cartquantity == '' || $cartuserid == '' || $cartstatus == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Category name empty</div>";
            return $arlet;
        } else {
            $query = "UPDATE tbl_cart SET cartproductid = '$cartproductid', cartsession = '$cartsession',cartquantity = '$cartquantity', cartuserid = '$cartuserid', cartstatus = '$cartstatus' WHERE cartid = '$id'";
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

    public function delete_cart($id)
    {
        $id = mysqli_real_escape_string($this->db->link, $id);
        $query = "DELETE FROM tbl_cart WHERE cartid = '$id'";
        $result = $this->db->delete($query);


        if ($result) {
            $arlet = "<div class='alert alert-success' role='alert'>Insert Category Successfully</div>";
            return $arlet;
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Insert Category Successfully</div>";

            return $arlet;
        }
    }
    public function getcartbyid($id)

    {
        $query = "SELECT * FROM tbl_cart WHERE cartid = '$id'";
        $result = $this->db->select($query);

        return $result;
    }
    public function show_cart_user($id)
    {
        $query = "SELECT c.*, p.*, u.*, cat.*
        FROM tbl_cart c
        INNER JOIN tbl_products p ON c.cartproductid = p.productid
        INNER JOIN tbl_users u ON c.cartuserid = u.userid
        INNER JOIN tbl_category cat ON p.productcat = cat.categoryid 
        WHERE c.cartuserid = '$id'
        ORDER BY c.cartid DESC;";
        $result = $this->db->select($query);

        return $result;
    }
}
