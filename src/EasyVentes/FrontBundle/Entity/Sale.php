<?php

namespace EasyVentes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sale
 *
 * @ORM\Table()
 * @ORM\Entity
 */

class Sale 
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
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     */
    private $event;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nb_sales", type="smallint")
     */
    private $nbSales;
    
    function getProduct() {
        return $this->product;
    }

    function getEvent() {
        return $this->event;
    }

    function getNbSales() {
        return $this->nbSales;
    }

    function setProduct(Product $product) {
        $this->product = $product;
    }

    function setEvent(Event $event) {
        $this->event = $event;
    }

    function setNbSales($nbSales) {
        $this->nbSales = $nbSales;
    }


}
