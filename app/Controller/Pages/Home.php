<?php

namespace App\Controller\Pages;

use App\Utils\View;

use App\Model\Entity\Organization;
use App\Utils\ConfigGlobal;

class Home extends Page
{
    /**
     * METDDO RESPONSAVEL POR RETORNAR O CONTEUDO DA HOME
     * 
     * @var App\Controller\Pages\funciton
     */
    static function getHome()
    {
        $obOrganization = new Organization;
        $search = $obOrganization->get(1);

        $content = View::render("pages/home", [
            "name"         => $search->name,
            "description"  => $search->description
        ]);
        return parent::getPage((new ConfigGlobal)->getSource(), $content);
    }
}
