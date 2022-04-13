<?php

namespace App\Controllers;



use App\Models\Donner;
use App\Repository\DonnerRepository;
use App\Views\ViewManager;

class DonneurController
{
    //TODO: To handle donner
    public function addDonner()
    {

        if(isset($_POST["_nom"]) && isset($_POST["_tel"])){
            session_start();

            $nom =$_POST["_nom"];
            $tel = $_POST["_tel"];

            $_SESSION["donneur"] = $nom;
            $donner = new Donner();
            $donner->setFullName($nom)->setPhoneNumber($tel);
            $dr = new DonnerRepository();
            $dr->saveDonner($donner);
            ViewManager::renderView('home/home.php');
        }
        else{
            ViewManager::renderView('donner/donner.php');
    }


        }
}