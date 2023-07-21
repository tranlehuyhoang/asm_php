<?php
include_once __DIR__ . '/../lib/database.php';
include_once __DIR__ . '/../helpers/format.php';
?>

<?php
class about
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_user($data, $file)
    {
    }

    public function show_user()
    {
    }


    public function update_user($data, $id)
    {
    }
    public function delete_user($id)
    {
    }
}
