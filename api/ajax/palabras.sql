CREATE TABLE palabras (
  id INT AUTO_INCREMENT,
  nivel VARCHAR(32),
  tema VARCHAR(32),
  palabra VARCHAR(32),
  PRIMARY KEY (id),
  UNIQUE KEY (nivel, tema, palabra)
);

INSERT INTO palabras(nivel, tema, palabra) VALUES
 ('alfa', 'cocina', 'tenedor'),
 ('alfa', 'cocina', 'cuchara'),
 ('alfa', 'cocina', 'cazo'),
 ('alfa', 'calle', 'farola'),
 ('alfa', 'calle', 'semáforo'),
 ('alfa', 'calle', 'acera'),
 ('alfa', 'gimnasio', 'piscina'),
 ('alfa', 'gimnasio', 'mancuerna'),
 ('alfa', 'gimnasio', 'bicicleta'),
 ('beta', 'vacaciones', 'mar'),
 ('beta', 'vacaciones', 'montaña'),
 ('beta', 'vacaciones', 'viaje'),
 ('beta', 'fiesta', 'cumpleaños'),
 ('beta', 'fiesta', 'regalo'),
 ('beta', 'fiesta', 'alegría'),
 ('beta', 'coche', 'rueda'),
 ('beta', 'coche', 'carretera'),
 ('beta', 'coche', 'volante'),
 ('gamma', 'cine', 'película'),
 ('gamma', 'cine', 'entrada'),
 ('gamma', 'cine', 'palomitas'),
 ('gamma', 'teatro', 'actor'),
 ('gamma', 'teatro', 'camerino'),
 ('gamma', 'teatro', 'ensayo'),
 ('gamma', 'compra', 'comercio'),
 ('gamma', 'compra', 'carrito'),
 ('gamma', 'compra', 'cesta'),
 ('gamma', 'casa', 'comedor'),
 ('gamma', 'casa', 'dormitorio'),
 ('gamma', 'casa', 'baño'),
 ('gamma', 'jardín', 'flor'),
 ('gamma', 'jardín', 'maceta'),
 ('gamma', 'jardín', 'fuente');