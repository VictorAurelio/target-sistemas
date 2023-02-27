<?php
  //carrega o arquivo json
  $json = file_get_contents('./dados.json');
  $data = json_decode($json, true);

  //variáveis para armazenar o menor e o maior valor de faturamento e a soma dos valores
  $min = PHP_FLOAT_MAX;
  $max = PHP_FLOAT_MIN;
  $soma = 0;

  //variáveis para contar o número de dias com faturamento superior a média e o total de dias
  $contagem = 0;
  $totalDias = 0;

  foreach ($data as $item) {
      //verifica se o valor do faturamento é maior que 0
      if ($item['valor'] > 0) {
          $soma += $item['valor'];

          //atualiza o menor e o maior valor de faturamento
          if ($item['valor'] < $min) {
              $min = $item['valor'];
          }
          if ($item['valor'] > $max) {
              $max = $item['valor'];
          }

          //incrementa a contagem de dias com faturamento superior a média
          if ($item['valor'] > $soma / count($data)) {
              $contagem++;
          }
          $totalDias++;
      }
  }

  //imprime os resultados
  echo "Menor valor de faturamento: " . $min . "\n";
  echo "Maior valor de faturamento: " . $max . "\n";
  echo "Número de dias com faturamento superior à média: " . $contagem . "\n";

