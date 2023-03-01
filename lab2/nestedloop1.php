<html>
    <?php

    for($i=0;$i<=2;$i++)
    {        
        for($j=0;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>";

    for($i=2;$i>=0;$i--)
    {
        $x=1;        
        for($j=0;$j<=$i;$j++){
            echo ($x. " ");
            $x=$x+1;
        }
        echo "<br>";
    }

echo "<br>";


    ?>
</html>
