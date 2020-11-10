<?php
$host = "qbhol6k6vexd5qjs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbuser="x7gfa04m8j6bbzb4";
$dbpwd="bkmq78c2l2u5k2l7";
$dbname="x79gx4shz3s1ep7o";

$conn = new mysqli($host, $dbuser, $dbpwd, $dbname);

$sql = "select * from product ";

$result = mysqli_query($conn,$sql);

while ($row = $result->fetch_assoc()) {
    echo $row["id"];
    echo $row["productname"];
}