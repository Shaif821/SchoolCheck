<!--
<section class="keuze">
<?php

//include 'model/select-vind.php';

if(!empty($_POST['check_list'] && !empty($_POST['check_stad']) && !empty($_POST['check_level']) && !empty($_POST['check_religie']))){
    foreach($_POST['check_list'] as $check){
        $bla = "SELECT levels_name FROM levels_data";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo '<h2>' . $row['levels_name'] . '</h2>';
        }
    }
}
    $niveau = $_POST['check_list'];   
    echo $niveau;
}
//while($row = $result ->fetch_assoc()){
//    echo '<h2>' . $row['school_name'] . '</h2>';
//}
?>

</section>-->
