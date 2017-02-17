<?php
require_once('func_index.php');
$chooseCommentsHidden="";
for ($i=0; $i<count($comments);$i++) {
if (isset($_POST['chooseComment'.$i])){
header('Location: /adm.php');	
}
}
function checkComments1($checkComment){
    global $chooseCommentsHidden;
	if ($checkComment == 1) {
	  $chooseCommentsHidden = 'checked';
	}else{
        $chooseCommentsHidden = '';
    }
	return $chooseCommentsHidden;
}

?>