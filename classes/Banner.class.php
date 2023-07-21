<?php
include_once __DIR__ . '/../lib/database.php';
include_once __DIR__ . '/../helpers/format.php';
?>

<?php
class banner
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_banner($data)
    {
        $bannerproductid  = mysqli_real_escape_string($this->db->link, $data['bannerproductid']);


        if ($bannerproductid == '') {

            $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
            return $arlet;
        } else {
            if (isset($_FILES['image'])) {
                $bannerimg   = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                # code...
            } else {
                $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
                return $arlet;
            }
            $query = "INSERT INTO tbl_banners( 
            bannerproductid,
            bannerimg ) VALUES ('$bannerproductid',
'$bannerimg' )";
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

    public function show_banner()
    {
        $query = "SELECT tbl_banners.*, tbl_products.* 
        FROM tbl_banners
        INNER JOIN tbl_products ON tbl_banners.bannerproductid = tbl_products.productid
        ORDER BY tbl_banners.bannerid DESC;";

        $result = $this->db->select($query);

        return $result;
    }


    public function update_banner($data, $id)
    {
        $bannerproductid  = mysqli_real_escape_string($this->db->link, $data['bannerproductid']);


        if (isset($_FILES['image']['tmp_name']) && $_FILES['image']['tmp_name'] != '') {
            $bannerimg = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        }

        if (!isset($bannerimg)) {
            if ($bannerproductid == '') {
                $arlet = "<div class='alert alert-danger' role='alert'>Fields empty</div>";
                return $arlet;
            } else {
                $query = "UPDATE `tbl_banners` SET `bannerproductid` = '$bannerproductid'    WHERE `tbl_banners`.`bannerid` = '$id'";
                $result = $this->db->insert($query);
                if ($result) {
                    // return $catId;
                    $arlet = "<div class='alert alert-success' role='alert'>Update Product Successfully</div>";
                    return $arlet;
                } else {
                    $arlet = "<div class='alert alert-danger' role='alert'>Error</div>";

                    return $arlet;
                }
            }
        } else {
            $img_info = getimagesize($_FILES['image']['tmp_name']);
            if ($img_info === FALSE) {
                $arlet = "<div class='alert alert-danger' role='alert'>Image is not valid</div>";
                return $arlet;
            } else {
                // Nếu tệp tin là ảnh, thực hiện lưu trữ và xử lý tiếp theo tại đây
                $bannerimg = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            }
            if ($bannerproductid == '') {
                $arlet = "<div class='alert alert-danger' role='alert'>Fields empty</div>";
                return $arlet;
            } else {
                $query = "UPDATE `tbl_banners` SET `bannerproductid` = '$bannerproductid', `bannerimg` = '$bannerimg'  WHERE `tbl_banners`.`bannerid` = '$id'";


                $result = $this->db->insert($query);
                if ($result) {
                    // return $catId;
                    $arlet = "<div class='alert alert-success' role='alert'>Update Product Successfully</div>";
                    return $arlet;
                } else {
                    $arlet = "<div class='alert alert-danger' role='alert'>Error</div>";

                    return $arlet;
                }
            }
        }
    }
    public function delete_banner($id)
    {
        $id = mysqli_real_escape_string($this->db->link, $id);
        $query = "DELETE FROM tbl_banners WHERE bannerid = '$id'";
        $result = $this->db->delete($query);


        if ($result) {
            $arlet = "<div class='alert alert-success' role='alert'>Delete Code Successfully</div>";
            return $arlet;
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Delete Code Successfully</div>";

            return $arlet;
        }
    }
    public function getbannerbyid($id)

    {
        $query = "SELECT * FROM tbl_banners WHERE bannerid = '$id'";
        $result = $this->db->select($query);

        return $result;
    }
}
