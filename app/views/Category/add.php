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
                                <h4 class="card-title">Sample Form with the Icons</h4>
                                <h6 class="card-subtitle">made with bootstrap elements</h6>
                                <form action="" method="POST" class="form p-t-20">
                                    <div class="form-group">
                                        <label for="exampleInputuname">Name</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                            </div>
                                            <input name="name" type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputuname">Ordering</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                            </div>
                                            <input name ="ordering" type="text" class="form-control" placeholder="Ordering" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>


                                  
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox m-b-0">
                                            <input name="active" type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">Remember me</span>
                                        </label>
                                    </div>

                                    <div class="form-group has-success">
                                                    <label class="control-label">Parent</label>
                                                    <select name="selectlevel" class="form-control custom-select">
                                                    <option value=0> --Cấp 1-- </option>
                                                    <?php while($row = mysqli_fetch_array($data["levelZero"])){?>
                                                <option value=<?=$row['id'] ?>> <?= $row['name'] ?>  </option>
                                            <?php }?>
                                                    </select>
                                                    <small class="form-control-feedback"> Select your parent </small> </div>
                                    <button name="btnAdd" type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
</body>
</html>