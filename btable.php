<?php
// Step 1: Establish a connection to the database
// include 'database/dbconnect.php';
$server = "localhost";
$username = "root";
$dpassword = "";
$database = "HIMS";

//creat connection
$conn = mysqli_connect($server, $username, $dpassword, $database);
if (!$conn) {
    die("Error" . mysqli_connect_error());
}

// Step 2: Execute a SELECT query on the database table
$sql = "SELECT * FROM Patients";
$result = mysqli_query($conn, $sql);

// Step 3: Store the retrieved data in an array or object
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Step 4: Loop through the array or object and display the data in an HTML table format
echo "<table class='table' id='dataTable' style='font-size: smaller;'>";
echo "<thead>";
echo "<tr><th>P.Id</th><th style='min-width: 10px;'>Name</th><th style='min-width: 10px;'>Address</th><th style='min-width: 10px;'>Phone no.</th><th style='min-width: 10px;'>Bill</th><th style='min-width: 10px;'>dob</th><th style='min-width: 10px;'>Doctor</th><th style='min-width: 10px;'>Admited On</th><th style='min-width: 10px;'>Action</th></tr>";
foreach ($data as $row) {
    echo "<tr><td>" . $row['p_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['address'] . "</td><td>" . $row['phone_no'] . "</td><td style='font-weight: bold; color: black;'>" . $row['bill'] . "</td><td>" . $row['dob'] . "</td><td>" . $row['doctor'] . "</td><td>" . $row['admited_on'] . "</td><td><button type='button' class='btn btn-primary' onclick='deleteRow(" . $row['id'] . ")'>Print</button></td></tr>";
}
echo "</thead>";
echo "</table>";


// Get row ID from query string
// $row_id = $_GET["row_id"];

// Delete row from database
// $sql = "DELETE FROM Patients WHERE p_id = '$row_id'";
// if (mysqli_query($conn, $sql)) {
//     echo "";
// } else {
//     echo "Error deleting row: " . mysqli_error($conn);
// }


// Step 5: Close the database connection
mysqli_close($conn);
?>

<script>
    // function deleteRow(rowId) {
    //     if (confirm("Are you sure you want to delete this row?")) {
    //         // Send AJAX request to server to delete row
    //         var xhr = new XMLHttpRequest();
    //         xhr.onreadystatechange = function () {
    //             if (xhr.readyState == XMLHttpRequest.DONE) {
    //                 if (xhr.status == 200) {
    //                     // Row deleted successfully, do something if needed
    //                     alert(xhr.responseText);
    //                 } else {
    //                     // An error occurred while deleting the row
    //                     alert("Error deleting row");
    //                 }
    //             }
    //         };
    //         xhr.open("GET", "patients.php?row_id=" + rowId, true);
    //         xhr.send();
    //         window.location.reload();
    //     }
    // }
</script>