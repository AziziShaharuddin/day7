<html>
    <head></head>
    <body>
        <?php
            $str = "Hello there my name is Kevin";
            echo $str;
            echo "<br>";
            $newStr = str_replace(" ","%",$str);
            echo $newStr;
            echo "<br>";
            echo substr_count($newStr,"%")." "."(The num of % replaced in the original string)";
        ?>
        <form action="index.php" method="post">
            <button>Go to previous page</button>
        </form>
    </body>
</html>