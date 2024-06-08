<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>banzo</title>
</head>
<body>
    <div class="container">
        <h1>
            <?php
                echo "Hello World!";
                // This is a comment
                /*
                    This is a multi-line comment
                */
            ?>
        </h1>

        <h2>
            <?php
                $var1 = 10;
                $var2 = 20;
                $sum = $var1 + $var2;
                echo "The sum of $var1 and $var2 is $sum";
            ?>
        </h2>
    </div>
</body>
</html>