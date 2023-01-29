<?php
    include "connect.php";
    if(!isset($_SESSION)) {
        session_start();
    }
    $uname = mysqli_real_escape_string($conn, $_POST["cust_uname"]);
    $pwd = mysqli_real_escape_string($conn, $_POST["cust_psw"]);
    $sql0 = "SELECT MAX(cust_id) FROM customer";
$result = $conn->query($sql0);
$row = $result->fetch_assoc();
$id = $row["MAX(cust_id)"] + 1;

/*  Prevent mismatch between cust_id and benef/passbook table number.
    This is because when a row is deleted from customer AUTO_INCREMENT does
    not reset but keeps increasing.
    Hence reset AUTO_INCREMENT to $id and eleminate the error. */
$sql5 = "ALTER TABLE customer AUTO_INCREMENT=".$id;
$conn->query($sql5);
$sql3 = "INSERT INTO customer VALUES(
            NULL,
            '$uname',
            '$pwd'
        )";
$result=$conn->query($sql3); 

session_destroy();
        die(header("location:signin.php"));
        ?>