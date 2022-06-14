<?php
    $mysql = new mysqli('std-mysql', 'std_1739_cworkphp', 'Bigbos2002', 'std_1739_cworkphp');
    $goods_id = $_GET['id'];
    $goods = mysqli_query($mysql, "SELECT * FROM `comment` WHERE `id_com`='$goods_id'");
    $good = mysqli_fetch_assoc($goods);
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
        .wrapper{
            max-width: 500px;
            margin: 0 auto;
        }
        h2{
            margin: 20%;
        }
        .form-control{
            border: none;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2> Изменить коментарий </h2>
        <form action="backend/update.php" method="POST" class="row" >
            <div class="mb-3 col-12 mt-3">
                <input name="message" value="<?= $good['text']?>" class="form-control" >
                <input type="hidden" name="id" value="<?= $goods_id ?>" />
            </div>
            <button class="btn btn-sm btn-primary pull-right col-1 mb-5" type="submit">Добавить</button>
        </form>
    </div>

</body>
</html>