<?php
if (isset($_POST["username"])
?>
<form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
    <input name="username" type="text" placeholder="Username">
    <input name="password" type="password" placeholder="Password">
    <input name="submit" value="post">