<?php

namespace App\Models;

class Donation
{
    /** @var int */
        private $id;
        /** @var string */
        private $nom;
        /** @var string */
        private $type;
        /** @var int */
        private $donnerId;
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getDonnerId(): int
    {
        return $this->donnerId;
    }

    /**
     * @param int $donnerId
     * @return self
     */
    public function setDonnerId(int $donnerId): self
    {
        $this->donnerId = $donnerId;
        return $this;
    }



}