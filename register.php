<?php
 
  include "config.php";
   
    if(isset($_POST['submit'])) {
      $f_name = mysqli_real_escape_string($conn,$_POST['fname']);
      $s_name = mysqli_real_escape_string($conn,$_POST['sname']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
      $phn_no = mysqli_real_escape_string($conn,$_POST['number']);
      echo "<script>alert('Hi $f_name');";
    }
  

?>

<html>
  <head>
      <title>Create new account</title>
      <style>
          *{
            margin: 0;
            padding: 0;
          }
          #container{
             margin: 100px auto;
             border: 3px solid  grey;
             text-align: center;
             width: 50%;       
             font-family: Verdana, Geneva, Tahoma, sans-serif; 
             border-radius: 8px;
             box-shadow: 2px blueviolet;
             position: relative;
            }      
            #container h1{
               background-color: cornflowerblue;
               font-weight: bold;
               padding: 30px;
               color: #fff;
               border-radius: 6px 6px 0px 0px;
            }    
            #container .name{
               height: 40px;
               display: flex;
               padding: 20px;
               border-radius: 8px;
               
              }
              #name1{
                padding-left: 20px;
                width: 150px;
                margin-left: 40px;
              }
              #name2{
                padding-left: 20px;
                width: 200px;
                margin-left: 10px;
              }
              #email{
                 padding-left: 30px;
                 height: 40px;
                 width: 300px;
                 padding: 20px;
                 float: left;
                 margin-left: 60px;
              }
              #password{
                 margin-left: 20px;
                 padding-left: 30px;
                 height: 40px;
                 width: 250px;
                 float: left;
              }
              #container .number{
                display: inline-flex;
                white-space: nowrap;
                float: inline-start;
                margin-left: 0px;
              }
              #container select{
                float: left;
                margin-left: -300px;
                height: 40px;
                width: 40px;
              }
              #number{
                padding-left: 30px;
                margin-left: 10px;
                height: 40px;
                width: 300px;
              }
              #button{
                display: inline block;
                margin: 10px;
              }
              #submit{
                padding-top: 4px;
                margin-top: 0px;
                display: flex;
                margin-left: 200px;
                height: 40px;
                width: 100px;
              }
              #reset{
                height: 40px;
                width: 100px;
                margin-top: -40px;
              }
              #container button{
                border-radius: 3px;
                border: none;
                color: #111;
                background-color: cornflowerblue;
              }
              #container  button a{
                text-decoration: none; 
              }
            
              #container button:hover{
                  background-color: #111;
                  color: #fff;
                  border-radius: 8px;
                  font-weight: bold;
              }
         
              @media only screen and (max-width: 1274px) {
                #container{
                  margin: 100px auto;
                  border: 3px solid  grey;
                  text-align: center;
                  width: 75%;       
                  font-family: Verdana, Geneva, Tahoma, sans-serif; 
                  border-radius: 8px;
                  box-shadow: 2px blueviolet;
                  position: relative;
              }  
            }
              @media only screen and (max-width: 1230px) {
                #name1{
                    
                    height: 30px;
                    width: 200px;
                }
                #name2{
                 
                    height: 30px;
                    width: 200px;
                }
                #email{
                    margin-top: 10px;
                    height: 10px;
                    width: 300px;
                }
               #password{
                    margin-top: 10px;
                    height: 30px;
                    width: 200px;
                }
                #container .number{
                     margin-top: 10px;
                     margin-left: 260px;
                     height: 20px;
                     width: 200px;
                }
              }

      </style>
  </head>
  <body>
      <div id="container">
         <h1>CREATE NEW ACCOUNT</h1>
           <form method="post" action="">
               <div class="name">
                 <input type="text" class="textbox" name="fname" id="name1" placeholder="First Name" required>
                 <input type="text" class="textbox" name="sname" id="name2" placeholder="Second Name" required>
                </div>
             <input type="email" class="email" name="email" id="email" placeholder="Enter the email address" required>
             <input type="password" class="password" name="pwd" id="password" placeholder="Enter the password"><br><br><br>
              <div class="number">
                 <select>
                  <option value="90">90</option>
                  <option value="91">91</option>
                  <option value="92">92</option>
                  <option value="93">93</option>
                  <option value="94">94</option>
                  <option value="95">95</option>
                  <option value="96">96</option>
                 </select>
                <input type="number"  id="number" name="number" placeholder="Enter the number" required>
              </div><br><BR><BR>
              <div id="button">
                 <button type="submit" value="submit" id="submit" name="submit">CREATE ACCOUNT</a></button>
                 <button type="reset" id="reset">CLEAR</button>
              </div> 
           </form>
      </div>
  </body>
</html>