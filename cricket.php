<html>
<body bgcolor="lightyellow">
<h4></h4>
 <?php
$name=["ROHIT SHARMA","HARDIK PANDYA","VIRAT KOHLI","RISHAB PANT","MS DHONI","JASPRIT BUMRAH","DINESH KARTHIK"];
    $role=["BALL BOY","WICKET KEEPER","RIGHT-HAND BATSMAN","FAST-BOWLER","RIGHT-HAND BATSMAN","FAST BOWLER","SPIN BOWLER"];
    echo "<u>STARTING XI</u>";
    echo "<br>
    <table border='2px'>
    <tr><th> sl no.</th>
    <th>player</th>
    <th>ROLE</th>";
     
    for ($i=0;$i<7;$i++)
    {
    $sl=$i+1;
    echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
    }
    echo "</table>"
    ?>
    </body>
    </html>

