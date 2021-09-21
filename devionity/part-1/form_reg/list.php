<?php 
$arr = file('users.txt');
echo 'List of Users: <br>==========<br>';
foreach($arr as $v){
  $v = unserialize($v);
  echo 'Name: ' . $v['name'] . '<br>';
  echo 'Email: ' . $v['email'] . '<br>';
  echo 'Phone: ' . $v['phone'] . '<br>';
  echo '---------------------<br><hr>';
};
?>