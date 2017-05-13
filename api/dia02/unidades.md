Números
=======

Sistemas de numeración
----------------------

### Romano

  - Sistema de numeración romano
  - Ejemplo:
    - XXIV = 10+10+(5-1)

### Decimal

  - Sistema de numeración decimal (en base 10)
  - La base es el número de dedos de ambas manos.
  - Es un sistema de numeración posicional. La posición del dígito indica su valor:
    - [...] ; miles x1000 - centenas x100 ; decenas x10 ; unidades x1
  - Los dígitos son: 0, 1, 2, 3, 4, 5, 6, 7, 8 y 9.
  - Ejemplos:
    - 24 = 2*10 + 4
    - 2017 = 2*10^3 + 0*10^2 + 1*10^1 + 7*10^0

### Binario

  - Sistema de numeración binario (en base 2)
  - Usa el **bit** que es un dígito que puede ser 0 o 1
  - Es un sistema de numeración posicional. La posición del dígito indica su valor:
    - [...] ; x256 ; x128 ; x64 ; x32 ; x16 ; x8 ; x4 ; x2 ; x1
  - Ejemplos:
    - 1010 = 1*2^3 + 0*2^2 + 1*2^1 + 0*2^0 = 8 + 2 = 10
    - 0000 = 0
    - 1111 = 15
    - 1010010011 = ...

### Hexadecimal

  - Sistema de numeración hexadecimal (en base 16)
  - Los dígitos son: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, A, B, C, D, E, F
  - 4 bits en binario corresponden a 1 dígito hexadecimal
    - 0000 = 0
    - 0001 = 1
    - ...
    - 1010 = A
    - 1011 = B
    - ...
    - 1111 = F

Unidades de medida
------------------    

### Bit

### Byte

  - 1 byte son 8 bits (son 2 dígitos hexadecimales)    

binario  | hex | descomposición    | decimal
---------|-----|-------------------|----------
10011000 | 98  |  9*16^1 + 8*16^0  | 152
11110100 | F4  | 15*16^1 + 4*16^0  | 244
01011001 | 59  |  5*16^1 + 9*16^0  |  89

### Múltiplos de bytes

  - Kilobyte - 1KB = 1000 bytes
  - Megabyte - 1MB = 1.000.000 bytes
  - Gigabyte - 1GB = 1.000.000.000 bytes
  - Terabyte - 1TB = 1.000.000.000.000 bytes
  - etc.

Juegos de caracteres
------------------

### ASCII

  - 1 byte por carácter
  - 2 dígitos hexadecimales = 8 bits
  - Caracteres diferentes: 2^8 = 256
  - MS-DOS

### ANSI  

  - 1 byte por carácter
  - 2 dígitos hexadecimales = 8 bits
  - Caracteres diferentes: 2^8 = 256
  - Windows

### Unicode (UTF8)

  - 2 bytes por carácter
  - 4 dígitos hexadecimales = 16 bits
  - Número de caracteres: 2^16 = 65536
  - Ejemplo: hex("00e1") = bin("0000000011100001")

Direcciones IP
--------------  

### IP 4

  - 4 bytes en decimales separados por punto: "182.168.1.72"
  - 8 dígitos hexadecimales = 32 bits
  - Direcciones IP distintas: 2^32 = 4.294.967.296

### IP 6

  - 6 bytes = 48 bits
  - Nº de direcciones distintas: 2^48 = 281.474.976.710.656

Colores
-------  

### Color RGB

  - 3 bytes en hexadecimal RRGGBB.
  - Ejemplo: "FF00CC"
  - Colores distintos: 2^24 = 16.777.216
