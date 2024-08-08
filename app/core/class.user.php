<?php 
 require_once 'class.dbconfig.php';

 class user
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

    public function reguser($fname,$lname,$email,$pass)
    {
        try{
            $epass = md5($pass);
            $temp = $this->conn->prepare("INSERT INTO user (fname,lname,email,pass) VALUES (?,?,?,?)");
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
    public function upduser($idadm,$fname,$lname,$email){
        try{
            $temp = $this->conn->prepare("UPDATE user SET fname=?, lname=?,email=? WHERE id=?");
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

    public function deluser($delidadm){
        try{
            $temp = $this->conn->prepare("DELETE FROM user WHERE id=?");
            $temp->bindparam(1, $delidadm);
            $temp->execute();
            return $temp;
        }catch (PDOException $err){
            //echo $err->getMessage();
        }
    }  

    public function login($email,$pass){
        try{
            $temp = $this->conn->prepare('SELECT * FROM user WHERE email=:useremail');
            $temp->execute(array(":useremail" => $email));
            $admrow = $temp->fetch(PDO::FETCH_ASSOC);

            if ($admrow['pass'] == md5($pass)) {
                $_SESSION['usersession'] = $admrow['id'];
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