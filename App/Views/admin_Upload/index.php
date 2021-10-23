<?php require_once "./public/php/admin_upload/index.php";?>
<form action="<?php echo PRONAME?>/admin/upload" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="imgUpload">
</form>