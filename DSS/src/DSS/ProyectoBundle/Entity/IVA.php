<?php

namespace DSS\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IVA
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class IVA {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float")
     */
    private $valor;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

}
