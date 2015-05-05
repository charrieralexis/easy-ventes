<?php

namespace EasyVentes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EasyVentes\FrontBundle\Entity\ProductRepository")
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="image", type="blob")
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="smallint")
     */
    private $stock;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;
    
    /**
     * @Assert\NotBlank()
     * 
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;
    
    /**
     * @Assert\File(
     *      maxSize = "2048k",
     *      mimeTypes = {"image/jpg", "image/jpeg", "image/png", "image/gif"},
     *      mimeTypesMessage = "Choisissez un fichier image valide"
     * )
     */
    private $file;

    
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
     * @return Product
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
     * @return Product
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
    
    
    public function setFile(UploadedFile $file)
    {
        //var_dump($_FILES['product']);
        
        if(isset($_FILES['product']['tmp_name']['file'])){
            $type = pathinfo($_FILES['product']['name']['file'], PATHINFO_EXTENSION);
            $data = file_get_contents($_FILES['product']['tmp_name']['file']);
            $this->image = 'data:image/' . $type . ';base64,' . base64_encode($data);
        } else {
            $this->image = null;
        }
        $this->file = null;
    
        return $this;
    }
    
    public function getFile()
    {
        return $this->file;
    }
    
    /**
     * Set image
     *
     * @param string $image
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        
        return $this->image;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    
        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    
    
    function getCategory() {
        return $this->category;
    }

    function setCategory(Category $category) {
        $this->category = $category;
    }
    
    public function __toString() {
        return $this->getName();
    }
}
