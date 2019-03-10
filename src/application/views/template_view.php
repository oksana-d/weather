<html lang="ru">
<head>
    <meta charset="utf-8">
    <link href="src/application/css.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script
    <script src='https://www.google.com/recaptcha/api.js'></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css">
    <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css">
    <title>Погода</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="#" class="navbar-brand">
        <img src="https://cdn.icon-icons.com/icons2/721/PNG/512/rain_icon-icons.com_62496.png" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav mr-auto">
            <?php
            if($_SESSION["is_auth"] == true) {
                if($_SERVER['REQUEST_URI']=='/weather'){
                    echo "<li class='nav-item active'>
                <a class='nav-link' href='/weather'>Погода сегодня<span class='sr-only'>(current)</span></a>
            </li>";
                } else  echo "<li class='nav-item'>
                <a class='nav-link' href='/weather'>Погода сегодня<span class='sr-only'>(current)</span></a>
            </li>";

            if($_SERVER['REQUEST_URI']=='/list') {
                echo "<li class='nav-item active'>
                <a class='nav-link' href='/list'>Фидбеки</a>
            </li>";
            } else echo "<li class='nav-item'>
                <a class='nav-link' href='/list'>Фидбеки</a>
            </li>";
            }
            if($_SERVER['REQUEST_URI']=='/feedback') {
                echo "<li class='nav-item active'>
                <a class='nav-link' href='/feedback'>Обратная связь</a>
            </li>
        </ul>";
            } else   echo "<li class='nav-item'>
                <a class='nav-link' href='/feedback'>Обратная связь</a>
            </li>
        </ul>";
            ?>

        <ul class="nav navbar-nav navbar-right">
            <?php
            if($_SESSION["is_auth"] == false)
                if($_SERVER['REQUEST_URI']=='/') {
                    echo "<li class='nav-item active'>
                    <a class='nav-link' href='/'>Вход</a>
                </li>";
                } else echo "<li class='nav-item'>
                    <a class='nav-link' href='/'>Вход</a>
                </li>";
                ?>
            <?php
            if($_SESSION["is_auth"] == true)
                if($_SERVER['REQUEST_URI']=='/main/signout') {
                    echo "<li class='nav-item nav-item-right active'>
                    <a class='nav-link' href='main/signout'>Выход</a>
                </li>";
                } else echo "<li class='nav-item nav-item-right'>
                    <a class='nav-link' href='main/signout'>Выход</a>
                </li>";
            ?>
        </ul>
    </div>
</nav>
<?php include 'src/application/views/'.$content_view; ?>
</body>
</div>
</html>