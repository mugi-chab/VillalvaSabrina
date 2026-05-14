<?php

/**
* Script para la tarea de phpdoc
*
* Este script contiene funciones matematicas
* documentadas mediante DocBlocks
*
* @package TareaEmpresa
* @author Sabrina Villalva
* @version 1.0
*/

/**
* Suma dos numeros enteros
*
* Esta funcion recibe dos numeros y devuelve el resultado de la suma
*
* @param int $a Primer numero.
* @param int $b Segundo numero.
* @return int Resultado de la suma.
*/
function sumar($a, $b)
{
return $a + $b;
}

/**
* Calcula el area de un cuadrado.
*
* Multiplica lado por lado
*
* @param float $lado dLado del cuadrado.
* @return float Area calculada.
* @internal Metodo para pruebas internas.
*/
function calcularArea($lado)
{
return $lado * $lado;
}
?>
