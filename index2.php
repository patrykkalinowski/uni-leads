<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">

</head>
<body>
<?php 
if (isset($_GET['utm_source'])) {
    echo "Parametr utm_source: " . htmlspecialchars($_GET['utm_source']) . "<br/>";
}else{
     echo "Brak utm_source <br/>";// Fallback behaviour goes here
}

if (isset($_GET['utm_medium'])) {
    echo "Parametr utm_medium: " . htmlspecialchars($_GET['utm_medium']) . "<br/>";
}else{
     echo "Brak utm_medium <br/>";// Fallback behaviour goes here
}
if (isset($_GET['utm_campaign'])) {
    echo "Parametr utm_campaign: " . htmlspecialchars($_GET['utm_campaign'] ) . "<br/>";
}else{
    echo "Brak utm_campaign <br/>";// Fallback behaviour goes here
}
?>

<?php
if (isset($_GET['utm_source'])) {
    $utm_source = $_GET['utm_source'];
}else{
    $utm_source = "";
}

if (isset($_GET['utm_medium'])) {
    $utm_medium = $_GET['utm_medium'];
}else{
    $utm_medium = "";
}
if (isset($_GET['utm_campaign'])) {
    $utm_campaign = $_GET['utm_campaign'];
}else{
    $utm_campaign = "";
}
if (isset($_GET['gclid'])) {
    $gclid = $_GET['gclid'];
}else{
    $gclid = "";
}
?>
<?
echo "source: " . $utm_source . "<br/>";
echo "medium: " . $utm_medium . "<br/>";
echo "campaign: " . $utm_campaign . "<br/>";
echo "gclid: " . $gclid . "<br/>";
?>

<form id="form" enctype="multipart/form-data" action="test.php" method="post">

				<label for="name">Imię</label>
					<input type="text" class="form-control" id="name" name="name">
				
				<br/>
				<label for="languages">Języki</label>
					<input type="text" class="form-control" id="languages" name="languages">
				
				<br/>
				<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email">
				<br/>
				
				<input type="hidden" class="form-control" value="A1" id="landingpage_version" name="landingpage_version">
				<input type="hidden" class="form-control" value="<? echo $utm_source; ?>" id="utm_source" name="utm_source">
				<input type="hidden" class="form-control" value="<? echo $utm_medium; ?>" id="utm_medium" name="utm_medium">
				<input type="hidden" class="form-control" value="<? echo $utm_campaign; ?>" id="utm_campaign" name="utm_campaign">
				<input type="hidden" class="form-control" value="<? echo $gclid; ?>" id="gclid" name="gclid">				
				<input id="submit" type="submit" name="submit" value="Submit">	
				</form>


</body>
</html>
