<?php 

// Para cambiar el formato del precio de centimos a euros.

function formatearPrecio(int $centimos): string 
{
    $euros = $centimos / 100;

    return number_format($euros, 2, ",", ".") . "€";
}


// Funcion para cambiar el estado de la disponibilidad segun el stock

function obtenerEstado (int $ejemplares): string 
{
    if ($ejemplares === 0){
        return "No disponible";
    }
    if ($ejemplares <= 5){
        return "Pocas unidades";
    }
    if ($ejemplares >= 6){
        return "Disponible";
    }
}



/* funcion asociado a un nombre en css para que aplique un color diferente dependiendo,
 del stock que tenga en ese momento el producto. */


function obtenerClaseEstado(int $ejemplares): string 
{
    if ($ejemplares === 0){
        return "agotado";
    }
    if ($ejemplares <= 5){
        return "pocas";
    }
    return "disponible";
}


function escapar(string $texto): string {

    return htmlspecialchars($texto, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");


}

// Funcion para buscar libro por id

function buscarLibroPorId(array $libros, int $id): array
{
    foreach ($libros as $libro){
        if ($libro["id"] === $id){
            return $libro;
        }
    }
    return null;
}



?>