
<div class="container">
    <div class="row justify-content-center align-items-center">
        <h1> <font color="blue">Погода сегодня в Запорожье</font></h1>
            <?php
            if(isset($data) && is_array($data)){
                $str = substr($data[0], stripos($data[0], "<div class=\"wsection wdata\""));
                $str = substr($str,0,  stripos($str, "</div>"));
                //var_dump($str).die();
                $str = "<table class=\"table \"" . $str;
                echo $str;
            }
            ?>
    <div <p> Данные взяты отсюда <a href="https://www.gismeteo.ua/weather-zaporizhia-5093/">www.gismeteo.ua</a> </p></div>
</div>