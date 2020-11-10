<?php
/**
 * 1. connect to database
 * 2. have a query
 * 3. run your query on this database connection
 * 4. if you use select, you need to show the result
 * 5. close the connection
 */

//1. create a db connection
$host = "qbhol6k6vexd5qjs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbuser="x7gfa04m8j6bbzb4";
$dbpwd="bkmq78c2l2u5k2l7";
$dbname="x79gx4shz3s1ep7o";

$conn = new mysqli($host, $dbuser, $dbpwd, $dbname);

//2. create a query
$sql = "select * from users";

//3. run the query on this connection
$result = mysqli_query($conn,$sql);

//4. show result
while ($row = $result->fetch_assoc()){
    echo "<p>".$row["Username"]."</p>";
}

//5. close the connection
$conn->close();