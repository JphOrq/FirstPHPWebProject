<?php //PHP Namespaces
namespace Html;

class Table
{
    public $title = "";
    public $numRows = 0;
    public function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>

<body>
    <h1>This is Footer note.</h1>

    <?php
    $table->message();
    ?>
</body>

</html>