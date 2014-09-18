
<!DOCTYPE html>
<html lang="en">
    <!-- Copyright 2014 TheLocken, LLC -->
    <head>
        	<?php
             
	         // SUCESS YESSSS!
	         echo "<link rel='apple-touch-icon-precomposed' href='" . $_GET["pic"] . "' />";

	        ?>
        <title>VariableTest2</title>
    </head>
    <body>
            <?php
                
             echo "<script>window.location.replace('sms:" . $_GET["text"] . "');</script> ";
                
            ?>
    </body>
</html>
