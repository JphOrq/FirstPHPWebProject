<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get CD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    $q = $_GET["q"];

    $xmlDoc = new DOMDocument();
    $xmlDoc->load("cd_catalog.xml");

    $x = $xmlDoc->getElementsByTagName('ARTIST');

    for ($i = 0; $i <= $x->length - 1; $i++) {
        //Process only element nodes
        if ($x->item($i)->nodeType == 1) {
            if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
                $y = ($x->item($i)->parentNode);
            }
        }
    }

    $cd = ($y->childNodes);

    for ($i = 0; $i < $cd->length; $i++) {
        //Process only element nodes
        if ($cd->item($i)->nodeType == 1) {
            echo ("<b>" . $cd->item($i)->nodeName . ":</b> ");
            echo ($cd->item($i)->childNodes->item(0)->nodeValue);
            echo ("<br>");
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>