<?php

require_once $_CONFIG['FILES']['CLASSES'].'/Perro.php';

/*
|---------------------------------------------------
| Clase PerroModel
|---------------------------------------------------
|
| Gestiona la información de un perro con la base de datos
|
*/

class PerroModel
{
    private $server;
    private $user;
    private $password;
    private $database;

    function __construct($server, $database, $user, $password)
    {
        $this->setServer($server);
        $this->setDatabase($database);
        $this->setUser($user);
        $this->setPassword($password);
    }

    public function getServer()
    {
        return $this->server;
    }

    public function setServer($server)
    {
        $this->server = $server;
        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getDatabase()
    {
        return $this->database;
    }

    public function setDatabase($database)
    {
        $this->database = $database;
        return $this;

    }

    public function insert($perro)
    {
        $connection=new mysqli($this->getServer(),$this->getUser(),$this->getPassword(),$this->getDatabase());
        
        if ($connection->connect_errno) {
            die('Fallo al conectar al MYSQL: '. $connection->connect_error);
        }

        $query= 'INSERT INTO Perro (nombre,edad,raza)'
            .' VALUES ("'.addslashes($perro->getNombre()).'","'.addslashes($perro->getEdad()).'","'.addslashes($perro->getRaza())
            .'")';

        if (!$result=$connection->query($query)) {
            die ("query fallida: ". $connection->error);
        }

        $connection->close();
    }

    public function delete($perro)
    {
        $connection=new mysqli($this->getServer(),$this->getUser(),$this->getPassword(),$this->getDatabase());
        
        if ($connection->connect_errno) {
            die('Fallo al conectar al MYSQL: '. $connection->connect_error);
        }

        $query= 'DELETE FROM Perro WHERE id="' . $perro->getId() .'"';

        if (!$result=$connection->query($query)) {
            die ("query fallida: ". $connection->error);
        }

        $connection->close();
    }

    public function update($perro)
    {
        $connection=new mysqli($this->getServer(),$this->getUser(),$this->getPassword(),$this->getDatabase());
        
        if ($connection->connect_errno) {
            die('Fallo al conectar al MYSQL: '. $connection->connect_error);
        }

        $query= 'UPDATE Perro SET nombre ="'. addslashes($perro->getNombre())
            .'", edad = "'.addslashes($edad->getEdad())
            .'", raza = "'.addslashes($raza->getRaza())
            .'" WHERE id= '. $contact->getId();

        if (!$result=$connection->query($query)) {
            die ("query fallida: ". $connection->error);
        }

        $connection->close();
    }

    public function getAll()
    {
        $connection=new mysqli($this->getServer(),$this->getUser(),$this->getPassword(),$this->getDatabase());
        
        if ($connection->connect_errno) {
            die('Fallo al conectar al MYSQL: '. $connection->connect_error);
        }

        $query= 'SELECT * FROM Perro';

        if ($result=$connection->query($query)) {
            while ($data=$result->fetch_array(MYSQLI_ASSOC))
            {
                $perro = new Perro( $data['id'], $data['nombre'], $data['edad']
                    , $data['raza']);

                $arrayPerros[] = $perro;
                unset ($perro);
            }
        }
        else {
            die("query fallida: ". $connection->error);
        }

        $connection->close();

        return (isset($arrayPerros) ? $arrayPerros : null);
    }

    public function find($perro)
    {
        $connection=new mysqli($this->getServer(),$this->getUser(),$this->getPassword(),$this->getDatabase());
        
        if ($connection->connect_errno) {
            die('Fallo al conectar al MYSQL: '. $connection->connect_error);
        }

        $query= 'SELECT * FROM Perro WHERE id='. $perro->getId();

        if ($result=$connection->query($query)) {
            while ($data=$result->fetch_array(MYSQLI_ASSOC))
            {

                $perroResult = new Perro($data['id'], $data['nombre'], $data['edad']
                , $data['raza']);
            }
        }
        else {
            die("query fallida: ". $connection->error);
        } 

        $connection->close();

        return (isset($perroResult) ? $perroResult : null);
    }

}
