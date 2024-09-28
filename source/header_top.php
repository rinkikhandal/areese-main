 <div class="top-bar-area address-one-lines bg-dark text-light">
   <div class="container">
     <div class="row">
       <div class="col-md-8 address-info">
         <div class="info box">
           <ul>
             <li>
               <i class="fas fa-envelope-open"></i>
               info@areese.org
             </li>
             <li>
               <i class="fas fa-phone"></i>
               +91 0141 2791873&emsp;|&emsp;+91 76100 76200&emsp;|&emsp;+91 6376635779
             </li>
           </ul>
         </div>
       </div>
       <div class="user-login text-right col-md-4">
         <a class="popup-with-form" href="#register-form">
           <i class="fas fa-edit"></i> Register
         </a>
         <?php
          if (isset($_SESSION["user"])) {
          ?>
           <a class="logout" href="./assets/db/logout.inc.php">
             <i class="fa-solid fa-arrow-right"></i> Logout
           </a>
         <?php
            // echo $_SESSION["user_username"];
          } else {
          ?>
           <a class="popup-with-form" href="#login-form">
             <i class="fas fa-user"></i> Login
           </a>

         <?php
          }
          ?>

       </div>
     </div>
   </div>
 </div>