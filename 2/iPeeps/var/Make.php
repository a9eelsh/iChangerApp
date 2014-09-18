<!DOCTYPE html>
<html lang="en">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Copyright 2014 TheLocken, LLC -->
    <!-- U = user; T = Phone Number; N = Title; P = Picture Name; -->
    <head>
        	<?php
             

	         echo "<link rel='apple-touch-icon-precomposed' href='upload/" . $_GET["p"] . "' />";

	        ?>
        <?php 
          
          echo "<title>" . $_GET["n"] . "</title>";

        ?>
    </head>
    <body>
            <?php
                
             echo "<script>window.location.replace('sms:" . $_GET["t"] . "');</script> ";
                
            ?>
    </body>
</html>
