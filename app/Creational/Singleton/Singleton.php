<?php

namespace App\creational\Singleton;


class User
{
    private $nome;
    private $age;

    public function __construct(string $nome, int $age)
    {
        $this->nome = $nome;
        $this->age = $age;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getage()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setage($age): self
    {
        $this->age = $age;

        return $this;
    }
}

class Singleton
{

    private static ?Singleton $instance = null;
    private $users = [];

    public function __construct()
    {
    }

    public static function getInstance(): Singleton
    {

        if (static::$instance == null) {
            static::$instance = new static();
        }

        return static::$instance;
    }
    public function add(User $user)
    {
        array_push($this->users, $user);
    }
   
    public function show()
    {
        foreach ($this->users as $user) {
            echo "<pre>";
            print_r($user);
            echo "</pre>";
        }
    }
}

$db1 = Singleton::getInstance();
$db2 = Singleton::getInstance();

$user = new User("Paulo João", 30);
$user1 = new User("Ayla Cristina", 25);

$db1->add($user);
$db1->add($user1);
// $db1->show();
$user = new User("Paulo 1 João", 30);
$user1 = new User("Ayla 1 Cristina", 25);
$db2->add($user);
$db2->add($user1);
$db2->show();

// var_dump($db1);
