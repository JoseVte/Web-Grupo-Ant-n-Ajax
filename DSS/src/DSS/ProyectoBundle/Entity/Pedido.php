<?php

namespace DSS\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Pedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Identificador", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Proveedor_NIF", type="string", length=9)
     * 
     */
    private $proveedorNIF;

    /**
     * @var string
     *
     * @ORM\Column(name="Cliente_NIF", type="string", length=9)
     */
    private $clienteNIF;


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
     * Set proveedorNIF
     *
     * @param string $proveedorNIF
     * @return Pedido
     */
    public function setProveedorNIF($proveedorNIF)
    {
        $this->proveedorNIF = $proveedorNIF;

        return $this;
    }

    /**
     * Get proveedorNIF
     *
     * @return string 
     */
    public function getProveedorNIF()
    {
        return $this->proveedorNIF;
    }

    /**
     * Set clienteNIF
     *
     * @param string $clienteNIF
     * @return Pedido
     */
    public function setClienteNIF($clienteNIF)
    {
        $this->clienteNIF = $clienteNIF;

        return $this;
    }

    /**
     * Get clienteNIF
     *
     * @return string 
     */
    public function getClienteNIF()
    {
        return $this->clienteNIF;
    }
}
