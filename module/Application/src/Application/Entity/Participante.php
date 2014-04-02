<?php
namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="participante")
 */
class Participante {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $idparticipante;

    /** @ORM\Column(type="string") */
    protected $cedula;

    /** @ORM\Column(type="string") */
    protected $nombre;
    /** @ORM\Column(type="string") */
    protected $apellido;
    
    /** @ORM\Column(type="string") */
    protected $lugar;
    
    /** @ORM\Column(type="string") */
    protected $telefono;
    
    /** @ORM\Column(type="string") */
    protected $email;
    
    // getters/setters
    public function getIdparticipante() {
        return $this->idparticipante;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getLugar() {
        return $this->lugar;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setIdparticipante($idparticipante) {
        $this->idparticipante = $idparticipante;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setLugar($lugar) {
        $this->lugar = $lugar;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setEmail($email) {
        $this->email = $email;
    }


}