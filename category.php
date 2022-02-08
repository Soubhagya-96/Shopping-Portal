<?php

$cat = $_REQUEST['choice'];

if($cat == 'television') {
	header("location: television.php");
}elseif($cat == 'phone') {
	header("location: phone.php");
}else {
	echo '<script>alert("Invalid Choice!");
	window.location.href = "index.php"
	</script>';
	exit();
}
?>