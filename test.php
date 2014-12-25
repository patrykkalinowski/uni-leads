<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
</head>
<body>
</body>
</html>
<?php
// enable error reports on screen
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off


echo PHP_VERSION . "<br>";
// connect to database
include "config.php";

// get data from POST
$created_at = date("Y-m-d H:i");
$name = $_POST["name"];
$email = $_POST["email"];
$languages = $_POST["languages"];
$landingpage_version = $_POST["landingpage_version"];

$utm_source = $_POST["utm_source"];
$utm_medium = $_POST["utm_medium"];
$utm_campaign = $_POST["utm_campaign"];
$gclid = $_POST["gclid"];

// echo captured data
echo $created_at . "<br/>";
echo $name . "<br/>";
echo $email . "<br/>";
echo $languages . "<br/>";
echo $landingpage_version . "<br/>";
echo $utm_source . "<br/>";
echo $utm_medium . "<br/>";
echo $utm_campaign . "<br/>";
echo $gclid . "<br/>";

// send data to database
$sql = "INSERT INTO leads (created_at, name, email, languages, landingpage_version, utm_source, utm_medium, utm_campaign, gclid)
VALUES ('".$created_at."', '".$name."', '".$email."', '".$languages."', '".$landingpage_version."', '".$utm_source."', '".$utm_medium."', '".$utm_campaign."', '".$gclid."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
