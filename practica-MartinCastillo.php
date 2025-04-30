<?php

/**
 * LINEA DE COMENTARIO PARA MOSTRAR CAMBIOS EN GIT
 * 
 * 
 * Script de ejemplo para generar documentación con phpDocumentor.
 *
 * Este archivo contiene funciones matemáticas básicas con sus respectivas anotaciones de documentación.
 *
 * @author Martín Castillo
 * @version 1.0
 */

/**
 * Calcula el cuadrado de un número.
 *
 * Esta función recibe un número entero y devuelve su cuadrado.
 *
 * @param int $numero El número al que se le calculará el cuadrado.
 * @return int El cuadrado del número.
 *
 * {@internal "Esta función está pensada para ser usada como base de otras operaciones."}
 */
function cuadrado(int $numero): int
{
    return $numero * $numero;
}

/**
 * Devuelve el máximo de dos números.
 *
 * Compara dos enteros y devuelve el mayor.
 *
 * @param int $a Primer número a comparar.
 * @param int $b Segundo número a comparar.
 * @return int El número mayor entre $a y $b.
 *
 * {@internal "Este método puede mejorarse con validaciones en futuras versiones."}
 */
function maximo(int $a, int $b): int
{
    return ($a > $b) ? $a : $b;
}
