<!DOCTYPE html>
<html>

<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require "Database.class.php";

    if ( isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["role"]))  {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"];


        $sql = 'SELECT * FROM users where username = "' . $username . '"';
        $conn = (new Database)->getConn();
        $user = $conn->query($sql)->fetch();


        if(!$user){ //daca nu avem userul in db
            $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
            try{
                $conn->prepare($sql)->execute([$username,$password,$role]);
                $err = "Userul a fost creat cu succes!";
            }catch(Exception $e){
                $err = "Userul nu a putut fi creat." . $e->getMessage();
            }
            
        }else{
            $err = "User exista deja!";
        }
        

        
    }



    if(isset($_SESSION["loggedin_role"]) && $_SESSION["loggedin_role"]  != "admin"){
        include "header.php";
        print("<p> Ask an admin for an account</p>");
        include "footer.php";
        print("</body></html>");
        die();
    }
    if(!isset($_SESSION["loggedin_role"])){
        include "header.php";
        print("<p> Ask an admin for an account</p>");
        include "footer.php";
        print("</body></html>");
        die();
    }

  include "header.php";

  ?>

<form class="login-form" method="POST">
    <h2>Register new user</h2>
    <label for="username">Username</label>
    <input name = "username" type="text" id="username"></br>    
    <label for="password">Password</label>
    <input name="password" type="password" id="password"></br>
    <select name="role">
        <option value="admin">Admin</option>
        <option value="student">Student</option>
    </select>
    <br>
    <input class="button" type="submit">
    <br>
    <?php if(isset($err)) print($err); ?>
</form>





<?php include "footer.php" ?>
  </body> 
</html>