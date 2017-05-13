class Persona {

  private String nombre;
  private static int cantidad = 0;

  public Persona(String nombre) {
    this.nombre = nombre;
    cantidad++;
  }
  public String getNombre() {
    return nombre;
  }
  public static int getCantidad() {
    return cantidad;
  }

}
