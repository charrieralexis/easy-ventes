<?php

namespace EasyVentes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * alert
 *
 * @ORM\Table()
 * @ORM\Entity
 */

class Alert
{
    /**
     * @ORM\Id
     * 
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;
    
    /**
     * @ORM\Id
     * 
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;
    
    function getProduct() {
        return $this->product;
    }

    function getClient() {
        return $this->client;
    }

    function setProduct(Product $product) {
        $this->product = $product;
    }

    function setClient(Client $client) {
        $this->client = $client;
    }


}
