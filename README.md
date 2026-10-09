# Laboratorio – Programación Orientada a Objetos en PHP

## Universidad Tecnológica de Panamá

**Facultad:** Ingeniería de Sistemas Computacionales  
**Asignatura:** Desarrollo Web  
**Estudiante:** Adriana Mendoza  
**Docente:** Ing. Irina Fong  
**Fecha:** Octubre de 2026

---

## 1. Descripción del laboratorio

En este laboratorio se desarrollaron diferentes ejercicios utilizando Programación Orientada a Objetos (POO) en PHP.

El objetivo fue comprender cómo funcionan las clases, los objetos, los métodos, la herencia y los modificadores de acceso. También se realizaron pruebas con métodos estáticos, clases finales y operaciones matemáticas mediante objetos.

## 2. Objetivos

- Crear clases y objetos utilizando PHP.
- Aplicar herencia entre clases.
- Utilizar constructores, atributos y métodos.
- Comprender las diferencias entre `self::` y `static::`.
- Implementar métodos para consultar y modificar atributos.
- Identificar el funcionamiento de las clases `final`.
- Realizar cálculos matemáticos mediante objetos.

## 3. Tecnologías utilizadas

| Tecnología | Función |
|---|---|
| PHP | Desarrollo de las clases y métodos |
| HTML | Visualización de resultados |
| CSS | Estilos básicos |
| WampServer | Servidor local |
| Apache | Ejecución de los archivos PHP |
| Visual Studio Code | Edición del código |

Las versiones exactas de PHP, Apache y WampServer deben verificarse en el equipo utilizado.

## 4. Estructura del proyecto

<img width="831" height="212" alt="image" src="https://github.com/user-attachments/assets/0133531b-ac10-4e7a-9391-f7ccc2f5b0af" />


## 5. Proceso de instalación y ejecución

1. Se inició WampServer para activar el servidor local.
2. Se creó una carpeta para almacenar los ejercicios.
3. Se desarrollaron los archivos PHP utilizando Visual Studio Code.
4. Se guardaron los archivos dentro del directorio `www` de WampServer.
5. Se accedió a cada archivo mediante localhost.
6. Se observaron los resultados generados por las clases y métodos.

## 6. Desarrollo de los ejercicios

### 6.1. Archivo `circulo.php`

Se creó una clase llamada `Circulo` que recibe el radio mediante un constructor.

La clase contiene dos métodos: `calcularArea()` y `calcularPerimetro()`.

Se utilizó la constante `M_PI` para realizar los cálculos y `number_format()` para mostrar los resultados con dos decimales.

Para la prueba se utilizó un radio de 4.

**Resultados esperados:**

- Área: 50.27
- Perímetro: 25.13

**Figura 1. Resultado del cálculo del área y perímetro.**

<img width="538" height="70" alt="image" src="https://github.com/user-attachments/assets/796e8184-9ef8-45fe-bc9a-9fa0b592f8b5" />

### 6.2. Archivo `classA.php`

Se desarrollaron dos clases llamadas `A` y `B`, donde la clase `B` hereda de `A`.

El ejercicio permite observar la diferencia entre `self::` y `static::` al llamar métodos estáticos.

`self::` utiliza la clase donde se define el método, mientras que `static::` permite utilizar el enlace estático tardío.

Al ejecutar `B::otraFuncion()`, el resultado es:

```text
A
B
```

**Figura 2. Ejecución de métodos estáticos.**

<img width="567" height="165" alt="image" src="https://github.com/user-attachments/assets/3903aae8-7eb4-467a-a909-f6f4d4826a5d" />


### 6.3. Archivo `co.php`

Se desarrolló una clase `Coche` que contiene el método `getColor()`.

La clase fue declarada utilizando la palabra reservada `final`, lo que impide que otras clases hereden de ella.

Posteriormente, se intentó crear una clase `CocheDeLujo` que heredara de `Coche`.

Esta operación produce un error fatal porque PHP no permite extender una clase declarada como `final`.

**Figura 3. Error al intentar heredar de una clase final.**

<img width="1272" height="217" alt="image" src="https://github.com/user-attachments/assets/19c69bc5-313f-4b51-8c2b-d69296944da4" />

### 6.4. Archivo `coche.php`

Se creó una clase principal llamada `Coche` con atributos y métodos para establecer y consultar el color del vehículo.

Posteriormente, se desarrolló la clase `CocheDeLujo`, que hereda de `Coche` e incorpora características adicionales.

Se utilizaron los métodos `setColor()`, `getColor()`, `setExtras()` y `getExtras()`.

También se redefinió el método `printCaracteristicas()` para mostrar la información del vehículo.

**Resultado:**

```text
Color: negro
Extras: TV
```

**Figura 4. Características del coche de lujo.**

<img width="256" height="142" alt="image" src="https://github.com/user-attachments/assets/69a0d978-536b-4a5b-87fb-717efe4b0426" />


### 6.5. Archivo `docente.php`

Se desarrolló una clase principal llamada `Persona`, que contiene los atributos nombre, apellido y fecha de nacimiento.

A partir de esta clase se crearon dos clases derivadas:

**Estudiante:** contiene información como código, índice académico, cohorte, estado académico y modalidad de estudio.

**Docente:** contiene código de docente, departamento, categoría, título académico y tipo de contratación.

Se utilizó `parent::__construct()` para inicializar los atributos heredados de la clase principal.

También se implementó el método `mostrarDatos()` para visualizar la información de cada objeto.

**Figura 5. Datos del estudiante y docente.**

<img width="545" height="677" alt="image" src="https://github.com/user-attachments/assets/090388d1-a909-4720-8906-f74a6e829209" />

## 7. Controles, métodos y elementos utilizados

| Elemento | Función |
|---|---|
| `class` | Define una clase |
| `new` | Crea un objeto |
| `__construct()` | Inicializa atributos |
| `extends` | Permite heredar de otra clase |
| `public` | Permite acceder a métodos o atributos públicamente |
| `protected` | Permite el acceso desde la clase y sus clases derivadas |
| `final` | Impide la herencia de una clase |
| `self::` | Hace referencia a la clase donde se define el método |
| `static::` | Utiliza enlace estático tardío |
| `parent::` | Permite acceder a métodos de la clase padre |
| `$this` | Hace referencia al objeto actual |

## 8. Evidencias de operaciones

### 8.1. Creación de objetos

Se crearon objetos a partir de las clases desarrolladas, como `Circulo`, `CocheDeLujo`, `Estudiante` y `Docente`.

Estas operaciones permitieron comprobar el funcionamiento de los constructores y métodos.

### 8.2. Modificación de atributos

En el ejercicio `coche.php` se utilizaron los métodos `setColor()` y `setExtras()` para asignar valores a los atributos del objeto.

Esto permitió trabajar con la modificación de propiedades mediante métodos.

### 8.3. Eliminación de registros

Los ejercicios desarrollados no incluyen operaciones para eliminar registros de una base de datos. Su propósito fue practicar los fundamentos de la Programación Orientada a Objetos.

## 9. Resultados obtenidos

Durante el laboratorio se logró comprender cómo crear clases y objetos en PHP, aplicar herencia y utilizar métodos para trabajar con atributos.

También se observó el funcionamiento de las clases finales, los métodos estáticos y la reutilización de código mediante clases derivadas.

## 10. Conclusión

Este laboratorio permitió comprender de forma práctica los principales conceptos de la Programación Orientada a Objetos en PHP.

Mediante los ejercicios se aprendió a crear clases, utilizar objetos, implementar herencia y trabajar
