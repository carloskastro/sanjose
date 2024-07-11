<?php 
 require_once 'class.dbconfig.php';

 class adm
 {
    //declarar variables
    private $conn;

    public function __construct()
    {
        $database = new database();
        $db = $database->dbconnection();
        $this->conn = $db;
    }

    public function runQuery($sql)
    {
      $temp = $this->conn->prepare($sql);
      return $temp;
    }

    public function reg_adm($fname,$lname,$email,$pass)
    {
        try{
            $epass = md5($pass);
            $temp = $this->conn->prepare("INSERT INTO adm (fname,lname,email,pass) VALUES (?,?,?,?)");
            $temp->bindparam(1, $fname);
            $temp->bindparam(2, $lname);
            $temp->bindparam(3, $email);
            $temp->bindparam(4, $epass);
            $temp->execute();
            return $temp;
            
        }catch (PDOException $err){
            echo $err->getMessage();
        }
    }
    public function upd_adm($idadm,$fname,$lname,$email){
        try{
            $temp = $this->conn->prepare("UPDATE adm SET fname=?, lname=?,email=? WHERE idadm=?");
            $temp->bindparam(1, $fname);
            $temp->bindparam(2, $lname);
            $temp->bindparam(3, $email);
            $temp->bindparam(4, $idadm); 
            $temp->execute();
            return $temp;
        }catch (PDOException $err){
            echo $err->getMessage();
        }
    }
    public function login($email,$pass){
        try{
            $temp = $this->conn->prepare('SELECT * FROM adm WHERE email=:adm_email');
            $temp->execute(array(":adm_email" => $email));
            $admrow = $temp->fetch(PDO::FETCH_ASSOC);

            if ($admrow['pass'] == md5($pass)) {
                $_SESSION['admsession'] = $admrow['idadm'];
                return true;
            }else {
                header('location: ./?error');
                exit;
            }
        }catch (PDOException $err){
            echo $err->getMessage();
        } 
    }

    public function logged_in(){
        if (isset($_SESSION['admsession'])) {
            return true;
        }
    }

    public function logout(){
        session_unset();
        session_destroy();
        $_SESSION['admsession'] = false;
    }

    public function redirect($url){
        header("location: $url");
    }


   

 }

?>