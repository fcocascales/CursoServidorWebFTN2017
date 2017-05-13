//-----------------------------------

function Persona(nombre) { // Constructor ok

  Persona.cantidad = Persona.cantidad++ || 1; // Static

  this.Nombre = nombre; // Público
  var _nombre = nombre; // Privado ok

  this.get_nombre = function() { // Privileged ok
    return _nombre;
  }

  var _func = function() { // Private ok
  }
}

Persona.prototype.getNombre() { // Public
  return this.Nombre;
}

Persona.getCantidad = function() { // Static
  return Persona.cantidad;
}

//---------------------------

var p1 = new Persona("Albert");
var p2 = new Persona("Bea");
var p3 = new Persona("Carlos");

document.write(Persona.getCantidad());

document.write(p1.getNombre());
document.write(p2.getNombre());
document.write(p3.getNombre());

document.write(Persona.getCantidad());


//-----------------------------------
// self-invocation-function or auto-invocation

(function() {

  // Local variables

})();

//-----------------------------------
// https://webreflection.blogspot.com.es/2008/04/natural-javascript-private-methods.html

// our constructor
function Person(name, age){
    this.name = name;
    this.age  = age;
};

// prototype assignment
Person.prototype = (function(){

    // we have a scope for private stuff
    // created once and not for every instance
    function toString(){
        return this.name + " is " + this.age;
    };

    // create the prototype and return them
    return {

        // never forget the constructor ...
        constructor:Person,

        // "magic" toString method
        toString:function(){

            // call private toString method
            return toString.call(this);
        }
    };
})();

// example
alert(
    new Person("Andrea", 29)
);   // Andrea is 29
