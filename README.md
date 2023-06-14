# PHP_Class_Text
Es una clase escrita en PHP para realizar operaciones comunes con el procesamiento de textos largos.

### Inicializacion
Para hacer uso de la clase simplemente crea una instancia de ella, y asignala a una variable para posteriormente realizar las llamadas a los metodos.
```PHP
$text = new Text();
```
Para indicar el texto con el cual se va a estar trabajando se puede hacer de varias formas, una es en el constructor cuando se crea la instancia.
```PHP
$text = new Text("este es mi parrafo de prueba");
```
La otra opcion es acceder al atributo $text de la clase de manera directa.
```PHP
$text = new Text();
$text->text = "este es mi parrafo de prueba";
```
Aunque la opcion mas recomendable es usar el metodo setText() ya que este valida el texto antes de asignarlo.

```PHP
$text = new Text();
$text->setText("este es mi parrafo de prueba");
```
# Metodos

### setText
Define el texto con el cual va a trabajar la clase.
```PHP
$text = new Text();
$text->setText("este es mi parrafo de prueba");
```
