<?php

namespace DSS\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Factura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idFactura", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pedido_Identificador", type="integer")
     * @ORM\JoinColumn(name="Pedido", referencedColumnName="Identificador")
     */
    private $pedidoIdentificador;


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
     * Set pedidoIdentificador
     *
     * @param integer $pedidoIdentificador
     * @return Factura
     */
    public function setPedidoIdentificador($pedidoIdentificador)
    {
        $this->pedidoIdentificador = $pedidoIdentificador;

        return $this;
    }

    /**
     * Get pedidoIdentificador
     *
     * @return integer 
     */
    public function getPedidoIdentificador()
    {
        return $this->pedidoIdentificador;
    }
}
