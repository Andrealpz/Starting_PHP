<?php
if (isset($_GET["langage"],$_GET["serveur"])){
	echo $_GET["langage"].$_GET["serveur"];
}
else{
	echo "non trouvé";
}
?>