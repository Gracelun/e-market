<?php
require('../library/lib_member.php');

$member = new member();
$member->create('tttt', 'tttt', '12345');
// $isExist = $member->check('tttt', '12345');

// echo $isExist?'ok':'no';

// if($isExist){
// 	echo 'ok';
// }else{
// 	echo 'no';
// }
?>