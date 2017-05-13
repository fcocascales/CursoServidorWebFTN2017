Herencia en la POO
==================

Aprovechar todo el código de un clase en una nueva clase.
La clase de la que heredas se llama parent, super, ancestro, base.
Sólo se puede heredar de una clase. Se puede heredar de una clase que a su vez hereda de otra. Las clases se van especializando.

    - Animal          - es Animal
      - Mamifero      - es Mamifero y Animal
         - Rumiante   - es Rumiante, Mamifero y Animal
           - Vaca     - es Vaca, Rumiante, Mamifero y Animal
      - Ave           - es Ave y Animal
        - Avestruz    - es Avestruz, Ave y Animal
      - Pez           - es Pez y Animal

Los métodos private   del padre no se puedan usar.
Los métodos public    del padre sí se pueden usar.
Los métodos protected del padre sí se pueden usar pero
   no desde fuera de la clase.
