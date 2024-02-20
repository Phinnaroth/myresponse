<?php
function getGender($gender) {
    switch ($gender) {
        case 'M':
            $result = "Male";
            break;
        case "F":
            $result = "Female";
            break;
        default:
        $result = "None";
        break;
        }
    }
    return $result;
    $a = getGender('M');
    echo "result"
}
?>