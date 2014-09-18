<?php setcookie("faceTime_", "yes");
if(isset($_COOKIE["faceTime_"]))
             echo "<script>window.location.replace('facetime:');</script>";
             else
               echo "Add to home screen"; ?>
