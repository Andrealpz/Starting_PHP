<?php
if (isset($_GET["batiment"],$_GET["salle"])){
	echo $_GET["batiment"].$_GET["salle"];
}
else{
	echo "non trouvé";
}
?>