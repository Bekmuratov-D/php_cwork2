
<?php
    
    include_once 'backend/function.php'

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
        body{background:url(/images/bg/bg-1.png)}

        .img-sm {
        width: 46px;
        height: 46px;
        }
        .panel {
        box-shadow: 0 2px 0 rgba(0,0,0,0.075);
        border-radius: 0;
        border: 0;
        margin-bottom: 15px;
        position: relative;
        }
        .panel .panel-footer, .panel>:last-child {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        }
        .panel .panel-heading, .panel>:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
        .panel-body {
        padding: 25px 20px;
        }
        .media-block .media-left {
        display: block;
        float: left
        }
        .media-block .media-right {
        float: right
        }
        .media-block .media-body {
        display: block;
        overflow: hidden;
        width: auto
        }
        .middle .media-left,
        .middle .media-right,
        .middle .media-body {
        vertical-align: middle
        }
        .thumbnail {
        border-radius: 0;
        border-color: #e9e9e9
        }
        .tag.tag-sm, .btn-group-sm>.tag {
        padding: 5px 10px;
        }
        .tag:not(.label) {
        background-color: #fff;
        padding: 6px 12px;
        border-radius: 2px;
        border: 1px solid #cdd6e1;
        font-size: 12px;
        line-height: 1.42857;
        vertical-align: middle;
        -webkit-transition: all .15s;
        transition: all .15s;
        }
        .text-muted, a.text-muted:hover, a.text-muted:focus {
        color: #acacac;
        }
        .text-sm {
        font-size: 0.9em;
        }
        .text-5x, .text-4x, .text-5x, .text-2x, .text-lg, .text-sm, .text-xs {
        line-height: 1.25;
        }
        .btn-trans {
        background-color: transparent;
        border-color: transparent;
        color: #929292;
        }
        .btn-icon {
        padding-left: 9px;
        padding-right: 9px;
        }
        .btn-sm, .btn-group-sm>.btn, .btn-icon.btn-sm {
        padding: 5px 10px !important;
        }
        .mar-top {
        margin-top: 15px;
        }
        .continer-my{
            max-width: 1000px;
            margin: 0 auto;
        }
        .border-com{
            border-left: solid 1px #D8CBC7;
        }
        .redac{
            font-size: 14px;
            border: none;
            margin-left: 10px;
            height: 30px;
            border-radius: 4px;
            background-color: #2d72ef;
            color: #FFF;
        }
        .redac:hover{
            opacity: 0.4;
        }
        .form_rede{
            display: none;
        }
        .form_red{
            position: absolute;
            left: 40%;
            top: 20%;
            background-color: #454b39;
            padding: 50px;
            border-radius: 4px;
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
        <div class="container mt-5 continer-my">
            <div class="row col-12">
                <img class="col-5" src="img/itachi2.png" alt="" style="height: 20em; width: 20em;">
                <div class="col-7">
                    <h2>Итачи Учиха</h2>
                    <p>Итачи Учиха (яп. うちは イタチ, У́чиха Ита́чи) — шиноби отступник, бывший член Анбу, был гением клана Учиха из Скрытого Листа. В молодости Итачи стал международным преступником, уничтожив весь свой клан, оставив в живых лишь своего младшего брата Саске. Впоследствии Итачи присоединился к международной преступной организации, Акацуки, деятельность которой порой приводила его к конфликтам с ниндзя Листа, включая Саске, стремящегося отомстить за свой клан. После смерти Итачи, выяснилось, что его мотивы были куда более сложными, чем казалось изначально — он верил, что все его действия были направлены на благо Саске и Конохи, и он оставался предан Скрытому Листу до самого конца.</p>
                </div>
            </div>
        </div>
        <br><br><br>
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                    <form action="backend/addmesseg.php" method="POST" class="row" >
                        <div class="mb-3 col-12 mt-3">
                            <input type="hidden" name="page" value="2"/>
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Напишите комментарии"></textarea>
                            <input type="hidden" name="username" value="<?=$_COOKIE['user']?>" />
                        </div>
                        <button class="btn btn-sm btn-primary pull-right col-1 mb-5" type="submit">Добавить</button>
                    </form>
                </div>
                <div class="panel">
                    <form class="form_rede" action="">
                        <div class="con_form">
                            <textarea cols="30" rows="3" type="text"></textarea>
                        </div>
                        <button class="redac" type="submit">Редактировать</button>
                    </form>
                    <div class="panel-body">
                        <div class="media-block">
                        <?php
                            $mysql = new mysqli('std-mysql', 'std_1739_cworkphp', 'Bigbos2002', 'std_1739_cworkphp');
                            $result = mysqli_query($mysql, "SELECT * FROM `comment`");
                            $result = mysqli_fetch_all($result);
                            foreach($result as $item) {
                                if ($item[4] == '2'):
                                    ?>
                                <div class="border-com">
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <a class="media-left" href="#"><img class="img-circle img-sm" alt="Профиль пользователя" src="https://bootstraptema.ru/snippets/icons/2016/mia/1.png"></a>
                                            <div>
                                                <a href="#" class="btn-link text-semibold media-heading box-inline"><?php echo $item[3] ?></a>
                                                <p class="text-muted text-sm"></i><?php echo $item[2] ?></p>
                                            </div>
                                        </div>
                                        <a href="update.php?id=<?= $item[0] ?>">изменить<th>&#9998;</th></a>
                                    </div>
                                    <div class="card-body border col-3 m-3 rounded p-3 d-flex" > 
                                        <p class="card-text"><?php echo $item[1] ?></p>
                                    </div>
                                </div>
                        <?php
                         endif;
                            }
                        ?>
                        </div>
                    </div>
                </div>
                <hr>
            </div><!-- /.row -->
        </section><!-- /.container -->
        <script>
            const burger = document.querySelector(".redac-red");
            const burger1 = document.querySelector(".form_rede");


            burger.addEventListenerall("click", function() {
                burger1.classList.toggle("form_red");
            });
        </script>
    </main>
</body>
</html>