<?
require_once "config/db.php";
require_once "models/Model.php";

class FormModel extends Model {
    public function sendForm(){
        $sql = "INSERT INTO contact (name,address,phone,email)
    VALUES (:name,:address,:phone,:email)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindValue(":name", $_POST["user_fio"], PDO::PARAM_STR);
    $stmt->bindValue(":address", $_POST["user_address"], PDO::PARAM_STR);
    $stmt->bindValue(":phone", $_POST["user_phone"], PDO::PARAM_STR);
    $stmt->bindValue(":email", $_POST["user_email"], PDO::PARAM_STR);
    $stmt->execute();
    }
}
$form = new FormModel;
$form->sendForm();