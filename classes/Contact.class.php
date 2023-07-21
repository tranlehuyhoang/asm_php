<?php
include_once __DIR__ . '/../lib/database.php';
include_once __DIR__ . '/../helpers/format.php';
?>

<?php
class contact
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_contact($data)
    {
        $contactuserid = mysqli_real_escape_string($this->db->link, $data['contactuserid']);
        $contactdesc = mysqli_real_escape_string($this->db->link, $data['contactdesc']);

        if ($contactuserid == '' || $contactdesc == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
            return $arlet;
        } else {
            $query = "INSERT INTO tbl_contacts(contactuserid,contactdesc) VALUES ('$contactuserid','$contactdesc')";
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

    public function show_contact()
    {
        $query = "SELECT tbl_contacts.*, tbl_users.username, tbl_users.useremail   
        FROM tbl_contacts
        INNER JOIN tbl_users ON tbl_contacts.contactuserid = tbl_users.userid
        ORDER BY tbl_contacts.contactid DESC;";
        $result = $this->db->select($query);

        return $result;
    }


    public function update_contact($data, $id)
    {
        $contactuserid = mysqli_real_escape_string($this->db->link, $data['contactuserid']);
        $contactdesc = mysqli_real_escape_string($this->db->link, $data['contactdesc']);
        $id = mysqli_real_escape_string($this->db->link, $id);

        if ($contactuserid == '' || $contactdesc == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Category name empty</div>";
            return $arlet;
        } else {
            $query = "UPDATE tbl_contacts SET contactuserid = '$contactuserid', contactdesc = '$contactdesc' WHERE contactid = '$id'";
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
    public function delete_contact($id)
    {
        $id = mysqli_real_escape_string($this->db->link, $id);
        $query = "DELETE FROM tbl_contacts WHERE contactid = '$id'";
        $result = $this->db->delete($query);


        if ($result) {
            $arlet = "<div class='alert alert-success' role='alert'>Delete Code Successfully</div>";
            return $arlet;
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Delete Code Successfully</div>";

            return $arlet;
        }
    }
    public function getcontactbyid($id)

    {
        $query = "SELECT * FROM tbl_contacts WHERE contactid = '$id'";
        $result = $this->db->select($query);

        return $result;
    }
}
