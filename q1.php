<html>
    <head></head>
    <body>
        <?php
            for ($i = 0; $i < 5; $i++) {
                for ($j = 0; $j < 5; $j++) {
                    if ($i >= $j) {
                        echo "* ";
                    } else {
                        echo " ";
                    }
                } echo "<br>"; 
            }
            for ($i = 0; $i < 5; $i++) {
                for ($j = 0; $j < 5; $j++) {
                    if ($i <= $j) {
                        echo "* ";
                    } else {
                        echo " ";
                    }
                } echo "<br>"; 
            } 
        ?> 
        <form action="index.php" method="post">
            <button>Go to previous page</button>
        </form>
    </body>
</html>