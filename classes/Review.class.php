<?php
include_once __DIR__ . '/../lib/database.php';
include_once __DIR__ . '/../helpers/format.php';
?>

<?php
class review
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_review($data)
    {
        $reviewuserid = mysqli_real_escape_string($this->db->link, $data['reviewuserid']);
        $reviewcontent = mysqli_real_escape_string($this->db->link, $data['reviewcontent']);
        $reviewrating = mysqli_real_escape_string($this->db->link, $data['reviewrating']);
        $reviewproductid = mysqli_real_escape_string($this->db->link, $data['reviewproductid']);

        if ($reviewuserid == '' || $reviewcontent == '' || $reviewrating == '' || $reviewproductid == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
            return $arlet;
        } else {
            $query = "INSERT INTO tbl_reviews(reviewuserid,reviewcontent,reviewrating,reviewproductid) VALUES ('$reviewuserid','$reviewcontent','$reviewrating','$reviewproductid')";
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

    public function show_review()
    {
        $query = "SELECT tbl_reviews.*, tbl_products.productimg, tbl_products.productid, tbl_users.username, tbl_users.useremail, tbl_users.userid   
        FROM tbl_reviews
        INNER JOIN tbl_products ON tbl_reviews.reviewproductid = tbl_products.productid
        INNER JOIN tbl_users ON tbl_reviews.reviewuserid = tbl_users.userid
        ORDER BY tbl_reviews.reviewid DESC;";
        $result = $this->db->select($query);

        return $result;
    }


    public function update_review($data, $id)
    {
        $reviewuserid = mysqli_real_escape_string($this->db->link, $data['reviewuserid']);
        $reviewcontent = mysqli_real_escape_string($this->db->link, $data['reviewcontent']);
        $reviewrating = mysqli_real_escape_string($this->db->link, $data['reviewrating']);
        $reviewproductid = mysqli_real_escape_string($this->db->link, $data['reviewproductid']);
        $id = mysqli_real_escape_string($this->db->link, $id);

        if ($reviewuserid == '' || $reviewcontent == '' || $reviewrating == '' || $reviewproductid == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Category name empty</div>";
            return $arlet;
        } else {
            $query = "UPDATE tbl_reviews SET reviewuserid = '$reviewuserid', reviewcontent = '$reviewcontent',reviewrating = '$reviewrating', reviewproductid = '$reviewproductid' WHERE reviewid = '$id'";
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
    public function delete_review($id)
    {
        $id = mysqli_real_escape_string($this->db->link, $id);
        $query = "DELETE FROM tbl_reviews WHERE reviewid = '$id'";
        $result = $this->db->delete($query);


        if ($result) {
            $arlet = "<div class='alert alert-success' role='alert'>Delete Code Successfully</div>";
            return $arlet;
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Delete Code Successfully</div>";

            return $arlet;
        }
    }
    public function getreviewbyid($id)

    {
        $query = "SELECT * FROM tbl_reviews WHERE reviewid = '$id'";
        $result = $this->db->select($query);

        return $result;
    }
    public function getreviewbyproduct($id)

    {
        $query = "SELECT tbl_reviews.*, tbl_products.productimg, tbl_products.productid, tbl_users.username, tbl_users.useremail, tbl_users.userid   
        FROM tbl_reviews
        INNER JOIN tbl_products ON tbl_reviews.reviewproductid = tbl_products.productid
        INNER JOIN tbl_users ON tbl_reviews.reviewuserid = tbl_users.userid
        WHERE reviewproductid = '$id'
        ORDER BY tbl_reviews.reviewid DESC;";

        $result = $this->db->select($query);

        return $result;
    }
}
