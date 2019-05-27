<?php
Class conexion
 {
    protected $db_name = "persona1";
    protected $db_user = "root";
    protected $db_pass = "";
    protected $db_host = "localhost";
    protected $pdo = "null";

    // Establish Connection to Database.
    public function connectar()
        {
        try
            {
            $this->pdo = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name."", $this->db_user, $this->db_pass);
            //echo "conexion exitosa";
            } 
        catch(PDOException $e)
            {
            echo $e->getMessage();
            }
        }

    public function query($sql)
        {
        return $this->pdo->query($sql);
        }
    public function lastInsertId()
        {
        return $this->pdo->lastInsertId();
        }
    }
    
    
/*$dsn = "mysql:host=localhost;dbname=persona1;charset=utf8mb4";
$options = [
  PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];
try {
  $pdo = new PDO($dsn, "root", "", $options);
  //echo "conexion exitosa";
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('error en la conexion'); //something a user can understand
}*/

?>