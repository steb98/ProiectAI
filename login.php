<!DOCTYPE html>
<html>

<?php

  include "header.php";
  require "Database.class.php";
  session_start();
  

  $err="";
  
  if( isset($_POST["logout"]) ){
    $_SESSION["loggedin_user"]="";
    $_SESSION["loggedin_role"]="";
    unset($_SESSION["loggedin_user"]);
    unset($_SESSION["loggedin_role"]);
    session_destroy();
  }

  if(isset($_SESSION["loggedin_user"])){
    $err = "Userul ".$_SESSION["loggedin_user"]." este deja logat cu rolul de ".$_SESSION["loggedin_user"];
  }


    if( isset($_POST["username"]) && isset($_POST["password"]) ){
      $user = trim($_POST["username"]);
      $pass = trim($_POST["password"]);
        $sql_stmt = "SELECT * from users where username = :username";
        $pdo = ( new Database() )->getConn();
        if($stmt = $pdo->prepare($sql_stmt)){
          $stmt -> bindParam(":username",$user,PDO::PARAM_STR);
          $stmt -> execute();
          if($stmt->rowCount() == 1){
            if($row = $stmt->fetch()){
              $password = $row["password"];
              if($pass === $password){
                $_SESSION["loggedin_user"] = $row["id"];
                $_SESSION["loggedin_role"] = $row["role"];
                $err = "userul ".$_SESSION["loggedin_user"]." este logat";
              }else{
                $err = "Logare esuata. Verifica parola si/sau userul";
              }
            }
          }else{
            $err = "Logare esuata. Verifica parola si/sau userul";
          }
        }

    }


?>

  <?php 


  if(!isset($_SESSION["loggedin_user"]))
  {

  $p = <<< LODDEDIN
  <form class="login-form" method="POST">
  <h2>Login</h2>
  <label for="username">Username</label>
  <input name = "username" type="text" id="username"></br>
  <label for="password">Password</label>
  <input name="password" type="password" id="password"></br>
  <input class="button" type="submit">
  {$err}
  <p> Not yet an user? <a href=/register.php> Register here </a>
  </form>

  LODDEDIN;

  echo $p;

  }else{
    $user = $_SESSION["loggedin_user"];
    $rol = $_SESSION["loggedin_role"];
    $p = <<< LODDEDOUT
    
    <form  class="login-form" method="POST">
    <p> {$err} </p>
    <input name="logout" value="logout1" class="button" type="submit">
    <p> Register a new account <a href = "/register.php">here</a> </p>
    </form>
    
    LODDEDOUT;
    echo $p;

  }
  
  ?>

    
  <?php include "footer.php" ?>
  </body>

  
</html>