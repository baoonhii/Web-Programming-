<?php

   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
<header class="header">
   <div class="flex">
   <a href = "admin_page.php"><img id="logo"class="logo" src="uploaded_img/logo_admin.png" width="100px" height="90px"/></a>
      <nav class="navbar">
         <a href="admin_page.php">HOME</a>
         <a href="admin_movies.php">MOVIES</a>
         <a href="admin_tickets.php">TICKETS</a>
         <a href="admin_users.php">USERS</a>
         <a href="admin_contacts.php">MESSAGES</a>
      </nav>

      <div class="icons">
         <div id="menu-btn"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>
      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
         <p><?= $fetch_profile['name']; ?></p>
         <a href="admin_update_profile.php" class="btn">Update profile</a>
         <a href="logout.php" class="delete-btn">Logout</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">Login</a>
            <a href="register.php" class="option-btn">Register</a>
         </div>
      </div>

   </div>

</header>