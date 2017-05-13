La clase Bucle
==============

Imprimir una cuenta de números.

    $bucle1 = new Bucle();
    $bucle1->setInferior(1);
    $bucle1->setSuperior(10);
    $bucle1->setIncremento(2);
    $bucle1->imprimir(); // 1, 3, 5, 7, 9

    $bucle2 = new Bucle();
    $bucle2->setInferior(100);
    $bucle2->setSuperior(104);
    $bucle2->setIncremento(1);
    $bucle2->imprimir(); // 100, 101, 102, 103, 104

Pasos a seguir:

  - Crea la clase Bucle
  - Añade tres atributos:
      inferior, superior, incremento
  - Añade un constructor sin parámetros (opcional)
  - Añade cuatro métodos:
      setInferior, setSuperior, setIncremento, imprimir
  - El código de los métodos set toma el valor del parámetro y lo almacena en el atributo correspondiente.
  - El código de imprimir teniendo en cuenta los atributos deber hacer un bucle for o while.
