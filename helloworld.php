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
<br>
<?php
	
	//vastavalt vanusele trükime nii mitu korda välja sõna "palju"
	
	for($i = 0; $i < $age; $i = $i + 1){
		
		//tegevus mis kordub
		echo "palju ";
	}
	
	echo "õnne!";
?>
<br>
<?php
	
	//trüki välja kuupäev kujul: nädalapäev, kuupäev kuu aasta
	echo date("l, j.F Y e");
	
	
?>