<?php
  function sequenciaFibonacci($numero)
  {
      $primeiro = 0;
      $segundo = 1;

      
      if ($numero == $primeiro || $numero == $segundo) {
          return true;
      }

      
      while ($segundo <= $numero) {
          if ($segundo == $numero) {
              return true;
          }

          $terceiro = $primeiro + $segundo;
          $primeiro = $segundo;
          $segundo = $terceiro;
      }

      return false;
  }


  $numero = 21;
  if (sequenciaFibonacci($numero)) {
      echo "O número $numero está na sequência de Fibonacci.";
  } else {
      echo "O número $numero não está na sequência de Fibonacci.";
  }

