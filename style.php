<?php
require_once('../../../wp-load.php');
header("Content-type: text/css"); 

echo '

.timeline-footer{
  background-image: url("'.get_stylesheet_directory_uri().'/img/tlfooter.jpg");
  background-repeat: repeat-x;
}
footer{
  background-image: url("'.get_stylesheet_directory_uri().'/img/footer.jpg");
  background-repeat: repeat-x;
}
.logo{
  background-image: url("'.get_stylesheet_directory_uri().'/img/logo.png");
}

'; ?>
