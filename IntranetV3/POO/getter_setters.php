<?php
    //Definimos una clase con su respectivo nombre
    class Usuario{
        //Crear propiedades = (Atributos o Variables)
        private $nombre;
        private $email;
        
        public function __construct($nombre, $email){
            $this->nombre = $nombre;
            $this->email = $email;
        }
        //Metodos Personalizados getters y setters
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function __destruct(){
            // echo "Corriendo destructor<br>";
        }
    }
    //Instanciar la clase de Usuario para poder acceder a nuestras propiedades. 
    $usuario1 = new Usuario("Ernesto", "correo@correo.com");
    //Con getters y setter personalizados 
    echo $usuario1->getNombre();
    echo"<br>";
    echo $usuario1->setNombre("Juan");
    echo $usuario1->getNombre();