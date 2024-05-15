<?php 
$city = array("Delhi","Agra","Mumbai");
sort($city);
?>

<select>
    <option>Select City </option>
    <!-- <option>Delhi </option>
    <option>Agra</option>
    <option>Pune </option> -->

    <?php
        foreach($city as $ct){
            echo "<option>$ct</option>";
        }
    ?>
</select>
<!-- sort them by putting them inside array instead of manually -->
