<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>





    <?php

    $query = "SELECT * FROM `oc_address`;";
    echo $query


    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $zipcode = (int)htmlspecialchars($_POST["zipcode"]);

    //     echo var_dump(is_int($zipcode));
    //     if (is_integer($zipcode)) {
    //         echo $zipcode;
    //         // echo '<script>alert("correct")</script>';
    //     } else {
    //         echo "it's not a intger";
    //         // header("location: ./index.php");
    //     }
    // }


    // function userfunction()
    // {
    //     return "
    //         <section id='container'>
    //             <label for='zipcode'>Zipcode:</label>
    //             <input required class='areaInput' placeholder='Enter your zipcode' type='text' name='zipcode'>
    //             <button type='submit'>Enter</button>
    //         </section>
    //         ";
    // }

    // $test = userfunction();

    // echo $test;



    ?>

</body>

</html>