<?php
if (isset($_GET["dateDebut"],$_GET["dateFin"])){
	echo $_GET["dateDebut"].$_GET["dateFin"];
}
else{
	echo "non trouvé";
}
?>