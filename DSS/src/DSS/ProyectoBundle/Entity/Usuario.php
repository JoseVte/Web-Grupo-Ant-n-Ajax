<?php

namespace DSS\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DSS\ProyectoBundle\Entity\UsuarioRepository")
 */
class Usuario implements \Symfony\Component\Security\Core\User\UserInterface
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
     * @ORM\Column(name="NvAcceso", type="string", length=20)
     */
    private $nvAcceso;

    /**
     * @var string
     *
     * @ORM\Column(name="Pass", type="string", length=128)
     * @Assert\NotNull()
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=255)
     * @Assert\NotNull()
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
    
    public function setNif($id){
        $this->NIF=$id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * @return Usuario
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
     * Set nvAcceso
     *
     * @param string $nvAcceso
     * @return Usuario
     */
    public function setNvAcceso($nvAcceso)
    {
        $this->nvAcceso = $nvAcceso;

        return $this;
    }

    /**
     * Get nvAcceso
     *
     * @return string 
     */
    public function getNvAcceso()
    {
        return $this->nvAcceso;
    }

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

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
