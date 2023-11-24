<?php
// $servername = "localhost";
// $username = "jphorq";
// $password = '!j0$ephOtep02/>';
// $dbname = "phpwebappproject-001"; // Replace with your actual database name

// try {
//     // Create a new PDO instance
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

//     // Set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     echo "Connected successfully";
// } catch (PDOException $e) {
//     die("Connection failed: " . $e->getMessage());
// }
?>

<?php
// $servername = "localhost";
// $username = "jphorq";
// $password = '!j0$ephOtep02/>';

// if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
//     echo 'We don\'t have mysqli!!!';
// } else {
//     echo 'Phew we have it!';
// }

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// echo "Connected successfully";
?>

<?php
// $servername = "localhost"; // Your MySQL server address
// $username = "jphorq"; // Your MySQL username
// $password = 'j0$ephOtep02'; // Your MySQL password
// $database = "phpwebappproject-001"; // Your Database name

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>

<?php
$con = mysqli_connect("localhost", "jphorq", 'j0$ephOtep02', "phpwebappproject-001");

if (!$con) {
    die("Connection Error!");
}
// } else {
//     echo 'Connection Completed!';
// }
?>
