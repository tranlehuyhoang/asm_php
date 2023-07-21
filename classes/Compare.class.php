<?php
include_once __DIR__ . '/../lib/database.php';
include_once __DIR__ . '/../helpers/format.php';
?>

<?php
class compare
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_compare($data)
    {
        $compareuserid = mysqli_real_escape_string($this->db->link, $data['compareuserid']);
        $compareproductid = mysqli_real_escape_string($this->db->link, $data['compareproductid']);

        if (empty($compareuserid) || empty($compareproductid)) {
            $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
            return $arlet;
        } else {
            $check_register = "SELECT *
        FROM tbl_compares WHERE compareuserid = '$compareuserid' AND compareproductid = '$compareproductid'   LIMIT 1";
            $check = $this->db->select($check_register);

            if (isset($check)) {
                if ($check->num_rows > 0) {
                    $arlet = "<div class='alert alert-danger' role='alert'>Compare exists</div>";
                    return $arlet;
                } else {
                    $query = "INSERT INTO tbl_compares(compareuserid,compareproductid) VALUES ('$compareuserid','$compareproductid')";
                    $result = $this->db->insert($query);
                    if ($result) {
                        $arlet = "<div class='alert alert-success' role='alert'>Insert Code Successfully</div>";
                        return $arlet;
                    } else {
                        $arlet = "<div class='alert alert-danger' role='alert'>Insert Code Failed</div>";
                        return $arlet;
                    }
                }
            } else {
            }
        }
    }

    public function show_compare()
    {
        $query = "SELECT tbl_compares.*, tbl_products.* ,tbl_users.*   
        FROM tbl_compares
        INNER JOIN tbl_products ON tbl_compares.compareproductid = tbl_products.productid
        INNER JOIN tbl_users ON tbl_compares.compareuserid = tbl_users.userid
        ORDER BY tbl_compares.compareid DESC;";
        $result = $this->db->select($query);

        return $result;
    }


    public function update_compare($data, $id)
    {
        $compareuserid = mysqli_real_escape_string($this->db->link, $data['compareuserid']);
        $compareproductid = mysqli_real_escape_string($this->db->link, $data['compareproductid']);
        $id = mysqli_real_escape_string($this->db->link, $id);

        if ($compareuserid == '' || $compareproductid == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Category name empty</div>";
            return $arlet;
        } else {
            $query = "UPDATE tbl_compares SET compareuserid = '$compareuserid', compareproductid = '$compareproductid' WHERE compareid = '$id'";
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
    public function delete_compare($id)
    {
        $id = mysqli_real_escape_string($this->db->link, $id);
        $query = "DELETE FROM tbl_compares WHERE compareid = '$id'";
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
