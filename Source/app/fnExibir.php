<?php
function showArrayKey(array &$Data, string $key){
if (array_key_exists($key, $Data))
    echo $Data[$key];
else
    echo '';    
}
?> 