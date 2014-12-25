<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warsztaty językowe AIESEC University</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div id="header" class="header center-block" >
  <div id="intro" class="row intro">
    <div class="col-md-10 centered intro-text">
      <h2 id="logo" class="text-center" style="background:blue; color:white;">LOGO</h2>
      <br/>
      <h1 class="text-center"><strong>Najtańsze</strong> warsztaty językowe dla studentów w Krakowie</h1>
      
      <br/>
      <h3 class="text-center">Prowadzone przez native speakerów</h3>

      <br/>
      <h4 class="text-center">A tutaj flagi</h4>
      <h5 class="text-center">dalej flagi</h5>
      <h5 class="text-center">dalej flagi</h5>



    </div>
    <!-- bouncing arrow -->
     <div id="animated-example" class="animated bounce"></div>
  </div>
</div>

  <div id="content" class="row content">

    <!-- Static navbar -->
    <!-- Header is hidden in mobile view (collapsed) -->
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">LOGO</a>
            <p class="navbar-brand navbar-collapse collapse">AIESEC University: <strong>Najtańsze</strong> warsztaty językowe dla studentów w Krakowie</p>
          
          </div>
          
        </div><!--/.container-fluid -->
      </nav>

    <div class="row">
      <div class="col-md-8 centered thankyou">
    <h1 id="thankyou-msg" class="thankyou-msg hidden text-center">Dzięki za wypełnienie formularza, <span></span>!<br/>Jesteś super!</h1>
    <p class="thankyou-msg hidden text-center">Teraz sprawdź swoją skrzynkę pocztową.</p>
      </div>
    </div>

   

    <div id="left-content" class="col-md-4 col-md-offset-2">
        <h3>Tylko 199 zł za 8 tygodni warsztatów</h3>

        <ul>
          <li id="point1" class="point">zajęcia z native speakerami</li>
          <li id="point2" class="point">nacisk na konwersacje</li>
          <li id="point3" class="point">elastyczny grafik</li>
          <li id="point4" class="point">poznawanie kultury kraju</li>
          <li id="point5" class="point">wspólne wyjścia na miasto</li>
          <br/>
          <li id="point6" class="point">zajęcia grupowe i indywidualne<br/>dwa razy w tygodniu po 1,5 godziny</li>

     
    </div>

    <div id="right-content" class="col-md-4 col-md-offset-1">
      <h3>Startujemy 2 marca!<br/>
        Liczba miejsc ograniczona.<br/>
        Zarezerwuj sobie miejsce, a otrzymasz 20zł zniżki</h3>

        <form id="form" class="form" enctype="multipart/form-data">

				<label for="name">Jak masz na imię?</label>
					<input type="text" class="form-control" id="name" name="name" required
								oninvalid="this.setCustomValidity('Podaj swoje imię')" 
								oninput="setCustomValidity('')">
				
				<br/>
				<label>Jakie języki Cię interesują?</label><br/>
					<!-- value of language is category item id in Podio -->
					<p id="languages-error" class="form-error hidden">Wybierz co najmniej jeden język</p>
					<input type="checkbox" class="form-control language-checkbox" id="english-checkbox" name="languages[english]" value="1">
						<label id="english-label" class="btn btn-default language-label" for="english-checkbox">ANGIELSKI</label>
						
					<input type="checkbox" class="form-control language-checkbox" id="german-checkbox" name="languages[german]" value="2">
						<label id="german-label" class="btn btn-default language-label" for="german-checkbox">NIEMIECKI</label>
						
					<input type="checkbox" class="form-control language-checkbox" id="french-checkbox" name="languages[french]" value="3">
						<label id="french-label" class="btn btn-default language-label" for="french-checkbox">FRANCUSKI</label>
						
					<input type="checkbox" class="form-control language-checkbox" id="italian-checkbox" name="languages[italian]" value="4">
						<label id="italian-label" class="btn btn-default language-label" for="italian-checkbox">WŁOSKI</label>
						
					<input type="checkbox" class="form-control language-checkbox" id="russian-checkbox" name="languages[russian]" value="5">
						<label id="russian-label" class="btn btn-default language-label" for="russian-checkbox">ROSYJSKI</label>
						
					<input type="checkbox" class="form-control language-checkbox" id="spanish-checkbox" name="languages[spanish]" value="6">
						<label id="spanish-label" class="btn btn-default language-label" for="spanish-checkbox">HISZPAŃSKI</label>
						
					<input type="checkbox" class="form-control language-checkbox" id="arabic-checkbox" name="languages[arabic]" value="7">
						<label id="arabic-label" class="btn btn-default language-label" for="arabic-checkbox">ARABSKI</label>
						
					<input type="checkbox" class="form-control language-checkbox" id="norwegian-checkbox" name="languages[norwegian]" value="8">
						<label id="norwegian-label" class="btn btn-default language-label" for="norwegian-checkbox">NORWESKI</label>
						
					

				
				<br/>
				<label for="email">Jeszcze tylko Twój email:</label>
					<input type="email" class="form-control" id="email" name="email" required
								oninvalid="this.setCustomValidity('Podaj prawidłowy adres email')" 
								oninput="setCustomValidity('')">
				<br/>

        <?php
// get utm parameters from URL
if (isset($_GET['utm_source'])) {
    $utm_source = $_GET['utm_source'];
}else{
    $utm_source = " ";
}

if (isset($_GET['utm_medium'])) {
    $utm_medium = $_GET['utm_medium'];
}else{
    $utm_medium = " ";
}
if (isset($_GET['utm_campaign'])) {
    $utm_campaign = $_GET['utm_campaign'];
}else{
    $utm_campaign = " ";
}
if (isset($_GET['gclid'])) {
    $gclid = $_GET['gclid'];
}else{
    $gclid = " ";
}

?>

				<input type="hidden" class="form-control" value="RegisterA1" id="landingpage_version" name="landingpage_version">
				<input type="hidden" class="form-control" value="<?php echo $utm_source; ?>" id="utm_source" name="utm_source">
				<input type="hidden" class="form-control" value="<?php echo $utm_medium; ?>" id="utm_medium" name="utm_medium">
				<input type="hidden" class="form-control" value="<?php echo $utm_campaign; ?>" id="utm_campaign" name="utm_campaign">
				<input type="hidden" class="form-control" value="<?php echo $gclid; ?>" id="gclid" name="gclid">				
				<input id="submit" class="btn btn-danger submit" type="submit" name="submit" value="JESTEM ZAINTERESOWANY">	
				</form>

      </div>

    </div>
 

<div id="onepixel"></div>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery UI for effects -->
    <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
    <!-- form handler for validation and ajax request -->
    <script src="js/form-handler.js"></script>

    <script>
    // define function on window scroll
    function onScroll() {
      $("#onepixel").css("display", "none");
      $("#intro").slideUp(function() {
        $("#header").addClass("hidden");
        $("#point1").slideDown( function() {
          $("#point2").slideDown( function() {
            $("#point3").slideDown( function() {
              $("#point4").slideDown( function() {
                $("#point5").slideDown( function() {
                  $("#point6").slideDown( function() {
                    $("#right-content").fadeIn("slow");
                  });
                });
              });
            });
          });
        });
      });
    }

    // hide elements only on big screens
    if ($(window).width() >= 768) {

    // execute onScroll on scroll or arrow click
    $("#animated-example").one("click", function() {
      onScroll();
    });
    $(window).one("scroll", function() {
      onScroll();
    });
    }


    

    
    </script>
  </body>
</html>
