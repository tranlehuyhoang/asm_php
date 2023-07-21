<?php
include_once __DIR__ . '/../lib/database.php';
include_once __DIR__ . '/../helpers/format.php';
?>

<?php
class blog
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_blog($data)
    {
        $blogtitle = mysqli_real_escape_string($this->db->link, $data['blogtitle']);
        $blogheader = mysqli_real_escape_string($this->db->link, $data['blogheader']);
        $blogdesc = mysqli_real_escape_string($this->db->link, $data['blogdesc']);
        $blogtagid = mysqli_real_escape_string($this->db->link, $data['blogtagid']);
        $blogimg = addslashes(file_get_contents($_FILES['image']['tmp_name']));

        if ($blogtitle == '' || $blogheader == '' || $blogdesc == '' || $blogtagid == '' || !$blogimg) {
            $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
            return $arlet;
        } else {
            $query = "INSERT INTO tbl_blogs(blogtitle,blogheader,blogimg,blogdesc,blogtagid) VALUES ('$blogtitle','$blogheader','$blogimg','$blogdesc','$blogtagid')";
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

    public function show_blog()
    {
        $query = "SELECT * FROM tbl_blogs order by blogid desc";
        $result = $this->db->select($query);

        return $result;
    }


    public function update_blog($data, $id)
    {
        $blogtitle = mysqli_real_escape_string($this->db->link, $data['blogtitle']);
        $blogheader = mysqli_real_escape_string($this->db->link, $data['blogheader']);
        $blogdesc = mysqli_real_escape_string($this->db->link, $data['blogdesc']);
        $blogtagid = mysqli_real_escape_string($this->db->link, $data['blogtagid']);

        if (isset($_FILES['image']['tmp_name']) && $_FILES['image']['tmp_name'] != '') {
            $blogimg = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        }

        if (!isset($blogimg)) {
            if ($blogtitle == '' || $blogheader == '' || $blogdesc == '' || $blogtagid == '') {
                $arlet = "<div class='alert alert-danger' role='alert'>Fields empty</div>";
                return $arlet;
            } else {
                $query = "UPDATE `tbl_blogs` SET `blogtitle` = '$blogtitle', `blogheader` = '$blogheader', `blogdesc` = '$blogdesc', `blogtagid` = '$blogtagid'   WHERE `tbl_blogs`.`blogid` = '$id'";
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
                $blogimg = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            }
            if ($blogtitle == '' || $blogheader == '' || $blogdesc == '' || $blogtagid == '') {
                $arlet = "<div class='alert alert-danger' role='alert'>Fields empty</div>";
                return $arlet;
            } else {
                $query = "UPDATE `tbl_blogs` SET `blogtitle` = '$blogtitle', `blogheader` = '$blogheader', `blogdesc` = '$blogdesc', `blogtagid` = '$blogtagid' ,  `blogimg` = '$blogimg'  WHERE `tbl_blogs`.`blogid` = '$id'";


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
    public function delete_blog($id)
    {
        $id = mysqli_real_escape_string($this->db->link, $id);
        $query = "DELETE FROM tbl_blogs WHERE blogid = '$id'";
        $result = $this->db->delete($query);


        if ($result) {
            $arlet = "<div class='alert alert-success' role='alert'>Insert Category Successfully</div>";
            return $arlet;
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Insert Category Successfully</div>";

            return $arlet;
        }
    }
    public function getblogbyid($id)

    {
        $query = "SELECT * FROM tbl_blogs WHERE blogid = '$id'";
        $result = $this->db->select($query);

        return $result;
    }
}
