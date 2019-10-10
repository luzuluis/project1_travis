<?php

class calculadora{

public function operacion($num1,$num2,$opcion){

switch($opcion){
    case 'suma':
	$resultado = $this->sumar($num1,$num2);
        return $resultado;
	break;
    case 'resta':
	$resultado = $this->restar($num1,$num2);
	return $resultado;
	break;
    case 'multiplica':
	$resultado = $this->multiplicar($num1,$num2);
	return $resultado;
	break;
    case 'divide':
	$resultado = $this->dividir($num1,$num2);
	return $resultado;
	break;
     default:
        break;
}
}

public function sumar($num1,$num2){
   
        return $num1 + $num2;
    }

public function multiplicar($num1, $num2)
    {

        return $num1 * $num2;
    }

    public function dividir($num1, $num2)
    {
     
	return $num1 / $num2;
    }

  public function restar($num1, $num2)
    {
 
	return $num1 - $num2;
    }
}
?>
