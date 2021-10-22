<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="firstMark">First mark: </label><br>
        <input type="number" id="firstMark" name="firstMark" min=1 max=5><br>
        <label for="secondMark">Second mark</label><br>
        <input type="number" id="secondMark" name="secondMark" min=1 max=5><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
        $first_mark = !empty($_POST['firstMark']) ? $_POST['firstMark'] : '';
        $second_mark = !empty($_POST['secondMark']) ? $_POST['firstMark'] : '';
        $text = 'Enter marks';
        if (!empty($first_mark) && !empty($second_mark)) {
            if ($first_mark == 1 || $second_mark == 1) {
                $text = 'Final mark is: 1';
            } else {
                $text = 'Final mark is: ' . ($_POST['firstMark'] + $_POST['secondMark']) / 2;
            }
        }
        echo '<span>' . $text . '</span>';
    ?>
</body>

</html>