<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        div{
            width: 100%;
            background-color: darkslategray;
            align-items: center;
        }

        table{
            width: 98%;
            text-align: center;
            margin: 0 auto;
        }

        th {
            height: 50px;
            transition-duration: 500ms;
            text-align: center;
        }

        .tg-1{
           border-style: solid;
           transition-duration: 500ms;
           border-color: white;
           border-width: 1px 0 0 0;
           border-radius: 5px;
        }

        .tg-2{
           border-style: solid;
           border-color: white;
           border-width: 0 0 1px 0;
           transition-duration: 500ms;
           border-radius: 5px;
        }

        .tg-3{
           border-style: solid;
           border-color: white;
           border-width: 1px 0 0 0;
           transition-duration: 500ms;
           border-radius: 5px;
        }

        .tg-3:hover {
        background-color:#333;
        color: darkslategray;
        border-color: darkslategray;
        transform: scale(1, 1);
        transition-duration: 500ms;
        }

        th, td {
            height: 50px;
            text-align: center;
            transition-duration: 500ms;
            color: white;
        }

        th:hover {
            background-color: #ddd;
            color: darkslategray;
            border-color: darkslategray;
            transform: scale(1, 1);
            transition-duration: 500ms;
            }

        .head {
        padding: 20px;
        text-align: center;
        background-color: darkslategray;
        color: white;
        font-family: 'Pacifico', cursive;
        }
        
        td:hover {
        background-color: #ddd;
        color: darkslategray;
        border-color: darkslategray;
        transform: scale(1, 1);
        transition-duration: 500ms;
        }

        a {
            text-decoration: none;
            color: white;
        }

    </style>
    
</head>
<body>
    <?php
        include("header.php");
        include("connection.php");
    ?>
    <div class="head">
        <h2>HOME</h2>
    </div>
    <div>

        <br>
        <table class="tg">

        <tr>
            <th class="tg-2">id</th>
            <th class="tg-2">term</th>
            <th class="tg-2">translation</th>
            <th class="tg-2">description</th>
            <th class="tg-2">defenition</th>
            <th class="tg-2">image</th>
        </tr>
        <?php
$query = "SELECT * FROM Terms";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $k1=$row[0];
    $k2=$row[1];
    $k3=$row[2];
    $k4=$row[3];
    $k5=$row[4];
    $k6=$row[5];
    echo "<tr>";
       echo "<td class='tg-1'>$k1</td>";
       echo "<td class='tg-1'>$k2</td>";
       echo "<td class='tg-1'>$k3</td>";
       echo "<td class='tg-1'>$k4</td>";
       echo "<td class='tg-1'>$k5</td>";
       echo "<td class='tg-1'>$k6</td>";
       echo "</tr>";
    }?>
        </table>
        <br>
        
    </div>
<?php
    include('footer.php')
?>
</body>
</html>