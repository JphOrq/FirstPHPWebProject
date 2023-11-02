<?php
$cookie_name = "user";
$cookie_value = "Jph Orq";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php //Fetch from Database in PHP
require_once('config/db.php');
$query = "SELECT * FROM employees";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="sketchy-bootstrap.css"> -->
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">
    <!-- <link rel="icon" href="imgPHP/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="icon" href="imgPHP/Tuljong.jpg" type="image/x-icon" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>First PHP Project</title>
</head>

<body>
    <div>
        <h1>My First PHP Project</h1>

        <div class="container text-center">
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-6 text-center white-text">Fetch from Database in PHP</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
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
                                </tr>
                                <?php
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
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <p>
            <?php
            echo "Testing PHP IntelliSense in Visual Studio Code<br>";

            for ($i = 0; $i <= 10; $i++) {
                echo "Testing echo: " . $i . "<br>";
            }
            ?>

            <br>

            <?php
            echo "Hello Joseph";
            ?>

            <br>
            <br>

            <?php
            $color = "black & white";
            $COLOR = "Programming & Web Development";
            $coLOR = "Kawasaki";

            echo "My favorite color is " . $color . "<br>";
            echo "My favorite job is " . $COLOR . "<br>";
            echo "My favorite motorcycle is $coLOR" . "<br>";
            ?>

            <br>

            <!-- Multidimensional Arrays -->
            <?php
            // $cars = array(
            //     array("Volvo", 22, 18),
            //     array("BMW", 15, 13),
            //     array("Saab", 5, 2),
            //     array("Land Rover", 17, 15)
            // );
            
            // for ($row = 0; $row < 4; $row++) {
            //     echo "<p><b>Row number $row</b></p>";
            //     echo "<ul>";
            //     for ($col = 0; $col < 3; $col++) {
            //         echo "<li>" . $cars[$row][$col] . "</li>";
            //     }
            //     echo "</ul>";
            // }
            ?>

            <br>

            <?php //Loop Through an Associative Array
            $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

            foreach ($age as $x => $x_value) {
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
            ?>

            <br>

            <?php
            //Data Types
            $num1 = 2; // global scope
            $num2 = 23; // global scope
            $name = "Joseph";
            $int = 110290082391;
            $float = 11.08;
            $bool = true;
            $cars = array("Subaru", "Mitsubishi", "Toyota", "Mazda", "Nissan", "Suzuki");
            // var_dump($cars);
            $thisCars = count($cars);

            for ($x = 0; $x < $thisCars; $x++) { //Loop Through an Indexed Array
                echo $cars[$x];
                echo "<br>";
            }
            echo "<br>";

            function myCalculator()
            {
                $num1 = 2; // local scope
                $num2 = 23; // local scope
            
                // static $num1 = 1; //Static keyword
                // echo $num1; //Static keyword
                // $num1++; //Static keyword
            
                // // Global keyword
                // global $num1, $num2;
                // $num1 = $num2 + $num1;
            
                $GLOBALS['num1'] = $GLOBALS['num1'] + $GLOBALS['num2']; // Global keyword
            
                echo "The value of num1 is $num1 <br>"; // local scope
                echo "The value of num2 is $num2 <br>"; // local scope
                echo "<br>";
            }
            myCalculator();

            echo $num1; // global scope
            ?>

            <br>
            <br>

            <?php
            class Car
            {
                public $color;
                public $model;
                public function __construct($color, $model)
                {
                    $this->color = $color;
                    $this->model = $model;
                }
                public function message()
                {
                    return "My car is a " . $this->color . " " . $this->model . "!";
                }
            }

            $myCar = new Car("black", "Nissan");
            echo $myCar->message();
            echo "<br>";
            $myCar = new Car("red", "Mitsubishi");
            echo $myCar->message();
            echo "<br>";
            $myCar = new Car("white", "Toyota");
            echo $myCar->message();
            ?>

            <br>
            <br>

            <?php
            $num1 = 1;

            if ($num1 <= 2) {
                echo strlen("Joseph Joseph Joseph");
                echo "<br>";
            } else {
                echo str_word_count("Krza Krza Krza");
            }
            echo "<br>";
            echo "<br>";
            echo strrev("This is PHP"); //Reverse a String
            echo "<br>";
            echo "<br>";
            echo strpos("Hello! Krza", "Krza"); //Search For a Text Within a String
            echo "<br>";
            echo "<br>";
            echo str_replace("world", "Krza", "Hello world!");
            ?>

            <br>
            <br>

            <?php
            $myName = "Orquita";
            $myName = 110290;
            $myName = "Krza";
            $myName = 23.0211;
            echo $myName;
            echo "<br>";
            echo "<br>";
            echo (pi());
            ?>

            <br>
            <br>

            <?php
            define("GREETING", "Welcome to DOH-KMITS"); //Constant
            function myGreeting() //Constants are global
            {
                echo GREETING;
            }
            myGreeting();
            ?>

            <br>
            <br>

            <?php //Constant Array
            define("cars", [
                "Alfa Romeo",
                "BMW",
                "Toyota"
            ]);
            echo cars[2];
            ?>

            <br>
            <br>

            <?php
            // variable $user is the value of $_GET['user']
            // and 'anonymous' if it does not exist
            echo $user = $_GET["user"] ?? "anonymous";
            echo ("<br>");

            // variable $color is "red" if $color does not exist or is null
            echo $color = $color ?? "red";
            ?>

            <br>
            <br>

            <?php
            $currentTime = date("h"); // Get the current time in 12-hour format with AM/PM
            $nameGreet = "Jph Orq";

            if (strpos($currentTime, 'AM') !== false) {
                // It's in the morning
                echo "Good Morning, " . $nameGreet;
            } elseif ($currentTime == '12:00PM') {
                // It's noon
                echo "Good Noon, " . $nameGreet;
            } elseif (strpos($currentTime, 'PM') !== false) {
                // It's in the afternoon
                echo "Good Afternoon " . $nameGreet;
            } else {
                // It's in the evening
                echo "Good Evening, " . $nameGreet;
            }
            ?>

            <br>
            <br>

            <?php //switch Statement
            $favcolor = "black";

            switch ($favcolor) {
                case "red":
                    echo "Your favorite color is red!";
                    break;
                case "blue":
                    echo "Your favorite color is blue!";
                    break;
                case "green":
                    echo "Your favorite color is green!";
                    break;
                case "black":
                    echo "Your favorite color is black!";
                    break;
                default:
                    echo "Your favorite color is neither red, blue, green nor black!";
            }
            ?>

            <br>
            <br>

            <?php //while Loop
            $x = 0;

            while ($x <= 1000) {
                echo "The number is: $x <br>";
                $x += 100;
            }
            ?>

            <br>

            <?php //do while Loop
            $x = 1;

            do {
                echo "The number is: $x <br>";
                $x++;
            } while ($x <= 5);
            ?>

            <br>

            <?php //for Loop
            for ($x = 1; $x <= 10; $x++) {
                echo "The number is: $x <br>";
            }
            ?>

            <br>

            <?php //foreach Loop
            $colors = array("red", "green", "white", "black");

            foreach ($colors as $value) {
                echo "$value <br>";
            }

            echo "<br>";

            $age = array("Joseph" => "32", "Krza" => "23", "JphOrq" => "20");

            foreach ($age as $x => $val) {
                echo "$x = $val<br>";
            }
            ?>

            <br>

            <?php
            // Define a function
            function writeMsg()
            {
                // Output a hyperlink with a class for styling in an external CSS file
                echo '<a href="https://jphorq.github.io/Portfolio-Homepage/" class="custom-link" target="_blank">Visit My Portfolio</a>';
            }

            // Call the function
            writeMsg();
            ?>

            <br>
            <br>

            <?php
            function familyName($mName, $fName, $bYear)
            {
                echo "$mName $fName Orq - $bYear<br>";
            }

            familyName("Rom", "Cali", "1958");
            familyName("Eli", "Cali", "1961");
            familyName("Job", "Cali", "1989");
            familyName("Jos", "Cali", "1990");
            familyName("Mec", "Cali", "1992 ");
            familyName("Chr", "Cali", "1994");
            ?>

            <br>

            <!-- <form class="allForm" method="post" action="<?php //echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname" class="allForm">
        <input type="submit" class="allForm">
        </form> -->

            <?php
            // if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //     // collect value of input field
            //     // $name = htmlspecialchars($_REQUEST['fname']); //Superglobal - $_REQUEST
            //     $name = $_POST['fname']; //Superglobal - $_POST
            //     if (empty($name)) {
            //         echo "Name is empty";
            //     } else {
            //         echo $name;
            //     }
            // }
            ?>

            <?php //Regular Expressions (RegEx)
            // $str = "Visit My Portfolio";
            $useName = "rain pain gain";
            // $pattern = "/portfolio/i";
            // $pattern = "/ain/i";
            $pattern = "/rain pain gain/i";
            // echo preg_match($pattern, $str); //Using preg_match()
            // echo preg_match_all($pattern, $useName); //Using preg_match_all()
            echo preg_replace($pattern, "ice eyes", $useName); //Using preg_replace()
            ?>

            <br>

            <?php
            // define variables and set to empty values
            $nameErr = $emailErr = $genderErr = $websiteErr = "";
            $name = $email = $gender = $comment = $website = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                } else {
                    $name = test_input($_POST["name"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                        $nameErr = "Only letters and white space allowed";
                    }
                }

                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                } else {
                    $email = test_input($_POST["email"]);
                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                    }
                }

                if (empty($_POST["website"])) {
                    $website = "";
                } else {
                    $website = test_input($_POST["website"]);
                    // check if URL address syntax is valid
                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                        $websiteErr = "Invalid URL";
                    }
                }

                if (empty($_POST["comment"])) {
                    $comment = "";
                } else {
                    $comment = test_input($_POST["comment"]);
                }

                if (empty($_POST["gender"])) {
                    $genderErr = "Gender is required";
                } else {
                    $gender = test_input($_POST["gender"]);
                }
            }

            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>

        <h2>PHP Form Validation Example</h2>
        <form class="allForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Name: <input type="text" name="name">
            <span class="error">*
                <?php echo $nameErr; ?>
            </span>
            <br>
            E-mail: <input type="text" name="email">
            <span class="error">*
                <?php echo $emailErr; ?>
            </span>
            <br>
            Website: <input type="text" name="website">
            <span class="error">
                <?php echo $websiteErr; ?>
            </span>
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span class="error">*
                <?php echo $genderErr; ?>
            </span>
            <br>
            <input type="submit" name="submit" value="Submit" class="allForm">
        </form>

        <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
        ?>

        <br>

        <h1>Welcome to my home page!</h1>
        <p>Some text.</p>
        <p>Some more text.</p>
        <?php include 'footer.php'; ?>

        <br>

        <form class="allForm" action="index.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload" class="allForm">
            <input type="submit" value="Upload Image" name="submit" class="allForm">
        </form>

        <?php
        $target_dir = "FirstPHPProject/imgPHP";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.<br>";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        // if ($uploadOk == 0) {
        //     echo "Sorry, your file was not uploaded.";
        //     // if everything is ok, try to upload file
        // } else {
        //     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //         echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        //     } else {
        //         echo "Sorry, there was an error uploading your file.";
        //     }
        // }
        ?>

        <br>
        <br>

        <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>
        </p>

        <table>
            <tr>
                <td>Filter Name</td>
                <td>Filter ID</td>
            </tr>
            <?php
            foreach (filter_list() as $id => $filter) {
                echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
            }
            ?>
        </table>

        <div class="phpStyle">
            <?php
            function exclaim($str)
            {
                return $str . "! ";
            }

            function ask($str)
            {
                return $str . "? ";
            }

            function printFormatted($str, $format)
            {
                // Calling the $format callback function
                echo $format($str);
            }

            // Pass "exclaim" and "ask" as callback functions to printFormatted()
            printFormatted("Hello world", "exclaim");
            printFormatted("Hello world", "ask");
            ?>

            <br />
            <br />

            <?php
            function divide($dividend, $divisor)
            {
                if ($divisor == 0) {
                    throw new Exception("Division by zero", 1);
                }
                return $dividend / $divisor;
            }

            try {
                echo divide(5, 0);
            } catch (Exception $ex) {
                $code = $ex->getCode();
                $message = $ex->getMessage();
                $file = $ex->getFile();
                $line = $ex->getLine();
                echo "Exception thrown in $file on line $line: [Code $code]
            $message";
            }
            ?>

            <br />
            <br />

            <?php
            class Fruit
            {
                // Properties
                public $name;
                public $color;

                // Methods
                function set_name($name)
                {
                    $this->name = $name;
                }
                function get_name()
                {
                    return $this->name;
                }
                function set_color($color)
                {
                    $this->color = $color;
                }
                function get_color()
                {
                    return $this->color;
                }
            }

            $apple = new Fruit();
            $apple->set_name('Apple');
            $apple->set_color('Red');
            echo "Name: " . $apple->get_name();
            echo "<br>";
            echo "Color: " . $apple->get_color();
            ?>

            <br />
            <br />

            <?php
            class Carwash //OOP - Constructor
            {
                public $model;
                public $color;

                function __construct($model)
                {
                    $this->model = $model;
                }
                function get_name()
                {
                    return $this->model;
                }
            }

            $cars = new Carwash("Toyota");
            echo $cars->get_name();
            ?>

            <br />
            <br />

            <?php
            class Fruits //OOP - Destructor
            {
                public $name;
                public $color;

                function __construct($name, $color)
                {
                    $this->name = $name;
                    $this->color = $color;
                }
                function __destruct()
                {
                    echo "The fruit is {$this->name} and the color is {$this->color}.";
                }
            }

            $apple = new Fruits("Apple", "red");
            ?>

            <?php
            // class Color //OOP - Access Modifiers
            // {
            //     public $name;
            //     protected $color;
            //     private $weight;
            // }
            
            // $mango = new Color();
            // $mango->name = 'Mango'; // OK
            // $mango->color = 'Yellow'; // ERROR
            // $mango->weight = '300'; // ERROR
            ?>

            <br />
            <br />

            <?php
            class Prutas //OOP - Inheritance
            {
                public $name;
                public $color;
                public function __construct($name, $color)
                {
                    $this->name = $name;
                    $this->color = $color;
                }
                public function intro()
                {
                    echo "The fruit is {$this->name} and the color is {$this->color}.";
                }
            }

            // Strawberry is inherited from Fruit
            class Strawberry extends Prutas
            {
                public function message()
                {
                    echo "Am I a fruit or a berry? ";
                }
            }

            $strawberry = new Strawberry("Strawberry", "red");
            $strawberry->message();
            $strawberry->intro();
            ?>

            <br />
            <br />

            <?php
            class Fruitnaman //Inheritance and the Protected Access Modifier
            {
                public $name;
                public $color;
                public function __construct($name, $color)
                {
                    $this->name = $name;
                    $this->color = $color;
                }
                protected function intro()
                {
                    echo "The fruit is {$this->name} and the color is {$this->color}.";
                }
            }

            class Strawberrypadin extends Fruitnaman
            {
                public function message()
                {
                    echo "Am I a fruit or a berry? ";
                    // Call protected method from within derived class - OK
                    $this->intro();
                }
            }

            $strawberry = new Strawberrypadin("Blueberry", "blue"); // OK. __construct() is public
            $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
            ?>

            <br />
            <br />

            <?php
            class Fruitulit //Overriding Inherited Methods
            {
                public $name;
                public $color;
                public function __construct($name, $color)
                {
                    $this->name = $name;
                    $this->color = $color;
                }
                public function intro()
                {
                    echo "The fruit is {$this->name} and the color is {$this->color}.";
                }
            }

            class Strawberryulit extends Fruitulit
            {
                public $weight;
                public function __construct($name, $color, $weight)
                {
                    $this->name = $name;
                    $this->color = $color;
                    $this->weight = $weight;
                }
                public function intro()
                {
                    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
                }
            }

            $strawberry = new Strawberryulit("Banana", "yellow", 50);
            $strawberry->intro();
            ?>

            <br>
            <br>

            <?php
            // Parent class
            abstract class Cars //OOP - Abstract Classes
            {
                public $name;
                public function __construct($name)
                {
                    $this->name = $name;
                }
                abstract public function intro(): string;
            }

            // Child classes
            class Audi extends Cars
            {
                public function intro(): string
                {
                    return "Choose German quality! I'm an $this->name!";
                }
            }

            class Volvo extends Cars
            {
                public function intro(): string
                {
                    return "Proud to be Swedish! I'm a $this->name!";
                }
            }

            class Citroen extends Cars
            {
                public function intro(): string
                {
                    return "French extravagance! I'm a $this->name!";
                }
            }

            // Create objects from the child classes
            $audi = new audi("Audi");
            echo $audi->intro();
            echo "<br>";

            $volvo = new volvo("Volvo");
            echo $volvo->intro();
            echo "<br>";

            $citroen = new citroen("Citroen");
            echo $citroen->intro();
            ?>

            <br>
            <br>

            <?php
            abstract class ParentClass //More Abstract Class Examples
            {
                // Abstract method with an argument
                abstract protected function prefixName($name);
            }

            class ChildClass extends ParentClass
            {
                // The child class may define optional arguments that are not in the parent's abstract method
                public function prefixName($name, $separator = ".", $greet = "Dear")
                {
                    if ($name == "John Doe") {
                        $prefix = "Mr";
                    } elseif ($name == "Jane Doe") {
                        $prefix = "Mrs";
                    } else {
                        $prefix = "";
                    }
                    return "{$greet} {$prefix}{$separator} {$name}";
                }
            }

            $class = new ChildClass;
            echo $class->prefixName("John Doe");
            echo "<br>";
            echo $class->prefixName("Jane Doe");
            ?>

            <br>
            <br>

            <?php
            // Interface definition - OOP - Interfaces
            interface Animal
            {
                public function makeSound();
            }

            // Class definitions
            class Cat implements Animal
            {
                public function makeSound()
                {
                    echo " Meow ";
                }
            }

            class Dog implements Animal
            {
                public function makeSound()
                {
                    echo " Bark ";
                }
            }

            class Mouse implements Animal
            {
                public function makeSound()
                {
                    echo " Squeak ";
                }
            }

            // Create a list of animals
            $cat = new Cat();
            $dog = new Dog();
            $mouse = new Mouse();
            $animals = array($cat, $dog, $mouse);

            // Tell the animals to make a sound
            foreach ($animals as $animal) {
                $animal->makeSound();
            }
            ?>

            <br>
            <br>

            <?php //OOP - Traits
            trait message1
            {
                public function msg1()
                {
                    echo "OOP is fun! ";
                }
            }

            trait message2
            {
                public function msg2()
                {
                    echo "OOP reduces code duplication!";
                }
            }

            class Welcome
            {
                use message1;
            }

            class Welcome2
            {
                use message1, message2;
            }

            $obj = new Welcome();
            $obj->msg1();
            echo "<br>";

            $obj2 = new Welcome2();
            $obj2->msg1();
            $obj2->msg2();
            ?>

            <br>
            <br>

            <?php //OOP - Static Methods
            class greeting
            {
                public static function welcome()
                {
                    echo "Hello OOP - Static Methods.";
                }

                public function __construct()
                {
                    self::welcome();
                }
            }

            new greeting();
            ?>

            <br>
            <br>

            <?php //OOP - Static Properties
            class pi
            {
                public static $value = 3.14159;
            }

            class x extends pi
            {
                public function xStatic()
                {
                    return parent::$value;
                }
            }

            // Get value of static property directly via child class
            echo x::$value;
            echo "<br>";

            // or get value of static property via xStatic() method
            $x = new x();
            echo $x->xStatic();
            ?>

            <br>
            <br>

            <?php
            // Create an Iterator
            class MyIterator implements Iterator
            {
                private $items = [];
                private $pointer = 0;

                public function __construct($items)
                {
                    // array_values() makes sure that the keys are numbers
                    $this->items = array_values($items);
                }

                public function current()
                {
                    return $this->items[$this->pointer];
                }

                public function key()
                {
                    return $this->pointer;
                }

                public function next()
                {
                    $this->pointer++;
                }

                public function rewind()
                {
                    $this->pointer = 0;
                }

                public function valid()
                {
                    // count() indicates how many items are in the list
                    return $this->pointer < count($this->items);
                }
            }

            // A function that uses iterables
            function printIterable(iterable $myIterable)
            {
                foreach ($myIterable as $item) {
                    echo $item;
                }
            }

            // Use the iterator as an iterable
            $iterator = new MyIterator(["a", "b", "c"]);
            printIterable($iterator);
            ?>

            <br>
            <br>

            <?php
            $servername = "localhost"; // Your MySQL server address
            $username = "jphorq"; // Your MySQL username
            $password = '!j0$ephOtep02/>'; // Your MySQL password
            $database = "phpwebappproject1"; // Your Database name
            
            // Create a MySQL connection
            $conn = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            echo "Connected to the MySQL server: " . $servername . "<br>";

            // Check the current database
            $current_db = $conn->query("SELECT DATABASE()")->fetch_row()[0];
            echo "Current database: " . $current_db . "<br>";

            // Close the connection
            $conn->close();
            ?>

            <br>

            <!-- AJAX and PHP -->
            <p><b>Start typing a name in the input field below:</b></p>
            <form action="">
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
            </form>
            <p>Suggestions: <span id="txtHint"></span></p>
        </div>

        <br>

        <div class="allForm">
            <form>
                <select name="users" onchange="showUser(this.value)">
                    <option value="">Select a person:</option>
                    <option value="1">Jph Orq</option>
                    <option value="2">Krza Esc</option>
                    <option value="3">GfbY</option>
                </select>
            </form>
            <br>
            <div id="txtUser"><b>Person info will be listed here...</b></div>
        </div>

        <br>

        <div class="allForm">
            <form>
                Select a CD:
                <select name="cds" onchange="showCD(this.value)">
                    <option value="">Select a CD:</option>
                    <option value="Bob Dylan">Bob Dylan</option>
                    <option value="Bonnie Tyler">Bonnie Tyler</option>
                    <option value="Dolly Parton">Dolly Parton</option>
                    <option value="Gary Moore">Gary Moore</option>
                    <option value="Eros Ramazzotti">Eros Ramazzotti</option>
                    <option value="Bee Gees">Bee Gees</option>
                    <option value="Dr. Hook">Dr. Hook</option>
                    <option value="Savage Rose">Savage Rose</option>
                    <option value="Many">Many</option>
                    <option value="Kenny Rogers">Kenny Rogers</option>
                    <option value="Will Smith">Will Smith</option>
                    <option value="Van Morrison">Van Morrison</option>
                    <option value="Jorn Hoel">Jorn Hoel</option>
                    <option value="Cat Stevens">Cat Stevens</option>
                    <option value="Sam Brown">Sam Brown</option>
                    <option value="T'Pau">T'Pau</option>
                    <option value="Tina Turner">Tina Turner</option>
                    <option value="Kim Larsen">Kim Larsen</option>
                    <option value="Luciano Pavarotti">Luciano Pavarotti</option>
                    <option value="Otis Redding">Otis Redding</option>
                    <option value="Simply Red">Simply Red</option>
                    <option value="The Communards">The Communards</option>
                    <option value="Joe Cocker">Joe Cocker</option>
                </select>
            </form>
            <div id="txtCD"><b>CD info will be listed here...</b></div>
        </div>

        <?php
        echo '<div id="MyClockDisplay" class="clock"></div>';
        ?>

        <br>

        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>
</body>

</html>