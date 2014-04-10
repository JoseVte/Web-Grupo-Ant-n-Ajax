<?php

namespace DSS\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cliente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DSS\ProyectoBundle\Entity\ClienteRepository")
 */
class Cliente
{
    /**
     * @var string
     *
     * @ORM\Column(name="NIF", type="string")
     * @ORM\Id
     * @Assert\NotNull()
     */
    private $NIF;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=20)
     * @Assert\NotNull()
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellidos", type="string", length=255)
     * @Assert\NotNull()
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=9)
     * @Assert\NotNull()
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     * @Assert\NotNull()
     * @Assert\Email(message="El mail '{{value}}' no es correcto.")
     */
    private $email;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getNif()
    {
        return $this->NIF;
    }
    
    /**
     * Set id
     */
    public function setNif($nif){
        $this->NIF=$nif;
    }
    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Cliente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Cliente
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Cliente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Cliente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setTable($table){
        $this->NIF=$table->NIF;
        $this->nombre=$table->nombre;
        $this->apellidos=$table->apellidos;
        $this->direccion=$table->direccion;
        $this->email=$table->email;
       
        
    }
}
