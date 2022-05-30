<?php
/**
  *  @author FJose
  *  @version 1.0
*/

  /**
    * Función resta de dos números
    * @param int $num1
    * @param int $num2
    * @return float
  */

  function resta ($num1, $num2) {
      $resultadoresta = $num1 - $num2;
      return $resultadoresta;

  }

$resta = resta (24,42);
echo $resta;

$resta2 = resta (300,42);
echo $resta2;

?>