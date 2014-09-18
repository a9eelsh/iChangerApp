<p id="cookieText"></p>
<a href="#" onclick="cookieTest()" id="clickAuto"></a>
<script>
function cookieTest() {
	// Test if cookies are enabled
	var x = "<!--<a href='http://www.ichanger.tk/enable/handle.php?no=cookie' id='clickAuto2'></a>" + navigator.cookieEnabled;
		document.getElementById("cookieText").innerHTML = x;
	}
	// Simulate a click to activate the cookieTest() function automaticly
	var clickAuto = document.getElementById('clickAuto');
		clickAuto.click();
	// Simulate a click to activate the redirect function if cookies are not enabled automaticly
	var clickAuto2 = document.getElementById('clickAuto2');
		clickAuto2.click();
</script>

<!--<script>
	$('document).ready(function(){
       var myVar="Hello";
      $.post('design.php',myVar);
	
	});
</script>
<?php 
  // $myVar = $_POST['myVar'];
  // echo $myVar;
?>-->