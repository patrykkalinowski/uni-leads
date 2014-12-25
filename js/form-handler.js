
langs = 0; // to check if there is at least one language chosen

$("#english-label").on("click", function() {
	if ($("#english-checkbox").is(":checked")) {
		$(this).removeClass("btn-success :active").addClass("btn-default");
		langs--;
			
	}
	else {
		$(this).removeClass("btn-default").addClass("btn-success :active");
		langs++;
		
	}
});	

$("#german-label").on("click", function() {
	if ($("#german-checkbox").is(":checked")) {
		$(this).removeClass("btn-success :active").addClass("btn-default");
		langs--;
		
	}
	else {
		$(this).removeClass("btn-default").addClass("btn-success :active");
		langs++;
		
	}
});

$("#french-label").on("click", function() {
	if ($("#french-checkbox").is(":checked")) {
		$(this).removeClass("btn-success :active").addClass("btn-default");
		langs--;
		
	}
	else {
		$(this).removeClass("btn-default").addClass("btn-success :active");
		langs++;
		
	}
});

$("#italian-label").on("click", function() {
	if ($("#italian-checkbox").is(":checked")) {
		$(this).removeClass("btn-success :active").addClass("btn-default");
		langs--;
		
	}
	else {
		$(this).removeClass("btn-default").addClass("btn-success :active");
		langs++;
		
	}
});

$("#russian-label").on("click", function() {
	if ($("#russian-checkbox").is(":checked")) {
		$(this).removeClass("btn-success :active").addClass("btn-default");
		langs--;
		
	}
	else {
		$(this).removeClass("btn-default").addClass("btn-success :active");
		langs++;
		
	}
});

$("#spanish-label").on("click", function() {
	if ($("#spanish-checkbox").is(":checked")) {
		$(this).removeClass("btn-success :active").addClass("btn-default");
		langs--;
		
	}
	else {
		$(this).removeClass("btn-default").addClass("btn-success :active");
		langs++;
		
	}
});

$("#arabic-label").on("click", function() {
	if ($("#arabic-checkbox").is(":checked")) {
		$(this).removeClass("btn-success :active").addClass("btn-default");
		langs--;
		
	}
	else {
		$(this).removeClass("btn-default").addClass("btn-success :active");
		langs++;
		
	}
});

$("#norwegian-label").on("click", function() {
	if ($("#norwegian-checkbox").is(":checked")) {
		$(this).removeClass("btn-success :active").addClass("btn-default");
		langs--;
		
	}
	else {
		$(this).removeClass("btn-default").addClass("btn-success :active");
		langs++;
		
	}
});

// Ajax form

 $('#form').submit(function(submit) {
 submit.preventDefault();

// check if any language is chosen
if (langs <= 0) {
	$("#languages-error").removeClass("hidden");
	$("#languages-error").css("display", "none");
  	$("#languages-error").slideDown();
	}
else { // if there is at least one language, start ajax

// insert form data into variable
var dataString = $("#form").serialize(); 

 $.ajax({
  type: "POST",
  url: "register.php",
  data: dataString, // form data as data to send
  beforeSend: function(){ // while sending
     $("body").css("cursor", "progress"); // loading cursor
   },
})
 
 .fail(function(msg) {
    alert("Wystąpił błąd! Spróbuj jeszcze raz.");
  })
 .complete(function() {
 	$("body").css("cursor", "auto"); // back to normal cursor
 })
  .done(function( msg ) { // data sent with success
	// show output
	//alert(msg); 

	// Analytics conversion event
	// GA SEND EVENT

	// hide elements and show thank you message
	$("body").css("cursor", "auto"); // back to normal cursor
	$("#header").fadeOut(); // hide header (it's not hidden when on mobile)
	$("#left-content").fadeOut();
	$("#right-content").fadeOut(function() {
		$(".thankyou-msg").removeClass("hidden");
	});
	// get name input to display on thank you
	var displayName = $("#name").val();
	// print name between <span> in #thankyou-msg
	$("#thankyou-msg span").html(displayName);
	
  });
}  });
