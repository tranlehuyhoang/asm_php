<?php
include_once __DIR__ . '/../lib/database.php';
include_once __DIR__ . '/../helpers/format.php';
?>

<?php
class product
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_product($data)
    {
        $productname  = mysqli_real_escape_string($this->db->link, $data['productname']);
        $productprice = mysqli_real_escape_string($this->db->link, $data['productprice']);
        $productsale  = mysqli_real_escape_string($this->db->link, $data['productsale']);
        $productstock = mysqli_real_escape_string($this->db->link, $data['productstock']);
        $productcat   = mysqli_real_escape_string($this->db->link, $data['productcat']);
        $productdesc  = mysqli_real_escape_string($this->db->link, $data['productdesc']);
        $productquantitysell = mysqli_real_escape_string($this->db->link, $data['productquantitysell']);
        $productimg   = addslashes(file_get_contents($_FILES['image']['tmp_name']));

        if ($productname == '' || $productprice == '' || $productsale == '' || $productstock == '' ||   $productcat == '' ||   $productdesc == '' || $productquantitysell == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
            return $arlet;
        } else {
            $query = "INSERT INTO tbl_products(productname,
            productprice,
            productsale,
            productstock,
            productcat,
            productdesc,
            productquantitysell,
            productimg) VALUES ('$productname',
'$productprice',
'$productsale',
'$productstock',
'$productcat',
'$productdesc',
'$productquantitysell',
'$productimg')";
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

    public function show_product()
    {
        $query = "SELECT tbl_products.*, tbl_category.categoryname 
        FROM tbl_products
        INNER JOIN tbl_category ON tbl_products.productcat = tbl_category.categoryid
        ORDER BY tbl_products.productid DESC;";

        $result = $this->db->select($query);

        return $result;
    }
    public function show_productpricedes()
    {
        $query = "SELECT tbl_products.*, tbl_category.categoryname 
        FROM tbl_products
        INNER JOIN tbl_category ON tbl_products.productcat = tbl_category.categoryid
        ORDER BY tbl_products.productprice DESC;";

        $result = $this->db->select($query);

        return $result;
    }
    public function show_productpriceasc()
    {
        $query = "SELECT tbl_products.*, tbl_category.categoryname 
        FROM tbl_products
        INNER JOIN tbl_category ON tbl_products.productcat = tbl_category.categoryid
        ORDER BY tbl_products.productprice ASC;";

        $result = $this->db->select($query);

        return $result;
    }


    public function getproductbyid($id)
    {
        $query = "SELECT * FROM tbl_products WHERE productid = '$id'";
        $result = $this->db->select($query);

        return $result;
    }
    public function getproductbycat($id)
    {
        $query = "SELECT * FROM tbl_products WHERE productcat = '$id'";
        $result = $this->db->select($query);

        return $result;
    }


    public function update_product($data, $id)
    {
        $productname  = mysqli_real_escape_string($this->db->link, $data['productname']);
        $productprice = mysqli_real_escape_string($this->db->link, $data['productprice']);
        $productsale  = mysqli_real_escape_string($this->db->link, $data['productsale']);
        $productstock = mysqli_real_escape_string($this->db->link, $data['productstock']);
        $productcat   = mysqli_real_escape_string($this->db->link, $data['productcat']);
        $productdesc  = mysqli_real_escape_string($this->db->link, $data['productdesc']);
        $productquantitysell = mysqli_real_escape_string($this->db->link, $data['productquantitysell']);


        if (isset($_FILES['image']['tmp_name']) && $_FILES['image']['tmp_name'] != '') {
            $productimg   = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        }

        if (!isset($productimg)) {
            if ($productname == '' || $productprice == '' || $productsale == '' || $productstock == '' ||   $productcat == '' ||   $productdesc == '' || $productquantitysell == '') {
                $arlet = "<div class='alert alert-danger' role='alert'>Fields empty</div>";
                return $arlet;
            } else {
                $query = "UPDATE `tbl_products` SET `productname` = '$productname', `productprice` = '$productprice', `productsale` = '$productsale', `productstock` = '$productstock'  , `productcat` = '$productcat', `productdesc` = '$productdesc', `productquantitysell` = '$productquantitysell'   WHERE `tbl_products`.`productid` = '$id'";
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
                $productimg   = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            }
            if ($productname == '' || $productprice == '' || $productsale == '' || $productstock == '' ||   $productcat == '' ||   $productdesc == '' || $productquantitysell == '') {
                $arlet = "<div class='alert alert-danger' role='alert'>Fields empty</div>";
                return $arlet;
            } else {
                $query = "UPDATE `tbl_products` SET `productname` = '$productname', `productimg` = '$productimg', `productprice` = '$productprice', `productsale` = '$productsale', `productstock` = '$productstock'  , `productcat` = '$productcat', `productdesc` = '$productdesc', `productquantitysell` = '$productquantitysell'   WHERE `tbl_products`.`productid` = '$id'";


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
    public function delete_product($id)
    {
        $id = mysqli_real_escape_string($this->db->link, $id);
        $query = "DELETE FROM tbl_products WHERE productid = '$id'";
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
