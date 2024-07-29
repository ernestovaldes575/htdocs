<?php
    //?Definimos una clase con su respectivo nombre
    class Usuario{
        //Crear propiedades = (Atributos o Variables)
        public $nombre;
        public $email;

        //Crear Métodos = (Funciones)
        public function presentacion(){
            //Hace referencia a que podamos acceder a nuestras propiedades 
            return $this->nombre." Hola a todos";    
        }
    }
    //Instanciar la clase para poder acceder a nuestras propiedades. 
    // $usuario1 = new Usuario;
    //Acceder a Propiedades
    // echo $usuario1->nombre = "Ejemplo de nombre";
    // echo "<br>";
    //Aceder a Metodos.
    // echo $usuario1->presentacion();
    
    // $usuario2 = new Usuario;
    //Acceder a Propiedades
    // echo $usuario1->nombre = "Ernesto";
    // echo "<br>";
    //Aceder a Metodos.
    // echo $usuario1->presentacion();