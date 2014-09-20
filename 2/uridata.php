<!-- COPYRIGHT 2014 TheLocken LLC All Rights Reserved + DMCA Rights -->
<?php

$uri = 'data:text/html;base64,' . base64_encode($html);
echo "$uri \n";
?>
<a href="<?php print $uri; ?>">GENERATED URL</a>