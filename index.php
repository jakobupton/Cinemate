<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Cinemate</title>
      <link rel="icon" href="img/icons/c_logo.png">
      <link rel="stylesheet" href="styles/index.css" />
      <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
   </head>
   <body>
      <?php require_once("private/model/initialize.php"); ?>
      <div class="sidebar">
         <div class="top">
            <div class="logo">
               <img src="img/icons/c_logo.png" alt="cinemate c"class="cinemate-logo"></img>
            </div>
         </div>
         <ul>
            <li>
               <a href="/cinemate/?page=home">
                  <div class="sidebar-item">
                     <img src="img/icons/icon_home.png" alt="showtimes"/>
                     <span class="nav-item">Home</span>
                  </div>
               </a>
            </li>
            <li>
               <a href="/cinemate/?page=showtimes">
                  <div class="sidebar-item">
                     <img src="img/icons/icon_theatre.png" alt="showtimes"/>
                     <span class="nav-item">Showtimes</span>
                  </div>
               </a>
            </li>
            <li>
               <a href="/cinemate/?page=movies">
                  <div class="sidebar-item">
                     <img src="img/icons/icon_movie.png" alt="showtimes"/>
                     <span class="nav-item">Movies</span>
                  </div>
               </a>
            </li>
            <li>
               <a href="/cinemate/?page=admin">
                  <div class="sidebar-item">
                     <img src="img/icons/icon_gear.png" alt="showtimes"/>
                     <span class="nav-item">Admin</span>
                  </div>
               </a>
            </li>
         </ul>
      </div>
      <div class="main-content">
         <?php 
            $page = $_GET['page'];
            if($page == "tickets"){
               require_once("private/view/tickets.php");
            }else if ($page == "movies"){
               require_once("private/view/movies.php");
            }else if ($page == "showtimes"){
               require_once("private/view/showtimes.php");
            }else if ($page == "admin"){
               require_once("private/view/admin.php");
            }else{
               require_once("private/view/home.php");
            }
         ?>
      </div>
   </body>
</html>