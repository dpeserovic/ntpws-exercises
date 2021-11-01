<?php
    function add($x, $y) {
        $result = $x + $y;
        $text = $x . ' + ' . $y . ' = ' . $result;
        return $text;
    }
    echo add(1, 16);
    echo '<br />';
    echo add(4, 16);
?>