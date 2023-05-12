<?php
   
 include "config.php";

    session_destroy();
    header('Location:musichub.php');

?>




<html>
     <head>
        <title>Logout</title>
        <style>
            *{
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                padding: 0;
              
            }
            #container{
                width: 30%;
                height: 30%;
                border: 3px solid grey;
                margin: 15% auto;
                border-radius: 8px;
                text-align: center;
            }
            #container h1{
                margin: 0px;
                font-weight: bold;
                padding: 10px;
                background-color: cornflowerblue;
                color: white;
                border-radius: 6px 6px 0px 0px;
            }
            #container h1:hover{
                background-color:white;
                color: cornflowerblue;
              
            }
            #container form button{
                margin: 30px;
                border-radius: 10px;
                font-weight: bold;
                width: 130px;
                height: 50px;
                border: none;
                background-color: lightseagreen;
                color: white;
            }
            #container form button:hover{
                background-color: #fff;
                color: lightseagreen;
            }
        </style>
     </head>
     <body>
         <div id="container">
            <h1>LOGOUT</h1>
             <form method="post">
                <button type="logout" value="logout" name="logout">LOGOUT</button>
             </form>
         </div>
     </body>
   </html>