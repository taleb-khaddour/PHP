<?php
$num = 16;

if (($num & ($num - 1)) == 0) {
    echo "$num is a power of 2";
} else {
    echo "$num is not a power of 2";
}
?>
