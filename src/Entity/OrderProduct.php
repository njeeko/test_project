<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderProductRepository")
 */
class OrderProduct
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $OrderID;

    /**
     * @ORM\Column(type="integer")
     */
    private $ProductID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderID(): ?int
    {
        return $this->OrderID;
    }

    public function setOrderID(int $OrderID): self
    {
        $this->OrderID = $OrderID;

        return $this;
    }

    public function getProductID(): ?int
    {
        return $this->ProductID;
    }

    public function setProductID(int $ProductID): self
    {
        $this->ProductID = $ProductID;

        return $this;
    }
}
