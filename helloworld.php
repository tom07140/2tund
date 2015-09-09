<?php
	$first_name = "Toomas";
	$last_name = "Lõõnik";

	echo $first_name." ".$last_name;
?>
<br>
<?php

	$age = 20;
	
	//testib loogikat, juhul kui vanus on väiksem kui 18 siis kirjuta "alaealine"
	//muul juhul "täisealine"
	
	if($age < 18) {
		//tõene
		
		echo "alaealine";
		
	} else {
		//väär
		
		echo "täisealine";
		
	}

?>