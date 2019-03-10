<?php

namespace src\application\controllers;
use src\application\core\Controller;

use Goutte\Client;

class Controller_weather extends Controller
{

    function action_index()
    {
        session_start();
        if($this->AuthCheck() == true)
        {
            $client = new Client();
            $urlGismeteo = 'https://www.gismeteo.ua/weather-zaporizhia-5093/';
            $client->setHeader('User-Agent', "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36");
            $crawler = $client-> request ('GET', $urlGismeteo);
            //var_dump(fcontent).die();
            $this->view->generate('weather_view.php', 'template_view.php', [$crawler->html()]);

        } else $this->view->generate('main_view.php', 'template_view.php');
    }
}