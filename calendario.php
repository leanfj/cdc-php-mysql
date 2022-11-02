<?php 
  function linha($semana) {
    echo "
      <tr>
        <td>{$semana[0]}</td>
        <td>{$semana[1]}</td>
        <td>{$semana[2]}</td>
        <td>{$semana[3]}</td>
        <td>{$semana[4]}</td>
        <td>{$semana[5]}</td>
        <td>{$semana[6]}</td>
      </tr>
    ";
  }

  function calendario() {
    $dia = 1;
    $semana = array();

    while ($dia <= 31) {
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
  }
?>

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