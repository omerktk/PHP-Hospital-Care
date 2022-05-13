function reload()
{
img = document.getElementById("capt");
img.src="captcha.php";
}

$(document).ready(function(){

var htm='<div class="form-group">Write this code below <label for="email"><img src="captcha.php" id="capt"><p></p></label><input type="text" class="form-control" name="g-recaptcha-response"> </div><p></p> ';

$('#custom_captcha').html(htm);//set the captcha data in element having id > custom_captcha . you can change as your div/Element id



});