<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assessment</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form id="form" action="./result.php" method="post">
        <label for="zipcode">Zipcode:</label>
        <input required class="areaInput" placeholder="Enter your zipcode" type="text" name="zipcode">
        <button type="submit">Enter</button>
    </form>


    <br>

    <div id="phpecho">

        <?php
        //Scalar type
        $fullName = ' Sergio Rojas';
        $int = 15654;
        $float = 2.567;
        $bool = true;


        //Array Type
        $array = ["Dan", "steve", "Bob"];
        echo $fullName;


        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo $_SERVER["PHP_SELF"];
        echo "<br>";

        echo $_GET["name"];

        if(true && true){
            echo "hello World";
        };

        ?>
    </div>

</body>

</html>