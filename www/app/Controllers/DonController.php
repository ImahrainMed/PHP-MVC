<?php

namespace App\Controllers;

use App\Models\Donation;
use App\Repository\DonnerRepository;
use App\Repository\DonRepository;
use App\Views\ViewManager;

class DonController
{
    //TODO: To handle donations
    public function addDonation()
    {


            if(isset( $_SESSION["donneur"]) && isset($_POST["_typedon"]) && isset($_POST["_name"]))
            {
                $type = $_POST["_typedon"];
                $nom = $_POST["_name"];
                $donneur = $_SESSION["donneur"];
                $dr = new DonnerRepository();
                $id = $dr->findDonnerIdByUserName($donneur);
                $donr = new DonRepository();
                $don = new Donation();
                $don->setNom($nom)
                    ->setType($type)
                    ->setDonnerId($id);
                $donr->saveDonation($don);

                ViewManager::renderView("don/don.php");
                }else{
                ViewManager::renderView('don/don.php');
            }

        }






}