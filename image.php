<?php
if(isset($_POST['submit'])){
//echo '<pre>';

  // print_r($_FILES);
 //die();
   $file=$_FILES['file']['tmp_name'];
//header('Content-type:image/jpeg');
//$file="image/sample.jpg";
list($width,$height)=getimagesize($file);
//echo $width; 
$nwidth=$width/4;
$nheight=$height/4;
$newimage=imagecreatetruecolor($nwidth,$nheight);
$source=imagecreatefromjpeg($file);
imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
$file_name=time().'.jpg';
imagejpeg($newimage,'image/resize/'.$file_name);

}
?>
<img src="image/resize/<?php echo $file_name;?>">

<form method="post" enctype="multipart/form-data">
   <input type="file" name="file" required>
   <input type="submit" name="submit"/>
</form>