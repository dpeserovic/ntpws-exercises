<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ntpws-exercises</title>
</head>
<body>
    <ol>
        <?php
            $cars = array('Mercedes', 'BMW', 'Audi', 'Citroen', 'Renault', 'Volkswagen', 'KIA', 'Hyundai', 'MINI');
            for ($i = 0; $i < count($cars); $i++) {
                echo '<li>' . $cars[$i] . '</li>';
            }
        ?>
    </ol>
</body>
</html>