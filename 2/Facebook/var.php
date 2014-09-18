<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Copyright 2014 TheLocken, LLC -->
    <!-- U = user; T = Phone Number; N = Title; P = Picture Name; TH = Theme -->
 
        	<?php
             

	         echo "<link rel='apple-touch-icon-precomposed' href='" . $_GET["p"] . "' />";

	        ?>
        <?php 
          
          echo "<title>" . $_GET["n"] . "</title>";

        ?>
    </head>
    <body>
            <?php

            setcookie("faceBook_" . $_GET["th"] . "", "yes");

            ?>
            <?php
            
           if(isset($_COOKIE["faceBook_" . $_GET["th"] . ""]))
             echo "<script>window.location.replace('fb://');</script>";
             else
               echo "Add to home screen";
               

            ?>

    </body>
</html>
