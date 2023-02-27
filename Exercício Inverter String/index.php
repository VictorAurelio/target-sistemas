<?php

  $string = "Exemplo de string para exercicio da target sistemas";

  // Invertendo os caracteres
  $tamanho = strlen($string);
  $string_invertida = "";
  for ($i = $tamanho - 1; $i >= 0; $i--) {
      $string_invertida .= $string[$i];
  }

  echo $string_invertida;
