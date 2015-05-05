<?php

namespace EasyVentes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Inscription
 *
 * @ORM\Table()
 * @ORM\Entity
 */

class Inscription 
{
    /**
     * @ORM\Id
     * 
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;
    
    /**
     * @ORM\Id
     * 
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     */
    private $event;
    
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;
    
    
    function getClient() {
        return $this->client;
    }

    function getEvent() {
        return $this->event;
    }

    function getStatus() {
        return $this->status;
    }

    function setClient(Client $client) {
        $this->client = $client;
    }

    function setEvent(Event $event) {
        $this->event = $event;
    }

    function setStatus($status) {
        $this->status = $status;
    }
}
