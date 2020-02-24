<?php

$mode = $_POST['mode'];
$region = $_POST['region'];
$state = $_POST['state'];
$city = $_POST['city'];

$str = file_get_contents('./region.json');
$json = json_decode($str);
$default = "<option value='-1'>请选择...</option>";

if ($mode == 0 && $region != -1 && $state != -1 && $city != -1) {
    echo $default;
    foreach ($json as $object) {
        echo '<option value=\'' . $object->region->code . '\'>' . $object->region->name . '</option>';
    }
} else if ($mode == 1 && $region != -1 && $state != -1 && $city != -1) {
    foreach ($json as $object) {   
        if ($object->region->code === $region) {
            echo $default;
            foreach ($object->region->state as $stateItem) {
                echo '<option value=\'' . $stateItem->code . '\'>' . $stateItem->name . '</option>';
            }
            break;
        }
    }
} else if ($mode == 2 && $region != -1 && $state != -1 && $city != -1) {
    foreach ($json as $object) {
        if ($object->region->code === $region) {
            foreach ($object->region->state as $stateItem) {
                if ($stateItem->code === $state) {
                    echo $default;
                    foreach ($stateItem->city as $cityItem) {
                        echo '<option value=\'' . $cityItem->code . '\'>' . $cityItem->name . '</option>';
                    }
                    break;
                }
            }
            break;
        }
    }
}
