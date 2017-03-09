<?php

/*tester si le parametre age existe sinon le signaler*/
if (isset($_GET["age"]){
	echo $_GET["age"];
}
else{
	echo "non trouvé";
}

?>