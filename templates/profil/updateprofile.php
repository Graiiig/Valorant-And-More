<?php 

$servername = "localhost";
$username = "cys";
$password = "ArjenZ00lxXx";
$dbname = "vam";

$info = $_GET['info'];
$status = $_GET['status'];
$id = 137;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    $stmt = $con->prepare("UPDATE user SET agent = ? WHERE id = 137");
    $stmt->bind_param("ffe");

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

// if($_GET['mode'] == "on")
// {
//     $id = $_Get['id']; // this has the value MSN89
//     $sql = "UPDATE User
//         SET cards='$id'
//         WHERE User_Id=3";

//     //then execute the query


// }

// header('Content-Type: application/json; charset=utf-8');
// exit;