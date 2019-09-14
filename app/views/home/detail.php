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

        

        $row = mysqli_fetch_array($data["SV"]);
        echo $row["ID"];
        echo "<h2>" . $row["HOTEN"] . "</h2>";
    ?>
    
</body>
</html>