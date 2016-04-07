<?php
session_start();

$_SESSION['users'][$_POST['user_id']] = $_POST;
var_dump($_SESSION['users']);

echo "    <a href = 'users_index.php'>
      <button>Return to Index</button>
     </a>";

//
die("This update function needs work - fix it!");

header("Location:users_index.php");
?>
