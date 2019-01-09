<?php
if(isset($_GET['action']))
{
    //echo "yes";

    $lieuDeFormation = array(
        "1" => "Dakar",
        "2" => "Fatick",
        "1" => "Tamba",
    );
    echo json_encode($lieuDeFormation);

}
?>