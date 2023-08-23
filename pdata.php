<?php

$server = "localhost";
$username = "root";
$dpassword = "";
$database = "HIMS";

//creat connection
$conn = mysqli_connect($server, $username, $dpassword, $database);
if (!$conn) {
    die("Error" . mysqli_connect_error());
}

if ($_POST) {

    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone_no = $_POST["phone_no"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $doctor = $_POST["doctor"];
    $symptoms = $_POST["symptoms"];
    $admited_on = $_POST["admited_on"];

    $sql = "SELECT * FROM Patients WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "<script>alert('Patient already Exist.')</script>";
    } else {

        $sql = "INSERT INTO `Patients` (`name`, `address`, `phone_no`, `gender`, `dob`, `doctor`, `symptoms`, `admited_on`) VALUES ('$name', '$address', '$phone_no', '$gender', '$dob', '$doctor', '$symptoms', current_timestamp());";
        $result = mysqli_query($conn, $sql);

        echo "<script>";
        echo "location.replace('patients.php')";
        echo "</script>";
    }

}
// Close database connection
$conn->close();
?>