<?php

class Empleado
{
    public function calcularSueldo()
    {
        return 0;
    }
}

class EmpleadoFijo extends Empleado
{
    public function calcularSueldo()
    {
        return 50000;
    }
}

class EmpleadoPorHora extends Empleado
{
    public $horas = 40;
    public $valorHora = 30;

    public function calcularSueldo()
    {
        return $this->horas * $this->valorHora;
    }
}

class Vendedor extends Empleado
{
    public $sueldoBase = 30000;
    public $ventas = 200000;
    public $comision = 0.05;

    public function calcularSueldo()
    {
        return $this->sueldoBase + ($this->ventas * $this->comision);
    }
}

$empleados = [
    new EmpleadoFijo(),
    new EmpleadoPorHora(),
    new Vendedor(),
    new EmpleadoFijo(),
];

foreach ($empleados as $empleado) {
    echo $empleado->calcularSueldo() . "\n";
}