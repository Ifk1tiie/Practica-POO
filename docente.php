<?php

// =======================
// CLASE PADRE: PERSONA
// =======================

class Persona {

    protected string $nombre;
    protected string $apellido;
    protected string $fechaNacimiento;

    public function __construct(
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }
}


// =======================
// CLASE ESTUDIANTE
// =======================

class Estudiante extends Persona {

    protected string $codigoEstudiante;
    protected float $indiceAcademico;
    protected int $cohorte;
    protected int $estadoAcademico;
    protected int $modalidadEstudio;

    public function __construct(
        string $nombre,
        string $apellido,
        string $fechaNacimiento,
        string $codigoEstudiante,
        float $indiceAcademico,
        int $cohorte,
        int $estadoAcademico,
        int $modalidadEstudio
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);

        $this->codigoEstudiante = $codigoEstudiante;
        $this->indiceAcademico = $indiceAcademico;
        $this->cohorte = $cohorte;
        $this->estadoAcademico = $estadoAcademico;
        $this->modalidadEstudio = $modalidadEstudio;
    }

    public function mostrarDatos() {

        echo "<h2>Datos del Estudiante</h2>";

        echo "Nombre: " . $this->getNombre() . "<br>";
        echo "Apellido: " . $this->getApellido() . "<br>";
        echo "Fecha de nacimiento: " . $this->getFechaNacimiento() . "<br>";
        echo "Código de estudiante: " . $this->codigoEstudiante . "<br>";
        echo "Índice académico: " . $this->indiceAcademico . "<br>";
        echo "Cohorte: " . $this->cohorte . "<br>";
        echo "Estado académico: " . $this->estadoAcademico . "<br>";
        echo "Modalidad de estudio: " . $this->modalidadEstudio . "<br>";
    }
}


// =======================
// CLASE DOCENTE
// =======================

class Docente extends Persona {

    protected string $codigoDocente;
    protected string $departamento;
    protected string $categoria;
    protected string $tituloAcademico;
    protected string $tipoContratacion;

    public function __construct(
        string $nombre,
        string $apellido,
        string $fechaNacimiento,
        string $codigoDocente,
        string $departamento,
        string $categoria,
        string $tituloAcademico,
        string $tipoContratacion
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);

        $this->codigoDocente = $codigoDocente;
        $this->departamento = $departamento;
        $this->categoria = $categoria;
        $this->tituloAcademico = $tituloAcademico;
        $this->tipoContratacion = $tipoContratacion;
    }

    public function mostrarDatos() {

        echo "<h2>Datos del Docente</h2>";

        echo "Nombre: " . $this->getNombre() . "<br>";
        echo "Apellido: " . $this->getApellido() . "<br>";
        echo "Fecha de nacimiento: " . $this->getFechaNacimiento() . "<br>";
        echo "Código de docente: " . $this->codigoDocente . "<br>";
        echo "Departamento: " . $this->departamento . "<br>";
        echo "Categoría: " . $this->categoria . "<br>";
        echo "Título académico: " . $this->tituloAcademico . "<br>";
        echo "Tipo de contratación: " . $this->tipoContratacion . "<br>";
    }
}


// =======================
// CREAR ESTUDIANTE
// =======================

$estudiante = new Estudiante(
    "Ana",
    "Mendoza",
    "2006-11-20",
    "8-988-123",
    2.50,
    2026,
    1,
    1
);


// =======================
// CREAR DOCENTE
// =======================

$docente = new Docente(
    "Carlos",
    "González",
    "1985-05-15",
    "DOC-001",
    "Computación",
    "Titular",
    "Magíster",
    "Tiempo Completo"
);


// =======================
// MOSTRAR RESULTADOS
// =======================

$estudiante->mostrarDatos();

echo "<hr>";

$docente->mostrarDatos();

?>