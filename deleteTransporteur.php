<?php

require_once('connect_misql.php');

$id = $_GET['id_transp'];
$DelSql = "DELETE FROM `transporteur` WHERE id_transp=$id";

$res = mysqli_query($con, $DelSql);
if ($res) {?>
    <script>
                alert("Cette transporteur est bien suprimer");
                location.href = "liste_transporteur.php";
            </script>
            <script src="Alert/src/sweetalert2.js"></script>
            <script src="Alert/src/SweetAlert.js"></script>
   <?php // header("location: listeMatiere.php");
} else {
    ?>
    <script>
                alert("Suppression incorecte");
                location.href = "liste_transporteur.php";
            </script>
            <script src="Alert/src/sweetalert2.js"></script>
            <script src="Alert/src/SweetAlert.js"></script>
   <?php 
    // echo "Faild to delete";
    // header("location: liste_cli.php");
    
}