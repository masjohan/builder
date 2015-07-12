<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Site builder</title>
    <?php include_once('html/includes/head.php'); ?>
    <!-- CK Editor script -->
    <script src="//cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>
  </head>
  <body>

  	<textarea name="myeditor"></textarea>
        <script>
            CKEDITOR.replace('myeditor');
        </script>

  	<?php include_once('html/includes/footer.php'); ?>
  </body>
</html>