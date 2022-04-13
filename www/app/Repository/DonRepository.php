<?php

namespace App\Repository;

use App\Models\Donation;
use App\Models\Donner;
use App\Service\DatabaseConnection;

class DonRepository
{
    //TODO : Save Donation
    public function saveDonation(Donation $donation)
    {
        /** @var PDO|null $connection */
        $connection = DatabaseConnection::getInstance();
        $data = ['nom' => $donation->getNom() , 'type' => $donation->getType() , 'id'=>$donation->getDonnerId()];
        $sql = "insert into donations (name , type ,donner_id) VALUES (:nom , :type ,:id) ";
        $connection->prepare($sql)->execute($data);

    }


    public function getAllDonationsByDonnerId(int $id) :array
    {
        /** @var PDO|null $connection */
        $connection = DatabaseConnection::getInstance();
        $data = ['id' => $id ];
        $sql = "select dts.* , d.full_name from donner d inner join donations dts on(d.id = dts.donner_id) where d.id=:id ";

        $stmt = $connection->prepare($sql);
        $stmt->execute($data);
        $result = $stmt->fetchAll();
        $arrayOfObjects = [];
        foreach ($result as $rs){
            array_push($arrayOfObjects,(new Donation())
            ->setId($rs["id"])
            ->setNom($rs["name"])
            ->setType($rs["type"])
            ->setDonnerId($rs["donner_id"])
            );
        }

        return $arrayOfObjects;
    }
}