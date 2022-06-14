
<?php
    
    include_once 'backend/function.php';
    include_once 'backend/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <style> 
        .span{
            color: #808080;
            font-size: 18px;
            font-weight: bold;
        }
        .card-con{
            margin-right: 10px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <header class="bg-light p-4">
        <div class="container">
            <div class="row">
                <p class="col-10">
                    <a class="p-2 bg-warning rounded" href="/exit.php">ВЫЙТИ</a>
                </p>
                <p class="col-2 p-2 bg-warning rounded">
                    USER: <?=$_COOKIE['user']?>
                </p>
            </div>
        </div>
    </header>
    <main>
        <div class="container mt-4">
            <div class="row row-con">
                <div class="card card-con" style="width: 22rem;">
                    <img class="card-img-top" src="img/itachi1.png" alt="Card image cap" style="height: 20rem; width: 20em;">
                    <div class="card-body">
                        <h5 class="card-title">Итачи Учиха</h5>
                        <p class="card-text">Итачи Учиха (яп. うちは イタチ, У́чиха Ита́чи) — шиноби отступник, бывший член Анбу, был гением клана Учиха из Скрытого Листа. В молодости...</p>
                        <a href="page.php" class="btn btn-primary">Читать далее >>></a>
                    </div>
                </div>
                <div class="card card-con" style="width: 22rem;">
                    <img class="card-img-top" src="img/itachi2.png" alt="Card image cap" style="height: 20rem; width: 20em;">
                    <div class="card-body">
                        <h5 class="card-title">Итачи Учиха</h5>
                        <p class="card-text">Итачи Учиха (яп. うちは イタチ, У́чиха Ита́чи) — шиноби отступник, бывший член Анбу, был гением клана Учиха из Скрытого Листа. В молодости...</p>
                        <a href="page2.php" class="btn btn-primary">Читать далее >>></a>
                    </div>
                </div>
                <div class="card card-con" style="width: 22rem;">
                    <img class="card-img-top" src="img/itachi3.png" alt="Card image cap" style="height: 20rem; width: 20em;">
                    <div class="card-body">
                        <h5 class="card-title">Итачи Учиха</h5>
                        <p class="card-text">Итачи Учиха (яп. うちは イタチ, У́чиха Ита́чи) — шиноби отступник, бывший член Анбу, был гением клана Учиха из Скрытого Листа. В молодости...</p>
                        <a href="page3.php" class="btn btn-primary">Читать далее >>></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>