<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    $q = intval($_GET['q']);

    $con = mysqli_connect("localhost", "jphorq", '!j0$ephOtep02/>', "phpwebappproject1");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    require_once('config/db.php');
    $sql = "SELECT * FROM employees WHERE id = '" . $q . "'";
    $result = mysqli_query($con, $sql);

    echo "<table>
<tr>
<th>User ID</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Surname</th>
<th>Address</th>
<th>Birthdate</th>
<th>Age</th>
<th>Email</th>
<th>Department</th>
<th>Salary</th>
<th>Image</th>
<th>Edit</th>
<th>Delete</th>
</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td>
                <?php echo $row['Id'] ?>
            </td>
            <td>
                <?php echo $row['FirstName'] ?>
            </td>
            <td>
                <?php echo $row['MiddleName'] ?>
            </td>
            <td>
                <?php echo $row['LastName'] ?>
            </td>
            <td>
                <?php echo $row['Address'] ?>
            </td>
            <td>
                <?php echo date('m-d-Y', strtotime($row['BirthDate'])) ?>
            </td>
            <td>
                <?php echo $row['Age'] ?>
            </td>
            <td>
                <?php echo $row['Email'] ?>
            </td>
            <td>
                <?php echo $row['Department'] ?>
            </td>
            <td>
                <?php echo $row['Salary'] ?>
            </td>
            <td>
                <?php echo $row['PhotoPath'] ?>
            </td>
            <td><a href="#" class="btn btn-primary">Edit</a></td>
            <td><a href="#" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php
    }
    echo "</table>";
    mysqli_close($con);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>