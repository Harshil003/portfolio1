<?php
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $h = $_POST["month"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card p-3">
                    <div class="card-header text-center">
                        <h4>You have selected month </h4>
                    </div>
                        <select class="form-select mt-1">
                            <option <?= ($h==1)?"selected":0; ?>>January</option>
                            <option <?= ($h==2)?"selected":0; ?>>February</option>
                            <option <?= ($h==3)?"selected":0; ?>>March</option>
                            <option <?= ($h==4)?"selected":0; ?>>April</option>
                            <option <?= ($h==5)?"selected":0; ?>>May</option>
                            <option <?= ($h==6)?"selected":0; ?>>June</option>
                            <option <?= ($h==7)?"selected":0; ?>>July</option>
                            <option <?= ($h==8)?"selected":0; ?>>August</option>
                            <option <?= ($h==9)?"selected":0; ?>>September</option>
                            <option <?= ($h==10)?"selected":0; ?>>October</option>
                            <option <?= ($h==11)?"selected":0; ?>>November</option>
                            <option <?= ($h==12)?"selected":0; ?>>December</option>
                        </select>
                </div>
            </div>
        </div>
    </div>
</body>
</html>