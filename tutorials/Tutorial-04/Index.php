<!doctype html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    
    
    <title>Simple Interest (Tutorial 4)</title>
</head>
<body>
    <div class="container mt-3 ">
        <div class="row justify-content-center ">
            <div class="col-6 " >
                <div class="card ">
                    <div class="alert alert-info text-center">
                        Calculator                    </div>
                    <div class="card-body">
                        <form action="result.php" method="post">
                        <p class="text-primary">Enter principal</p>
                         <input name="p" type="number" placeholder="principal" class="form-control mb-2" value="1000" required>
                        <p class="text-primary">Enter No of year</p>
                         <input name="n" type="number" placeholder="time" class="form-control mb-2" value="10" required>
                         <p class="text-primary">Enter Rate of intresset</p>
                         <input name="r" type="number" placeholder="rate of interesset" class="form-control mb-2" value="10" required>
                         <div class="row justify-content-center">
                             <div class="col-3">
                                 <button name="cal" class="btn btn-success mb-2">Calculate</button>
                                </div>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>