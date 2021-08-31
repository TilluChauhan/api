<?php
header('content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type, Access_Control_Allow_Methods,Authorization,X-Requested-With');
 $data=json_decode(file_get_contents("php://input"),true);
 include "config/config.php";

 $name=$data['name'];
 $age=$data['age'];

 $sql="insert into human (id,name,age) values ('{}','{$name}','{$age}')";

if($result= mysqli_query($conn, $sql)){
    echo json_encode(array('message' =>'Human-Record Found','status'=>true,'name'=>$name,'age'=>$age));
}else{
    echo json_encode(array('message' =>'human-no-Record Found','status'=>false));
}

?>

