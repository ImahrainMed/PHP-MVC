<?php

namespace App\Repository;

use App\Models\Donner;
use App\Service\DatabaseConnection;
use PDO;

class DonnerRepository
{
  //TODO: To handle Donner Requests
    public function saveDonner(Donner $donner )
    {
        /** @var PDO|null $connection */
        $connection = DatabaseConnection::getInstance();
        $data = ['nom' => $donner->getFullName() , 'tel' => $donner->getPhoneNumber()];
        $sql = "insert into donner (full_name , phone_number ) VALUES (:nom , :tel) ";
        $connection->prepare($sql)->execute($data);

    }

    public function findDonnerIdByUserName(string $nom):int
    {
        /** @var PDO|null $connection */
        $connection = DatabaseConnection::getInstance();
        $data = ['nom' => $nom ];
        $sql = "select * from donner where full_name=:nom ";

        $stmt = $connection->prepare($sql);
        $stmt->execute($data);
        $result = $stmt->fetch();
        $id = (int) $result[0];


        return $id;
    }

    public function getAllDonners(): array
    {

        /** @var PDO|null $connection */
        $connection = DatabaseConnection::getInstance();

        $sql = "select * from donner ";


        $stmt = $connection->query($sql);
        $result = $stmt->fetchAll();
        $allDonners =[];
        foreach ($result as $rs){
            array_push($allDonners, (new Donner())
            ->setId($rs["id"])
            ->setFullName(($rs["full_name"]))
            ->setPhoneNumber($rs["phone_number"])
            );
        }

        return $allDonners;
    }

}