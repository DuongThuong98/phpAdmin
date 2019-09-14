<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grid options</h4>
                               
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                                <th class="text-center"> ID
                                                    </th>
                                                <th class="text-center"> Name
                                                    </th>
                                                <th class="text-center"> Odering
                                                   </th>
                                                <th class="text-center"> Number
                                                 </th>
                                                 <th class="text-center"> Parent
                                                 </th>
                                                 <th class="text-center"> 
                                                    <a class="btn waves-effect waves-light btn-info" href="http://localhost:81/Admin/public/Category/add"> Thêm </a>
                                                 
                                                    </th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>  
                                           
                                        <?php
                                                while($row = mysqli_fetch_array($data["Mang"])){
                                                   
                                            ?>
                                            
                                            <tr>   
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['odering'] ?></td>
                                                <td><?= $row['active'] ?></td>
                                                <td><?= $row['level'] ?></td>
                                                <td> <button type="button" class="btn waves-effect waves-light btn-primary">Sửa</button>
                                                 / <button type="button" class="btn waves-effect waves-light btn-primary">Xóa</button></td>
                                                </tr>

                                                <?php }?>
                                               
                                        </tbody>
                                      
                                    </table>
                                </div>
                                <p>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, applying any <code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large devices if a <code>.col-lg-</code> class is not present.</p>
                            </div>
                        </div>
</body>
</html>