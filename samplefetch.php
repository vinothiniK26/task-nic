<?php
require_once'db.php';
$sql="select * from sample1";
$result=pg_query($sql);
$data=array();
while($row=pg_fetch_assoc($result)){
    $data[]=$row;
}
echo json_encode($data);
exit();
?>
