<?php
require_once('../../../wp-load.php');
header("Content-type: text/css"); 

echo '

.twitter {
  background: url("'.get_stylesheet_directory_uri().'/ico/twitter.png") no-repeat scroll left center #000;
}

.facebook {
  background: url("'.get_stylesheet_directory_uri().'/ico/facebook.png") left no-repeat #000;

}

.rss {
  background: url("'.get_stylesheet_directory_uri().'/ico/rss.png") left no-repeat #000;
}


.calendari {
  background: url("'.get_stylesheet_directory_uri().'/ico/calendari.png") left no-repeat #000;
}
@font-face {
  font-family: "Glyphicons Halflings";
  src: url("'.get_stylesheet_directory_uri().'/fonts/glyphicons-halflings-regular.eot");
  src: url("'.get_stylesheet_directory_uri().'/fonts/glyphicons-halflings-regular.eot?#iefix") format("embedded-opentype"), url("'.get_stylesheet_directory_uri().'/fonts/glyphicons-halflings-regular.woff") format("woff"), url("'.get_stylesheet_directory_uri().'/fonts/glyphicons-halflings-regular.ttf") format("truetype"), url("'.get_stylesheet_directory_uri().'/fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular") format("svg");
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: "Glyphicons Halflings";
  font-style: normal;
  font-weight: normal;
  line-height: 1;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

'; ?>
