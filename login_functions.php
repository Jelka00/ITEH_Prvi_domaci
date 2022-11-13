<?php
session_start();
//Klasa za konekciju sa bazom
class Connection{
  public $host = "localhost";
  public $user = "root";
  public $password = "";
  public $db_name = "iteh_prvi_domaci";
  public $conn;

  public function __construct(){
    $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
  }
}

class Register extends Connection{
  public function registration($name, $username, $email, $password, $confirmpassword){
    $duplicate = mysqli_query($this->conn, "SELECT * FROM skijasi WHERE korisnicko_ime = '$username' OR email = '$email'");
    //Provera parametara unosa
    if(mysqli_num_rows($duplicate) > 0){
      return 10;
    }
    else{
      if($password == $confirmpassword){
        //Ubacivanje podataka u bazu ako ispunjavaju uslove
        $query = "INSERT INTO skijasi VALUES('', '$name', '$username', '$email', '$password','')";
        mysqli_query($this->conn, $query);
        return 1;
      }
      else{
        return 100;
      }
    }
  }
}
class Login extends Connection{
    public $id;
    public function login($usernameemail, $password){
        $result = mysqli_query($this->conn, "SELECT * FROM skijasi WHERE korisnicko_ime = '$usernameemail' OR email = '$usernameemail'");
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0){
            if($password == $row["lozinka"]){
                $this->id = $row["id_korisnika"];
                return 1;
            }else{
                return 10;
            }
        }else{
            return 100;
        }
    }

   public function idUser(){
    return $this->id;
   } 
}
