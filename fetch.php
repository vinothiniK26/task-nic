<?php
require_once'db.php';
$sql="select * from sample1";
$result=pg_query($sql);
if(pg_num_rows($result)>0){
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet"/>

</head>
<body>
    <table class="container table table-hover  ">
        <tr class="fs-6">
        <th>Name</th>
        <th>Father Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone Number</th></tr>
   
    <?php
    while($row=pg_fetch_assoc($result)){
     $name=$row['name'];
     $fname=$row['fathername'];
     $gender=$row['gender'];
     $email=$row['email'];
     $phone=$row['phonenumber'];
    //  echo $name;
  
?>
<tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $fname; ?></td>
    <td><?php echo $gender; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $phone; ?></td>
    
    <?php
    }
}
?>
</table>  

