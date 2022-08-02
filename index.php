<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main page</title>

    <link rel="stylesheet" href="style/style.css" type="text/css">

    <style>
        table{
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 14px;
            border-collapse: collapse;
        }

        th{
            padding: 8px;
            font-size: 16px;
        }

        td{
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }

        th,td{
            border-style: solid;
            border-width: 3px;
            border-color: rgb(91, 91, 91);;
        }

        tr.odd{
            background-color: rgb(213, 213, 213);
        }

        #heading{
            background-color: rgb(91, 91, 91);
            color: white;
        }
    </style>
</head>

<body>
    <?php

    // initializam sirul
    $pers=array(
        array(1,"Peter","Andersen","peter@gmail.com"),
        array(2,"John","Miller","john@gmail.com"),
        array(3,"Thomas","Swift","thomas@gmail.com"),
        array(4,"John","Smith","johnsmith@gmail.com")
    );

    // afisam capul de tabel
    echo "<table>";
    echo "<tr id='heading'>";
    echo "<th>"."ID"."</th>";
    echo "<th>"."First name"."</th>";
    echo "<th>"."Last name"."</th>";
    echo "<th>"."Email"."</th>";
    echo "</tr>";

    // deschidem bucla principala pentru parcurgerea randurilor sirului
    for($row=0;$row<count($pers);$row++){
        // randurilor impare le aplicam atributul class utilizat la stilizare
        if($row%2<>0){
            echo "<tr class='odd'>";    
        }
        else{
            echo "<tr>";
        }

        // deschidem bucla interioara pentru parcurgerea coloanelor
        for($col=0;$col<count($pers[$row]);$col++){
            echo "<td>".$pers[$row][$col]."</td>";            
        }

        echo "</tr>";
    }

    echo "</table>";

    ?>

</body>
</html>