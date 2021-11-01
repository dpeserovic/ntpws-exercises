<form method="post">
    <label for="inptNumber">Number</label>
    <input type="number" name="inptNumber" min=1 max=9 />
</form>

<?php
$num = isset($_POST['inptNumber']) ? $_POST['inptNumber'] : 0;
if ($num != 0) {
    $myNum = rand(1, 9);
    echo 'Your number is: ' . $num;
    echo '<br />';
    echo 'My number is: ' . $myNum;
    echo '<br />';
    if ($num == $myNum) {
        echo 'You guessed my number! Yaay';
    } else {
        echo 'You guessed wrong :(';
    }
}
?>