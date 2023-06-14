<?php 

class Texto
{
    public $text;

    /**
     * Permite inicializar el objeto con un texto en especifico, en caso de que no se defina con el constructor es posible llamar 
     * al metodo setText.
     *
     * @param [string] $text
     */
    public function __construct( $text = null )
    {
        $this->setText($text);
    }

    /**
     * define el texto con el cual va a trabajar la clase
     *
     * @param [string] $text
     * 
     * @return 
     * true si es posible asignar el texto, false en caso contrario
     */
    public function setText( $text )
    {
        if( is_string($text) )
        {
            $this->text = $text;
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Cuenta las veces que se repite el caracter pasado como el primer argumento en el texto indicado como segundo argumento. El
     * caracter puede ser UTF-8. 
     *
     * @param [string] $char
     * 
     * @return 
     * Retorna un valor entero que representa el numero de veces 
     */
    public function countChar( $char )
    {
        $tamano_del_texto = strlen($this->text);
        $contador = 0;

        for($i = 0; $i < $tamano_del_texto; $i++)
        {
            if( $char == $this->text[$i])
                $contador++;
        }

        return $contador;
    }

    /**
     * Cuenta el numero de palabras que hay en el texto.
     *
     * @return void
     */
    public static function countWords( )
    {
        // mapOfWords es un diccionario (clave => valor) en donde se almacenara cada palabra con su  respectivo  conteo de  veces
        // que se repite en el texto.
        $mapOfWords = array();
    }
}


$text = new Text();
$text->text = "etsa es una prueba";

echo $text->countChar('n');