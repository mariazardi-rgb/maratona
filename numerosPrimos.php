<?php
function ehprimo(int $n):bool {
    if ($n <= 1)return false;
    
    for ($i = 2; $i <= sqrt ($n); $i++) {
        if($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$numero = 29;
echo ehprimo($numero) ? "é primo" : "nao é primo";