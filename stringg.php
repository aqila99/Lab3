<html>
    <body>
        <?php
        function add($x, $y)
        {
            $sum = $x +$y;
            return $sum;
        }
        $sum1 = 11;
        $sum2 = 15;
        $summ = add($sum1,$sum2);
        echo "$sum1 +$sum2 = ". $summ;
        ?>
        </body>
        </html>