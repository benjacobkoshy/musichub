<?php

include "config.php";

  if(isset($_POST['submit'])) {
     $email = mysqli_real_escape_string($conn,$_POST['email']);
     $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
    
    
    /*  $sql_query = "SELECT email FROM users WHERE email='".$email."'";
      $result = mysqli_query($conn, $sql_query); 
      $row = mysqli_fetch_array($result);
      if($email!=$row){
         echo "<script> alert('Email is not registered. Create new account');</script>";
         return;
      }*/


       if($email!="" && $pwd!=""){
         
         $sql_query = "SELECT count(*) AS usercount FROM users WHERE email='".$email."' AND password='".$pwd."';";
          $result = mysqli_query($conn, $sql_query);
          $row = mysqli_fetch_array($result);
          $count = $row['usercount'];
         
          if($count>0){

            $sql_query = "SELECT email AS username FROM users WHERE email='".$email."' AND password='".$pwd."';";
            $result = mysqli_query($conn, $sql_query);
            $row = mysqli_fetch_array($result);
            $_SESSION['username'] = $row['username'];
            header('Location:musichub.php');
          
          }else{
            echo "<script>alert('Username or password does not match');</script>";
          }

       }else{
         echo "<script>alert('Username or password does not entered');</script>";
       }
   }

?>

<html>
  <head>
     <title>Login Page </title>
     <style>
          #container{
             width: 40%;
             border: 3px solid grey;
             margin: 150px auto;
             border-radius: 8px;  
          }
          #container h1{
            background-color: cornflowerblue;
            font-weight: bold;
            color: #fff;
            padding: 10px;
            margin: 0px;
            border-radius: 6px 6px 0px 0px;
            text-align: center;
          }
          #container h1:hover{
             background-color: #fff;
             color: cornflowerblue;
          }
          #container form{
                text-align: center;
          }
          .textbox{
            margin-top: 30px;
            width: 80%;
            padding: 7px;
          }
          #container form button{
             margin-top: 20px;
             border-radius: 30px;
             width: 100px;
             background-color: lightseagreen;
             color: white;
             border: none;
             padding: 7px;
          }
          #container form button:hover{
            color: lightseagreen;
            background-color: white;
          }
     </style>
  </head>
  <body>
     <div id="container">
      <h1>LOGIN PAGE</h1>
       <form method="post" action=""> 
          <input type="email" class="textbox" id="email" name="email" placeholder="Enter email address" />
          <input type="password" class="textbox" id="pwd_inp" name="pwd" placeholder="Enter Password" /><br>
          <button type="submit" value="submit" name="submit">LOGIN</button>
          
       </form>
    </div>
  </body>
</html>