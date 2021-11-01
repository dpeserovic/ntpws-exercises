<?php $operations = array('+', '-', '*', '/'); ?>
<form method="post">
    <label for="firstNumber">First number</label>
    <input type="number" name="firstNumber" />
    <br />
    <label for="secondNumber">Second number</label>
    <input type="number" name="secondNumber" />
    <br />
    <label for="operations">Operations</label>
    <?php for ($i = 0; $i < count($operations); $i++) {
        echo '<button name="operations" value="' . $operations[$i] . '">' . $operations[$i] . '</button>';
    } ?>
</form>
<?php
$firstNumber = isset($_POST['firstNumber']) ? $_POST['firstNumber'] : null;
$secondNumber = isset($_POST['secondNumber']) ? $_POST['secondNumber'] : null;
$operation = isset($_POST['operations']) ? $_POST['operations'] : null;
$result = 0;
$isReadyToCalculate = isset($operation) && !empty($secondNumber) && !empty($firstNumber);
if ($isReadyToCalculate) {
    switch ($operation) {
        case '+':
            $result = $firstNumber + $secondNumber;
            break;
        case '-':
            $result = $firstNumber - $secondNumber;
            break;
        case '*':
            $result = $firstNumber * $secondNumber;
            break;
        case '/':
            $result = $firstNumber / $secondNumber;
            break;
        default:
            $result = 0;
    }
    echo 'Result is: ' . $result;
}
?>