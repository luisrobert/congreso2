<?php
namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="user1")
 */
class User {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $user_id;

    /** @ORM\Column(type="string") */
    protected $username;

    /** @ORM\Column(type="string") */
    protected $email;
    
    // getters/setters
    public function getUser_id() {
        return $this->user_id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function setUsername($username) {
        $this->username = $username;
    }
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }



}