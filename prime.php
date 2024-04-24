<?php
for ($i = 1; $i <= 21; $i++) {
    if ($i % 2 == 0 || $i % 3 == 0) {
        echo '■ ' ;
    } else {
        echo $i . ' ';
    }
    if ($i % 7 == 0) {
        echo '<br>';
    }
}
