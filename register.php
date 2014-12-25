<meta charset="utf-8">
</head>
<body>
</body>
</html>
<?php
// enable error reports on screen
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 'On');  //On or Off
//echo PHP_VERSION . "<br>";

require_once "config.php";

$date = date("Y-m-d H:i");
$name = $_POST["name"];
$languages = $_POST["languages"];
$email = $_POST["email"];
$landingpage_version = $_POST["landingpage_version"];

$utm_source = $_POST["utm_source"];
$utm_medium = $_POST["utm_medium"];
$utm_campaign = $_POST["utm_campaign"];
$gclid = $_POST["gclid"];


//$email = str_replace("@", "%40", $email);

// include Podio API
require_once 'podio-php-4.0.2/PodioAPI.php';

// configure app tokens - moved to config.php
// $app_id, $app_token, $client_id, $client_secret

// authenticate client to Podio
Podio::setup($uni_leads_client_id, $uni_leads_client_secret);

// authenticate client to app
try {
  Podio::authenticate_with_app($uni_leads_id, $uni_leads_token);
  // Authentication was a success, now you can start making API calls.
}
catch (PodioError $e) {
  // Something went wrong. Examine $e->body['error_description'] for a description of the error.
	echo $e . "<br><br><br>";
  }


// CREATING NEW PODIO ITEM

// Create a field collection with some fields.
// Be sure to use the external_ids of your specific fields
$fields = new PodioItemFieldCollection(array(
  new PodioTextItemField(array("external_id" => "title", "values" => $name)),
  new PodioTextItemField(array("external_id" => "email", "values" => $email)),
  // new category field without any value
  new PodioCategoryItemField(array("external_id" => "languages")),
  // url parameters
  new PodioTextItemField(array("external_id" => "landingpageversion", "values" => $landingpage_version)),
  new PodioTextItemField(array("external_id" => "utmsource", "values" => $utm_source)),
  new PodioTextItemField(array("external_id" => "utmmedium", "values" => $utm_medium)),
  new PodioTextItemField(array("external_id" => "utmcampaign", "values" => $utm_campaign)),
  new PodioTextItemField(array("external_id" => "gclid", "values" => $gclid)),
  
  
));

$item = new PodioItem(array(
  'app' => new PodioApp($uni_leads_id), // Attach to app with app_id
  'fields' => $fields
));

// if !empty doesnt work, if array is empty chrome console prints error
if (!empty($languages)) {
  // go through created array of selected languages
  foreach ($languages as $language) {
  // add checked language value as category id in Podio
   $item->fields["languages"]->add_value(intval($language)); // intval, because $language number is stored in array as string

  // here the code to sent event to analytics
  }
}
else {
}
// Save the new item
$item->save();


// welcome mail sender 
require "mailer.php";
?>