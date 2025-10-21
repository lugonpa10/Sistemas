<?php





class Libro
{

    private $autor;
    private $titulo;
    private $paginas;
    private $refLibro;
    private $prestado;
    private $contieneCD;
    private static $referencia=1;
    public static $numLibros = 0;



    public function __construct($autor, $titulo, $paginas, $refLibro, $prestado)
    {
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->paginas = $paginas;
        $this->refLibro = self::$referencia++;
        $this->prestado = $prestado;
        $this->contieneCD = FALSE;
        self::$numLibros++;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getPaginas()
    {
        return $this->paginas;
    }

    function setRefLibro($refLibro)
    {
        if (strlen($refLibro) > 3) {
            $this->refLibro = $refLibro;
        } else {
            echo '<p> Longitud no válida <p>';
        }
    }


    public function setPrestado()
    {
        $this->prestado++;
    }

    public function setContieneCD()
    {
        $this->contieneCD = TRUE;
    }

    public function printTitulo()
    {
        echo 'El título del libro', $this->titulo, '<br>';
    }

    public function printAutor()
    {
        echo 'El autor del libro es ', $this->autor, '<br>';
    }

    public function printLibro()
    {
        echo 'Autor:  ', $this->autor, '<br><br> ';
        echo ' Titulo: ', $this->titulo, '<br><br> ';
        echo ' Paginas: ', $this->paginas, '<br><br> ';
        if (strlen($this->refLibro) > 0) {
            echo 'La referencia del libro es ', $this->refLibro, '<br>';
        }
        echo 'El libro fue prestado ', $this->prestado, ' veces <br><br>';

        if ($this->contieneCD) {
            echo 'El libro contiene CD';
        }
    }
}



$libro1 = new Libro('Cervantes ', 'Don quijote de la Mancha', 1512, '', 0);

print $libro1->getAutor();
print $libro1->getTitulo();
print $libro1->getPaginas();

echo '<br>';
$libro1->setRefLibro(56343);
$libro1->setPrestado();
$libro1->printLibro();


$libro2 = new Libro('Antonio Machado', 'Campos de Castilla', 312, '', 33);
$libro2->printLibro();


print 'El número de libros que hay es ' . Libro::$numLibros;


?>
