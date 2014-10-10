<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Index</title>
</head>

<body>

<h1> Hello </h1>



<?php
if(isset($_REQUEST['submit']))
{
  $filename=  $_FILES["imgfile"]["name"];
  if ((($_FILES["imgfile"]["type"] == "image/gif")|| ($_FILES["imgfile"]["type"] == "image/jpeg") || ($_FILES["imgfile"]["type"] == "image/png")  || ($_FILES["imgfile"]["type"] == "image/pjpeg")) && ($_FILES["imgfile"]["size"] < 200000))
  {
    if(file_exists($_FILES["imgfile"]["name"]))
    {
      echo "File name exists.";
    }
    else
    {
      move_uploaded_file($_FILES["imgfile"]["tmp_name"],"uploads/$filename");
      echo "Upload Successful . <a href='uploads/$filename'>Click here</a> to view the uploaded image";
    }
  }
  else
  {
    echo "invalid file.";
  }
}
else
{
?>
<form method="post" enctype="multipart/form-data">
File name:<input type="file" name="imgfile"><br>
<input type="submit" name="submit" value="upload">
</form>
<?php
}
?> 

</body>
</html>

