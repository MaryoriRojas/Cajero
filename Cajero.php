<?php
// Saldo inicial, se puede modificar el saldo
$saldo = 1000000;

// Función para mostrar el saldo
function mostrarSaldo($saldo) {
    echo "Saldo actual: $$saldo\n";
}

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

// Mensaje de bienvenida
echo "Bienvenido al cajero automático. Ingrese su tarjeta.\n";

// Menú de opciones
while (true) {
    echo "1. Ver saldo\n";
    echo "2. Retirar dinero\n";
    echo "3. Salir\n";
    $opcion = readline("Seleccione una opción: ");

    switch ($opcion) {
        case 1:
            mostrarSaldo($saldo);
            break;
        case 2:
            $monto_a_retirar = intval(readline("Ingrese el monto a retirar (múltiplos de 50000 hasta 400000): "));
            if ($monto_a_retirar % 50000 === 0 && $monto_a_retirar <= 400000) {
                $resultado = retirarDinero($monto_a_retirar);
                if (is_numeric($resultado)) {
                    echo "Retiraste $$monto_a_retirar. Saldo restante: $$resultado\n";
                } else {
                    echo $resultado . "\n";
                }
            } else {
                echo "Monto no válido. Debe ser múltiplo de 50000 y no exceder 400000.\n";
            }
            break;
        case 3:
            echo "Gracias por usar nuestro cajero. ¡Hasta luego!\n";
            exit;
        default:
            echo "Opción no válida. Intente nuevamente.\n";
    }
}
