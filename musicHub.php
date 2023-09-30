<?php 

include "config.php"; 
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MuSiC-_-hUb</title>
</head>
<body>

      <header>

          <a href="./privacy.html">Privacy Policy</a>
          <a href="./tnc.html">Terms And Condition</a>
           
          <!-- username is set -->
          <?php if(!isset($_SESSION['email'])){ ?>
          <div class="dropdown">
             <button class="dropbtn">Login/Signup</button>
             <div class="dropdown-content">
               <a href="login.php">Login To Existing Account</a>
               <a href="register.html">Create A New Account</a>    
             </div>
          </div>
         
          <!--user name is not set-->
          <?php } else { ?>
          <div class="dropdown">
             <button class="dropbtn"><?php echo $_SESSION['email'] ?></button>
             <div class="dropdown-content">
               <a href="changePass.php">Change Password</a>
               <a href="logout.php">Logout</a>    
             </div>
          </div>
         <?php } ?>
          
        </header>

        <section class="branding">
           <div class="left-align">
               <img src="" alt="Music Hub">
               <h1>MUSIC HUB</h1>
               <p>---------------------------------------------<br>One stop for MUSIC.</p>
           </div> 
           <div class="right-align">
                 <form action="search.html" method="get" id="searchbox" class="SEARCH">
                      <input type="search" name="key" id="search-inp" placeholder="search for songs"/>
                      <button type="submit" id="search-btn">Search</button>
                 </form>
           </div> 
        </section>

        <nav>
           <ul id="menubar">
              <li><a href="musichub.php"> Home</a></li>
              <li><a href="hits.html"> New Hits</a></li>
              <li><a href="recent.html"> Recently Added</a></li>
              <li><a href="favs.html"> Favourites</a></li>
              <li><a href="playlist.html"> Playlists</a></li>
              <li><a href="about.html"> About Us</a></li>
           </ul>
        </nav>
</body>
</html>
