<?php
error_reporting(0);
require_once'db.php';  
$name=$_POST['name'];
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phno=$_POST['phno'];

//validation using function
function validation($vname,$vfname,$vgender,$vemail,$vphno){
if (empty ($vname)) {  
    $errMsg = "Enter your name";  
             echo $errMsg;  
}
else if (!preg_match("/^[a-zA-Z\s]+$/",$vname)) {  
    $ErrMsg = "Only alphabets and whitespace are allowed.";  
             echo $ErrMsg;  
} 
else if (empty ($vfname)) {  
    $errMsg = "Enter father name";  
             echo $errMsg;  
}
else if (!preg_match("/^[a-zA-Z\s]+$/",$vfname) ) {  
    $ErrMsg = "Only alphabets and whitespace are allowed.";       
             echo $ErrMsg;  
} 
else if (empty ($vgender)) {  
    $errMsg = "please select gender";  
             echo $errMsg;  
}
else if(empty($vemail)){
    $errMsg = "Enter your E-mail";  
             echo $errMsg;  
}
else  if(!preg_match ("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $vemail) ){  
    $ErrMsg = "Email is not valid.";  
            echo $ErrMsg;  
} 
else if(empty($vphno)){
    $ErrMsg="Enter your phone number";
    echo"$ErrMsg";
}
else if (!preg_match ("/^[0-9]*$/", $vphno) ){  
    $ErrMsg = "Only numeric value is allowed.";  
    echo $ErrMsg;  
}
else if(preg_match('6666666666',$vphno)||preg_match('7777777777',$vphno)||preg_match('8888888888',$vphno)||preg_match('9999999999',$vphno))
{
    $errmsg="Don't enter repeated number";
    echo $errmsg;
}
else{
 $query="call p_sample1('$vname','$vfname','$vgender','$vemail','$vphno')";
 $result=pg_query($query);
 echo"DATA STORED SUCCESSFULLY";
}

}
validation($name,$fname,$gender,$email,$phno);
// if($result){
//     echo"connected";
// }
// else{
//     echo"not";
// }
// $name=$fname=$gender=$email=$phno="";
// if ($_SERVER["REQUEST_METHOD"] == "POST")
// {
//     $name = test_input($_POST['name']);
//     $fname= test_input($_POST['fname']);
//     $gender= test_input($_POST['gender']);
//     $email= test_input($_POST['email']);
//     $phno= test_input($_POST['phno']);
// }
// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//     $query="call p_sample1('$name','$fname','$gender','$email','$phno')";
//     $result=pg_query($query);
//   }
 ?>