<?php

namespace Cupon\TiendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class Tienda {
   /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /** @ORM\Column(type="string", length=100) */
    protected $nombre;
    
    /** @ORM\Column(type="string", length=100) */
    protected $slug;
    
    /** @ORM\Column(type="string", length=10) */
    protected $login;
    
    /** @ORM\Column(type="string", length=255) */
    protected $password;
    
    /** @ORM\Column(type="string", length=255) */
    protected $salt;
    
    /** @ORM\Column(type="text") */
    protected $descripcion;
    
    /** @ORM\Column(type="text") */
    protected $direccion;
    
    /** @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad")  */
    protected $ciudad;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getSalt() {
        return $this->salt;
    }

    public function setSalt($salt) {
        $this->salt = $salt;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad
) {
        $this->ciudad = $ciudad;
    }

    public function __toString() {
        return $this->getNombre();
    }

    
}

?>
