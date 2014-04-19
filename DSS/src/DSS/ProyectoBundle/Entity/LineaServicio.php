<?php

namespace DSS\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LineaServicio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class LineaServicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idLineaServicio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Servicio_idServicio", type="integer")
     */
    private $servicioIdServicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pedido_Identificador", type="integer")
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
     * Set servicioIdServicio
     *
     * @param integer $servicioIdServicio
     * @return LineaServicio
     */
    public function setServicioIdServicio($servicioIdServicio)
    {
        $this->servicioIdServicio = $servicioIdServicio;

        return $this;
    }

    /**
     * Get servicioIdServicio
     *
     * @return integer 
     */
    public function getServicioIdServicio()
    {
        return $this->servicioIdServicio;
    }

    /**
     * Set pedidoIdentificador
     *
     * @param integer $pedidoIdentificador
     * @return LineaServicio
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
