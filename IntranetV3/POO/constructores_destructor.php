<?php
    //Definimos una clase con su respectivo nombre
    class Usuario{
        //Crear propiedades = (Atributos o Variables)
        public $nombre;
        public $email;

        //El constructor es un tipo de Metodo Magico que permite que no es necesario ser instanciado
        //El Destructor se utiliza para cerrar conexiones a base de datos, limpiar o cerrar.
        //Crear Métodos = (Funciones)
        public function __construct($nombre, $email){
            $this->nombre = $nombre;
            $this->email = $email;
        }
        public function __destruct(){
            echo "Corriendo destructor<br>";
        }
        
        public function presentacion(){
            //Hace referencia a que podamos acceder a nuestras propiedades 
            return $this->nombre." Hola a todos";    
        }
    }
    //Instanciar la clase de Usuario para poder acceder a nuestras propiedades. 
    $usuario1 = new Usuario("Ernesto", "correo@correo.com");
    echo $usuario1->nombre." y su email es: ".$usuario1->email;
    echo"<br>";
    $usuario1 = new Usuario("Ejemplo", "Ejemplo@Ejemplo.com");
    echo $usuario1->nombre." y su email es: ".$usuario1->email;
    echo"<br>";