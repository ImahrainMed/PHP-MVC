<?php

namespace App\Controllers;

use App\Repository\DonnerRepository;
use App\Repository\DonRepository;
use App\Views\ViewManager;

class HomeController
{
    public function home()
    {

        $donnerRepo = new DonnerRepository();
        $allDonners = $donnerRepo->getAllDonners();
        $filtred_donations = [];
        if(isset($_POST["selecteddonner"])){
            $sd = $_POST["selecteddonner"];
            $dr = new DonRepository();

            $filtred_donations = $dr->getAllDonationsByDonnerId($sd);

            ViewManager::renderView('home/home.php',[
                'alldonners'=>$allDonners ,'filtred_donations'=>  $filtred_donations
            ]);
        }else{
            ViewManager::renderView('home/home.php',[
                'alldonners'=>$allDonners
            ]);
        }



    }
}
