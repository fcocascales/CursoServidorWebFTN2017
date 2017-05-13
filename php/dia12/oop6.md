Una clase tiene 3 partes:

  - Los *atributos* que son privados para que no se puedan manipular desde fuera.
  - El *constructor* inicializa el objeto cuando se crea con el operador new. Se le da un valor inicial a los atributos.
  - Los *métodos* que pueden ser públicos o privados. Los métodos públicos indican las operaciones que están permitidas realizar sobre el objeto.

Para crear un **objeto** de una clase se utiliza el operador new. Al utilizar el operador **new** se llama al *constructor* de la clase. Si el constructor de la clase tiene parámetros pues hay que proporcionar dichos parámetros.  Si no se declara ningún constructor en la clase se crea uno automáticamente sin parámetros.  

Dentro de la clase para hacer referencia al objeto se utiliza $this. Es obligatorio usar $this cada vez que se utiliza un atributo dentro de la clase.
