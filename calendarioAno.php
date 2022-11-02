<?php
function linha($semana)
{
  echo "<tr>";
  for ($i = 0; $i <= 6; $i++) {
    if (isset($semana[$i])) {
      if ($i == 0) {
        echo "<td style='color: red'>{$semana[$i]}</td>";
      } else {
        if ($i == 6) {
          echo "<td style='font-weight: bold'>{$semana[$i]}</td>";
        } else {
          if ($semana[$i] == date('d')) {
            echo "<td style='font-weight: bold;'>{$semana[$i]}</td>";
          } else {
            echo "<td>{$semana[$i]}</td>";
          }
        }
      }
    }
  }
  echo "</tr>";
}

function calendario()
{
  $dia = 1;
  $semana = array();
  
  //Verifica o numero do dia da semana do primeiro dia do mes corrente (date("w") - 0 para dom e 7 para sáb) da data inserida "mktime(Hr, Min, Seg, Mês, Dia, Ano)"
  $diaSemana = date("w", mktime(0, 0, 0, date('n'), 1, date('Y'))); 
  
  // Insere string vazia no início do vetor conforme a var $diaSemana
  for ($i = 0; $i < $diaSemana; $i++) {
    $semana[$i] = ""; 
  }

  while ($dia <= date('t')) {
    array_push($semana, $dia);

    // Se o array tiver 7 dias, desenha a linha e reinicia o array
    if (count($semana) == 7) {
      // Desenha a linha com os dias da semana preenchidos no array
      linha($semana);
      // Reinicia o array
      $semana = array();
    }

    $dia++;
  }
  linha($semana);
}

function saudacao()
{
  $hora = date('H');
  if ($hora >= 6 && $hora < 12) {
    echo "Bom dia!";
  } else if ($hora >= 12 && $hora < 18) {
    echo "Boa tarde!";
  } else {
    echo "Boa noite!";
  }
}
?>

<?php 
saudacao();
echo '<br>';
echo date('w');
echo '<br>';
echo mktime(0, 0, 0, date('n'), 1, date('Y'));
echo '<br>';
echo date("w", mktime(0, 0, 0, date('n'), 1, date('Y')));
 ?>
<hr>
<table border="1">
  <tr>
    <th>Dom</th>
    <th>Seg</th>
    <th>Ter</th>
    <th>Qua</th>
    <th>Qui</th>
    <th>Sex</th>
    <th>Sab</th>
  <tr>
    <?php calendario(); ?>
</table>