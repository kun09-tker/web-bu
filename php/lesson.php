<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "typing";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$sql="SELECT content FROM lesson";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()) {
        echo "Content là:{$row[content]}";
    }
}else{
    echo "No";
}
$conn->close();
?>