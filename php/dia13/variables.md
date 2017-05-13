Variables
=========

**Tipos** de una variable:
  - Número    - 3.14
  - Texto     - "Hola"
  - Booleano  - true
  - Array     - array(1,2,3)
  - Objeto    - new Clase()

Una variable **global**
  - Se declara fuera de las funciones y clases.
  - Dentro de una función puedes usar una variable global avisando:
       global $variable;
  - Tiene una *vida larga*, desde que empieza el programa hasta que acabe.
    El programa es la ejecución de la página PHP.
    La página PHP (es un programa) se ejecuta en el servidor.
    Al llegar la página PHP al navegador web la ejecución ya ha acabado.

Una variable **local**
   - Se declaran y usan dentro de una función o método.
   - Tiene un *vida corta*.
   - La variable se crea al llamar a la función y se destruye al acabar de ejecutarse la función. El alcance de la variable es dentro de las llaves de la función.  

Un **atributo** es una variable de un objeto.
   - Se declara dentro de la clase y se puede usar dentro de la clase.
   - Tiene una *vida media*. El atributo está ligado con el objeto.
     Existe mientras exista el objeto.
   - Habitualmente tiene un alcance privado aunque podría ser público.
   - Si el atributo se usa dentro de la clase: $this->atributo
   - Si el atributo se usa fuera de la clase: $objeto->atributo

Un **parametro**
    - Es un dato que pasas dentro de la función.
    - Dentro de la función es igual que una variable local.
         function sumar($a, $b) { ... }
         sumar(5, 7);

Un valor de **retorno**
    - Es el dato de salida de la función
    - Se devuelve con la instrucción return
    - El valor de retorno de una función se puede recoger, o usar o no hacer nada.
        function sumar($a, $b) { return $a + $b; }
        sumar(5, 7);
        echo sumar(5, 7);
        $c = sumar(5, 7);
        if (sumar(5, 7) == 12) echo "doce";
