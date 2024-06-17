<?php
include('Conexion.php');

class ModelCRUDParque
{
    public function insertParque($name, $date, $inputValue, $address, $tourTaken, $kmTraveled)
    {
        $query = "INSERT INTO tbl_parque(NOMBRE_PARQUE, FECHA_VISITA, VALOR_ENTRADA, DIRECCION_PARQUE, RECORRIDO_REALIZADO, KILOMETROS_RECORRIDO) 
       VALUES ('$name','$date','$inputValue','$address','$tourTaken','$kmTraveled')";
        $stringConnection = Conexion::conectar();
        if (mysqli_query($stringConnection, $query)) {
            $filas = mysqli_affected_rows($stringConnection);
            if ($filas == 1) {
                echo "Registro Exitoso";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($stringConnection);
            }
        } else {
            echo "Error en la conexión: " . mysqli_connect_error();
        }
    }

    public function searchPC($name)
    {
        $query = "SELECT * FROM tbl_parque WHERE NOMBRE_PARQUE LIKE '%$name%'";
        $stringConnection = Conexion::conectar();
        $result = mysqli_query($stringConnection, $query);

        $parques = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $parques[] = $row;
            }
        }

        return $parques;
    }
}
?>

