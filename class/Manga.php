<?php

class Manga{
    //atributos
    protected $id;
    protected $nombre;
    protected $autor;
    protected $volumen;
    protected $precio;
    protected $portada;
    protected $sinopsis;

    //metodos

    //para traer el catalogo desde el json
    public function catalogo(){  //catalogo Completo
        $catalogo;
        $jsonProductos = file_get_contents("componente/productos.json");
        $json_datos = json_decode($jsonProductos, true);

        foreach($json_datos as $comicArray){
            $manga = new Manga();

            $manga-> id = $comicArray["id"];
            $manga-> nombre = $comicArray["nombre"];
            $manga-> autor = $comicArray["autor"];
            $manga-> volumen = $comicArray["volumen"];
            $manga-> precio = $comicArray["precio"];
            $manga-> portada = $comicArray["portada"];
            $manga-> sinopsis = $comicArray["sinopsis"];

            $catalogo [] = $manga; //hago el push
        }

        return $catalogo;
    }

    public function getId()
        {
                return $this->id;
        }

    public function getNombre()
        {
                return $this->nombre;
        }

    public function getVolumen()
        {
                return $this->volumen;
        }

    public function getPrecio()
        {
                return $this->precio;
        }

    public function getAutor()
        {
                return $this->autor;
        }

    public function getPortada()
        {
                return $this->portada;
        }    

    public function getSinopsis()
        {
                return $this->sinopsis;
        }    
}