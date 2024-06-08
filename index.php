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
                echo "<br>";
                ECHo "This is a test"; // Case-insensitive
            ?>
        </h2>
        <hr>
        <h2>
            <?php
                $var1 = 10;
                $var2 = 20;
                // use of var_dump() function
                echo "The value of $var1 == $var2 is: ";
                var_dump($var1==$var2);
            ?>
        </h2>
        <hr>
        <h2>
            <p>Logical Operators</p>
            <?php
                $var1 = 10;
                $var2 = 20;
                // use of var_dump() function
                echo "The value of $var1 AND $var2 is: ";
                var_dump($var1 and $var2);
                echo "<br>";
                echo "The value of $var1 && $var2 is: ";
                var_dump($var1 && $var2);
                echo "<br>";
                echo "The value of $var1 || $var2 is: ";
                var_dump($var1 || $var2);
                echo "<br>";
                echo "The value of $var1 XOR $var2 is: ";
                var_dump($var1 xor $var2);
                echo "<br>";
                echo "The value of !$var1 is: ";
                var_dump(!$var1);
            ?>
        </h2>
        <hr>
        <h2>
            <p>Constants</p>
            <?php
                define("PI", 3.14);
                echo "The value of PI is: ".PI." and its type is: ".gettype(PI);
            ?>
        </h2>

        <hr>
        <h2>
            <p>Arrays:</p>
            <?php
                $arr = array(1, 2, 3, 4, 5);
                echo "The value of arr[0] is: ".$arr[0];
                echo "<br>";
                echo "The value of arr[1] is: ".$arr[1];
                echo "<br>";
                echo "The value of arr[2] is: ".$arr[2];
                echo "<br>";
                echo "The value of arr[3] is: ".$arr[3];
                echo "<br>";
                echo "The value of arr[4] is: ".$arr[4];
                echo "<br>";
            ?>
        </h2>

        <hr>
        <h2>
            <p>Associative Arrays:</p>
            <?php
                $arr = array("name"=>"John", "age"=>25, "city"=>"New York");
                echo "The value of arr['name'] is: ".$arr['name'];
                echo "<br>";
                echo "The value of arr['age'] is: ".$arr['age'];
                echo "<br>";
                echo "The value of arr['city'] is: ".$arr['city'];
                echo "<br>";
            ?>
        </h2>
    </div>
</body>
</html>