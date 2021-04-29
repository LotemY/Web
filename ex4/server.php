<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
</head>

<body>
    <h1>
        Result:
        <?php
        $op = $_GET["option"];
        $first = $_GET["first"];
        $second = $_GET["second"];

        switch ($op) {
            case 'add':
                echo $first + $second;
                break;

            case 'sub':
                echo $first - $second;
                break;

            case 'mul':
                echo $first * $second;
                break;

            case 'div':
                if ($second == 0)
                    echo "Can't divide by 0";
                else
                    echo $first / $second;
                break;
        }
        ?>
    </h1>
</body>

</html>