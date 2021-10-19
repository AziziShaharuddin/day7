<html>
    <head></head>
    <body>
        <?php
            $oddNum = 0;
            for ($i=30; $i <= 50; $i++) {
                echo $i. " ";
                $odd = $i % 2;
                if ($odd != 0) {
                    $oddNum = $oddNum + $i;
                }
            } echo "<br>";
            echo "Sum of odd numbers are ="." ".$oddNum;
        ?>
        <form action="index.php" method="post">
            <button>Go to previous page</button>
        </form>
    </body>
</html>