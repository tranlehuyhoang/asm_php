<?php
include_once __DIR__ . '/../lib/database.php';
include_once __DIR__ . '/../helpers/format.php';
?>

<?php
class wishlist
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_wishlist($data)
    {
        if (isset($data['wishlistuserid']) && isset($data['wishlistproductid'])) {

            $wishlistuserid = mysqli_real_escape_string($this->db->link, $data['wishlistuserid']);
            $wishlistproductid = mysqli_real_escape_string($this->db->link, $data['wishlistproductid']);

            if ($wishlistuserid == '' || $wishlistproductid == '') {
                $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
                return $arlet;
            } else {
                $check_register = "SELECT *
            FROM tbl_wishlists WHERE wishlistproductid = '$wishlistproductid' AND wishlistuserid = '$wishlistuserid' LIMIT 1";
                $check = $this->db->select($check_register);
                if ($check && $check->num_rows > 0) {
                    $arlet = "<div class='alert alert-danger' role='alert'>Email exit</div>";
                    return $arlet;
                } else {
                    $query = "INSERT INTO tbl_wishlists(wishlistuserid,wishlistproductid) VALUES ('$wishlistuserid','$wishlistproductid')";
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
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
            return $arlet;
        }
    }

    public function show_wishlist()
    {
        $query = "SELECT tbl_wishlists.*, tbl_products.*, tbl_users.*
        FROM tbl_wishlists
        INNER JOIN tbl_products ON tbl_wishlists.wishlistproductid = tbl_products.productid
        INNER JOIN tbl_users ON tbl_wishlists.wishlistuserid = tbl_users.userid
        ORDER BY tbl_wishlists.wishlistid DESC;";
        $result = $this->db->select($query);

        return $result;
    }


    public function update_wishlist($data, $id)
    {
    }
    public function delete_wishlist($id)
    {
        $id = mysqli_real_escape_string($this->db->link, $id);
        $query = "DELETE FROM tbl_wishlists WHERE wishlistid = '$id'";
        $result = $this->db->delete($query);


        if ($result) {
            $arlet = "<div class='alert alert-success' role='alert'>Delete Code Successfully</div>";
            return $arlet;
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Delete Code Successfully</div>";

            return $arlet;
        }
    }
}
