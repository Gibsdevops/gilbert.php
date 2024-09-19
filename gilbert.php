<?php
function call_name(){
    $name = "ALIHO GILBERT";
    return $name;
}
function my_age($current_year, $birth_year){
    $age = $current_year - $birth_year;
    return $age;
}

function my_home_address(){
    $address = "KABALE-KYANAMIRA";
    return $address;
}

print(call_name());
print("<br> My home address is ".my_home_address()."");

?>