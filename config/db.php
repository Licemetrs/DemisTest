<?
class DB{
    const USER = "root";
    const PASSWORD = "";
    const HOST = "localhost";
    const DB = "DemiasTaskBD";

    public static function connToDB() {
        $user     = self::USER;
        $password = self::PASSWORD;
        $host     = self::HOST;
        $db       = self::DB;

        $conn = new PDO("mysql:dbname=$db;host=$host", $user, $password);
        return $conn;
    }
}
