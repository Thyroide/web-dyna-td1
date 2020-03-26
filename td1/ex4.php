<body>
    <a href="?ligne=2&colonne=2">2x2</a>
    <a href="?ligne=5&colonne=5">5x5</a>
    <a href="?ligne=10&colonne=8">10x8</a>

    <a href="?ligne=8&colonne=10">10x8</a>
    <?php
    echo "<table border='1'>
    <tbody>";
    for($l=0; $l<=$_GET["ligne"]; $l++){ 
    for($l=0;$l<=$_GET["ligne"];$l++){

        if (($l % 2) == 0){
            $gras = "bold";
        }
        else{
            $gras = "normal";
        }
        echo "<tr>"; 
        for($c=0; $c<=$_GET["colonne"]; $c++){ 
            echo "<td align='center'>$l-$c</td>"; 
        for($c=0;$c<=$_GET["colonne"];$c++){ 
            if (($c % 2) == 1){
                $color = "red";
            }
         else{
                $color = "black";
            }
            echo "<td align='center'><p style='font-weight: $gras; color: $color'>$l-$c</p></td>"; 
        } 
       echo "</tr>"; 
    }