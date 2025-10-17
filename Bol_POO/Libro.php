<?php


class Libro
{
    private $autor;
    private $titulo;
    private $paginas;
    private $refLibro;
    private $prestado;

    public function getAutor()
    {
        return $this->autor;
    }

    public function printAutor()
    {
        echo "El autor es " . $this->autor, '<br>';
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function printTitulo()
    {
        echo "El titulo es" . $this->titulo, "<br>";
    }
    public function getPaginas()
    {
        return $this->paginas;
    }

    public function printLibro()
    {

        echo "Titulo del libro: " . $this->titulo, '<br>';
        echo "Numero de paginas: " . $this->paginas, '<br>';
        echo "Autor: " . $this->autor, '<br>';
    }

    function setRefLibro($refLibro)
    {
        if (strlen($refLibro) > 3) {
            $this->refLibro = $refLibro;
        } else {
            echo '<p> Longitud no válida <p>';
        }
    }

    function setPrestado($prestado) {}

    function getPrestado()
    {
        return $this->prestado;
    }
}
