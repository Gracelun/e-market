<?php
if(isset($_GET['authorize'])){
	$authorize = $_GET['authorize'];
	// print($_SERVER["HTTP_HOST"].'/e-market/member/authorize.php?authorize='.$authorize);
	print('<br/>'.$authorize);
}else{
	echo '轉';
}

?>