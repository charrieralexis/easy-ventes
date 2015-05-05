<?php

namespace EasyVentes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="client_max", type="smallint")
     */
    private $clientMax;
    
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;
    
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="codepostal", type="string", length=255)
     */
    private $codePostal;
    
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set clientMax
     *
     * @param integer $clientMax
     * @return Event
     */
    public function setClientMax($clientMax)
    {
        $this->clientMax = $clientMax;
    
        return $this;
    }

    /**
     * Get clientMax
     *
     * @return integer 
     */
    public function getClientMax()
    {
        return $this->clientMax;
    }
    
    function getAddress() {
        return $this->address;
    }

    function getCodePostal() {
        return $this->codePostal;
    }

    function getVille() {
        return $this->ville;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }
    
    public function __toString() {
        return $this->getName();
    }
    
    function tirage($clients,$nbMax) {
	if (count($clients) <= $nbMax){
            $result = $clients;
	}

        else{
            $result = array_rand($clients, $nbMax);
        }

        return $result;

    }
}
