<?php

require __DIR__ . "/vendor/autoload.php";

use App\Controller\Pages\Home;

new class 
{
    /**
     * Construtor
     */
    function __construct()
    {
        try 
        {
            echo Home::getHome();
        }catch(Exception $ex)
        {
            echo "Pagina indisponivel ".$ex->getMessage();
        }
    }
};
