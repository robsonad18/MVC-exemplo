<?php

namespace App\Model\Entity;

use App\Model\Entity\Database;
use App\Model\ViewModel\OrganizationViewModel;

class Organization
{
    static function get(int $id):?OrganizationViewModel
    {
        try 
        {
            $query = Database::get()->prepare("SELECT * FROM organization WHERE id = ?");
            $query->execute([$id]);
            $result = $query->fetch(\PDO::FETCH_ASSOC);
            $result = $result != null && is_bool($result) === false ? $result : [];
            
            $viewModel = new OrganizationViewModel();
            $viewModel->name = $result["name"];
            $viewModel->description = $result["description"];
            return $viewModel;
        }catch(\PDOException $ex)
        {
            echo $ex->getMessage();
        }
    }
}
