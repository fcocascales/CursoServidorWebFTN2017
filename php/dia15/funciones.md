Funciones: Parámetros y retorno
===============================

## Paso de parámetros **por valor**

Es lo habitual. Los parámetros son de entrada pero no de salida. Copiar el valor y trabaja con el duplicado.

    function func1($a) { // Parámetro por valor $a
      $a = $a + 10;
      echo $a;
    }
    func1(20); // 30
    $v = 5;
    func1($v); // 15
    echo $v; // 5


## Paso de parámetros **por referencia**    

Hay que poner delante del parámetro un ampersand &.
Se pasa la dirección de la variable. La variable original podría cambiar de valor. Es de entrada y de salida.

    function func1(&$a) { // Parámetro por referencia $a
      $a = $a + 10;
      echo $a;
    }
    //func1(20); // No funciona porque 20 no es una variable
    $v = 5;
    func1($v); // 15
    echo $v; // 15


## Valor **predeterminado** en el parámetro

Si se omite un parámetro al llamar a una función toma su valor predeterminado. El valor predeterminado se indica con un =.
Los parámetros con valores predeterminados van al final.

    function func1($a, $b=10, $c=20) {
      echo $a + $b + $c;
    }
    func1(2, 3, 4); // 9
    func1(5, 6); // 31
    func1(7); // 37


## Paso de parámetros **variable**

Se puede llamar a la función con cualquier número de parámetros. Dentro de la función los parámetros como un array.
Se indica anteponiendo ... delante del parámetro.

    function func1(...$parametros) {
      $total = 0;
      foreach ($parametros as $valor) $total += $valor;
      echo $total;
    }
    func1(); // 0
    func1(1, 2); // 3
    func1(10,11,12,13,14); // 60


## **Retornar** un valor    

La función devuelve el valor indicado en el return. Cuando hay return la función acaba ahí. Al llamar a la función, ésta equivale al valor que retorna. Es la salida de la función.

    function func1($a) {
      return $a * 2;
    }
    func1(3); // Pierdo el valor de retorno
    echo func1(4); // 8
    $v = func1(5);
    echo $v; // 10
    $v = func1(func1(2));
    echo $v; // 8
    if (func1(3) + func1(4) == func1(7)) echo "ok"; // ok


## Retornar **varios valores**

Si la función devuelve un array puede devolver varios valores.

    function func1($a) {
      return array($a, $a+2, $a*2, $a*$a);
    }
    $v = func1(2);
    print_r($v); // 2, 4, 4, 4
    $v = func1(3);
    var_dump($v); // 3, 5, 6, 9
    list($num, $suma, $doble, $cuadrado) = func1(4);
    echo "$num $suma $doble $cuadrado"; // 4 6 8 16
