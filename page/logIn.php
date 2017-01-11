<?php
  session_start();
  $_SESSION = array();
echo $_POST['username']."<br>";
echo $_POST['password']."<br>";

  $users = array(
    array( 'username' => 'Nikita',
      'password' => '111',
      'email' => 'nikitaJ@blooba.qsd'),

    array( 'username' => 'Lara',
      'password' => '222',
      'email' => 'LaraJ@blooba.qsd'),

    array( 'username' => 'Django',
      'password' => '333',
      'email' => 'DjangoJ@blooba.qsd')
    );

$username = isset($_POST['username'])? $_POST['username'] : "";
$password = isset($_POST['password'])? $_POST['password'] : "";

for ($i=0; $i < count($users) ; $i++) {
  echo  var_dump($users[$i]) . "<br>";
	echo $users[$i]['password']. "<br>";
  echo $users[$i]['username']. "<br>";
	if ($username==$users[$i]['username'] && $password==$users[$i]['password']) {
	   $_SESSION['username']=$users[$i]['username'];
	}
}

//header("location:_index.php");


?>
