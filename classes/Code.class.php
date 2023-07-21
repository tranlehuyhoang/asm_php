<?php
include_once __DIR__ . '/../lib/database.php';
include_once __DIR__ . '/../helpers/format.php';
?>

<?php
class code
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_code($data)
    {
        $codename = mysqli_real_escape_string($this->db->link, $data['codename']);
        $codepercent = mysqli_real_escape_string($this->db->link, $data['codepercent']);

        if (empty($codename) || $codepercent == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
            return $arlet;
        } else {
            $query = "INSERT INTO tbl_code(codename,codepercent) VALUES ('$codename','$codepercent')";
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

    public function show_code()
    {
        $query = "SELECT * FROM tbl_code order by codeid desc";
        $result = $this->db->select($query);

        return $result;
    }


    public function update_code($data, $id)
    {
        $codename = mysqli_real_escape_string($this->db->link, $data['codename']);
        $codepercent = mysqli_real_escape_string($this->db->link, $data['codepercent']);
        $id = mysqli_real_escape_string($this->db->link, $id);

        if ($codename == '' || $codepercent == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Category name empty</div>";
            return $arlet;
        } else {
            $query = "UPDATE tbl_code SET codename = '$codename', codepercent = '$codepercent' WHERE codeid = '$id'";
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
    public function delete_code($id)
    {
        $id = mysqli_real_escape_string($this->db->link, $id);
        $query = "DELETE FROM tbl_code WHERE codeid = '$id'";
        $result = $this->db->delete($query);


        if ($result) {
            $arlet = "<div class='alert alert-success' role='alert'>Delete Code Successfully</div>";
            return $arlet;
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Delete Code Successfully</div>";

            return $arlet;
        }
    }
    public function getcodebyid($id)

    {
        $query = "SELECT * FROM tbl_code WHERE codeid = '$id'";
        $result = $this->db->select($query);

        return $result;
    }
}
