<?php
//	array (size=1)
//'file' => 
//  array (size=5)
//    'name' => string '52d8c966e1d74080.jpg!200x200.jpg' (length=32)
//    'type' => string 'image/jpeg' (length=10)
//    'tmp_name' => string 'D:\wamp\wamp\tmp\php9964.tmp' (length=28)
//    'error' => int 0
//    'size' => int 3261
//var_dump($_FILES);
//if(is_uploaded_file($_FILES["file"]["tmp_name"])){
//	$name=substr($_FILES["file"]["name"],strrpos($_FILES["file"]["name"],"."));
//		if($name==".jpg"||$name==".jpeg"){
//			move_uploaded_file($_FILES["file"]["tmp_name"],"aa/aa.jpg");
//		}
//};
if(is_uploaded_file($_FILES["file"]["tmp_name"])){
	$name=$_FILES["file"]["name"];
	$url="aa/".$name;
	move_uploaded_file($_FILES["file"]["tmp_name"],$url);
}
echo "ok";
?>
