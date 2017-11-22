<?php

if(isset($_POST['knop']) AND !empty($_POST['check_list'])){
    foreach($_POST['check_list'] as $check){

        
        $sql = "SELECT school_name  FROM levels_data WHERE levels_name = '$check'";
        $result = $conn->query($sql) or die($conn->error);
        while($row = $result ->fetch_assoc()){
            $schoolName = $row['school_name'];
            echo '<p>Van de levels <b>' . $schoolName . '</b></p>';
        }
        
        $sql2 = "SELECT district FROM schools WHERE district = '$check'";
        $result2 = $conn->query($sql2) or die($conn->error);
        while($row = $result2 ->fetch_assoc()){
            echo $row['schoolname'];
        }   
    }

    
}


//$sql = "SELECT schools.schoolname, level_data.levels_name FROM schools INNER JOIN level_data ON schools.schoolname = level_data.levels_name";
//
//$result = $conn->query($sql);
?>
