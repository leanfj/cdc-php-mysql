<?php

function desenhaCaixinha($color) {
  echo "<div style='width: 10px; height: 10px; background-color: {$color}; padding: 20px; margin: 5px;'> </div>";
}

function desenharCaixinhas($color) {
  $arr = str_split($color);

  foreach ($arr as $value) {
    switch($value) {
      case 'r':
        desenhaCaixinha('red');
        break;
      case 'g':
        desenhaCaixinha('green');
        break;
      case 'b':
        desenhaCaixinha('blue');
        break;
      case 'y':
        desenhaCaixinha('yellow');
        break;
      case 'p':
        desenhaCaixinha('purple');
        break;
      case 'o':
        desenhaCaixinha('orange');
        break;
      default:
        echo "Cor inválida";
    }
  }
}

desenharCaixinhas('ryp');

