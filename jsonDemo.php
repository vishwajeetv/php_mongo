<?php
/**
 * Created by PhpStorm.
 * User: vishwajeetv
 * Date: 8/27/14
 * Time: 11:22 AM
 */


$user = array(
    "name" => "Vishwajeet",
    "mobile" => "9922657745",
    "addresses" =>
        array(
            "Pune" => "Bijali nagar",
            "New York" => "Times Square"
        )
);

$userJson = json_encode($user);

$userJsonDecoded = json_decode($userJson);

?>
<html>
<head>
    <title>Learning MongoDB</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron">
        <h1 class="text-center">JSON Demo</h1>

    </div>
    <div class="well-lg">
        <h2>Associative Array</h2>

        <h3>
            <code>
                <?php print_r($user); ?>
            </code>
        </h3>

    </div>
    <div class="well-lg">
        <h2>Encoded JSON</h2>
        <h3>
            <code>
                <?php echo $userJson; ?>
            </code>
        </h3>


    </div><div class="well-lg">
        <h2>Decoded JSON</h2>
        <h3>
            <code>
                <?php print_r($userJsonDecoded); ?>
            </code>
        </h3>

    </div>
</body>
</html>