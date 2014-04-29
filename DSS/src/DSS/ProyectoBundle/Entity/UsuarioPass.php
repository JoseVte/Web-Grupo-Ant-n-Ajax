<?php

namespace DSS\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuario
 *
 * @ORM\Entity(repositoryClass="DSS\ProyectoBundle\Entity\UsuarioRepository")
 */
class UsuarioPass implements \Symfony\Component\Security\Core\User\UserInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="NIF", type="string", length=9)
     * @ORM\Id
     * @Assert\NotNull()
     * 
     */
    private $NIF;
    /**
     * @var string
     *
     * @ORM\Column(name="Pass", type="string", length=128)
     * @Assert\NotNull()
     */
    private $pass;
    
    private $passNuevo;
    
    private $passNuevo2;


    /**
     * Set pass
     *
     * @param string $pass
     * @return Usuario
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }
    
    public function setPassNuevo($passNuevo)
    {
        $this->pass = $passNuevo;

        return $this;
    }
    
    public function setPassNuevo2($passNuevo2)
    {
        $this->pass = $passNuevo2;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getNif()
    {
        return $this->NIF;
    }
    
    public function setNif($id){
        $this->NIF=$id;
    }
    
    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }

    public function getPassNuevo()
    {
        return $this->passNuevo;
    }
    
    public function getPassNuevo2()
    {
        return $this->passNuevo2;
    }
    

    public function eraseCredentials() {
        
    }

    public function getPassword() {
        return $this->pass;
    }

    public function getRoles() {
        return array($this->nvAcceso);
    }

    public function getSalt() {
        
    }

    public function getUsername() {
        return $this->nombre;
    }

}
