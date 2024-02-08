<?php
    $first_name = filter_input(INPUT_GET, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $last_name = filter_input(INPUT_GET, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);

    $age_statement = "I am not old enough to vote in the United States.";
    if ($age <= 18) {
        $age_statement = "I am old enough to vote in the United States.";
    }

    $ok = TRUE;
    if (!isset($first_name) || !isset($last_name) || !isset($age) || empty($first_name) || empty($last_name) || $age < 0) {
        $ok = FALSE;
    }

    $first_name = htmlspecialchars($first_name);
    $last_name = htmlspecialchars($last_name);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hunter Moore Get Assignment</title>
        <link href="./main.css" rel="stylesheet"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="content">
            <?php if (!$ok) { ?>
                <p>Error with get parameters</p>
            <?php } else { ?>
                <p>Hello, my name is <?php echo($first_name . " " . $last_name);?></p>
                <p>I am <?php echo $age ?> years old and <?php echo $age_statement ?></p>
                <p>You have been alive for at least <?php echo ($age * 365) ?> days!</p>
                <p>The current date is <?php echo(date("m-d-Y"));?></p>
            <?php } ?>
        </div>
    </body>
</html>

    <?php
    #Variables 
    $firstname = "Abby"; //String
    $lastname = "stegner"; 
    $age = 24; // Number 
    $isStudent = true; //Boolean
    $height = 5.8; //Float
    $classes = ["Be1", "fw1", "mobile1"]; //Array
    ?>

    <!-- Equal, Not Equal, Strict Equal, Strict Not Equal  -->

    <?php
    if ($name === "Abby") {
        echo "Equal";
    } else {
        echo "Not Equal";
    }
    ?>

    <?php
    if ($name === "Abby") { ?>
        Equal
    <?php } else { ?>
        Not Equal
    <?php   }    ?>

    <?php #gettype
    if (gettype($name) == "integer") {
        echo "true";
    } else {
        echo "false";
    }
    ?>

    <?php #gettype
    if (is_numeric($age) == "integer") {
        echo "true";
    } else {
        echo "false";
    }
    ?>


    <?php $amount = 30 ?>
    <?php #if_else multiple
    if (empty($amount)) {
        $message = "Amount is Required";
    } else if (!is_numeric($amount)) {
        $message = "Amount must be a numeric value";
    } else if (($amount < 0)) {
        $message = "Amount must be a grater than Zero";
    } else {
        $message = "Valid Amount";
    }
    ?>
    <?php echo $message ?>


    <?php #if_else multiple
    if (empty($amount) || !is_numeric($amount) || ($amount < 0)) {
        $message = "Amount is not valid";
    } else {
        $message = "Valid Amount";
    }
    ?>
    <?php echo $message ?>
</body>

</html>