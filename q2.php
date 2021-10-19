<html>
    <head></head>
    <body>
        <?php
            $sum = 0;
            for ($i=0; $i <= 30; $i++) {
                echo $i. " ";
                $sum = $sum + $i;
            } echo "<br>";
            echo "Total sum ="." ".$sum;
        ?>
        <form action="index.php" method="post">
            <button>Go to previous page</button>
        </form>
    </body>
</html>