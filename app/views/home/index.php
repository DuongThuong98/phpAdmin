<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // foreach ($data['Mang'] as $key=>$sv)
        //     echo $sv['ID'];

         while($row = mysqli_fetch_array($data["Mang"])){
                echo "<h2> <a href='MVC/public/home/detail/".$row['ID']."'>". $row["HOTEN"] . "</a></h2>";}
    ?>
</body>
</html>