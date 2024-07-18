<?php
// Saldo inicial
$saldo = 1000000;

// Función para retirar dinero
function retirarDinero($monto) {
    global $saldo;
    if ($monto <= $saldo) {
        $saldo -= $monto;
        return $saldo;
    } else {
        return "Saldo insuficiente";
    }
}

// Obtener el monto a retirar 
$monto_a_retirar = 350000;

// Llamar a la función y mostrar el resultado
$resultado = retirarDinero($monto_a_retirar);
if (is_numeric($resultado)) {
    echo "Retiraste $$monto_a_retirar. Saldo restante: $$resultado";
} else {
    echo $resultado;
}
