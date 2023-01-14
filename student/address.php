<?php
    if($_POST['action'] == 'province'){
        require_once '../classes/address.class.php';
        $address_obj = new Address();
        $address_obj->region_code = $_POST['filter'];
        $address = $address_obj->get_province();
    ?>
        <option value="none">--Select--</option>
    <?php
        foreach($address as $row){
    ?>
            <option value="<?=$row['provCode']?>"><?=$row['provDesc']?></option>
    <?php
        }
    }
    if($_POST['action'] == 'city'){
        require_once '../classes/address.class.php';
        $address_obj = new Address();
        $address_obj->province_code = $_POST['filter'];
        $address = $address_obj->get_City();
    ?>
        <option value="none">--Select--</option>
    <?php
        foreach($address as $row){
    ?>
            <option value="<?=$row['citymunCode']?>"><?=$row['citymunDesc']?></option>
    <?php
        }
    }
    if($_POST['action'] == 'barangay'){
        require_once '../classes/address.class.php';
        $address_obj = new Address();
        $address_obj->city_code = $_POST['filter'];
        $address = $address_obj->get_barangay();
    ?>
        <option value="none">--Select--</option>
    <?php
        foreach($address as $row){
    ?>
            <option value="<?=$row['brgyCode']?>"><?=$row['brgyDesc']?></option>
    <?php
        }
    }
?>