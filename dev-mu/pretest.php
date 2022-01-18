<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRETEST</title>
</head>
<body>
    <center>

        <h2>
            <I>HITUNG MAJU</I>
            <br>
            <?php 
                $i = 0;
                do {
                    $x = $i+1;
                    $i++;
                    
                    if ($x % 2 == 0) {
                        echo $x."<br>";
                    }
                } while ($i <= 20);
            ?>
        </h2>
        <h2>
            <I>HITUNG MUNDUR</I>
            <br>
            <?php
                
                $a = 20;
                while ($a >= 1){
                    if ($a %2 ==0){
                        echo $a."<br>";
                    }

                    $a--;
                }
            ?>
        </h2>
    </center>
    
</body>
</html>