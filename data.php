<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>bus location</title>
    <link rel="stylesheet" href="data.css">
</head>
<body>
    <table cellspacing=0 cellpadding1=20>
    
        <tr>
            <td>#</td>
            <td id="vehiclenumber">VEHICLE NAME</td>
            <td id="map">Maps</td>
        </tr>
        <?php
        require 'connection.php';
        $rows = mysqli_query($conn,"SELECT * FROM tb_data ORDER BY id DESC");
        $i=1;
        foreach($rows as $row):
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["name"];?></td>
            <td style ="width: 450px; hieght:450px"><iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,<?php echo $row["longitude"];?>&h1=es;z=14&output=embed' width=""></iframe></td>
            <?php endforeach;?>






        </tr>
    </table>

    <a href="index.html" id='home'>Home</a>
    
</body>
</html>