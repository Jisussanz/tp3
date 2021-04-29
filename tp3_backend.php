<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tp3_backend.php</title>
  </head>
  <body>
    <h1>TRABAJO PRACTICO N°3</h1>
      <h2>ESTRUCTURAS DE CONTROL: PARTE 2</h2>
        <h3>EJERCICIOS</h3>
          <h4>1. Mostrar los números del 1 al 100.</h4>
            <?php
              $i=1;
              while ($i <= 100) {
                print "$i \n";
                $i++;
              }
             ?>
          <h4>2. Mostrar los números del 100 al 1</h4>
            <?php
              $a=100;
              while ($a >= 1) {
                print "$a \n";
                $a--;
                }
             ?>
          <h4>3. Mostrar los números pares del 1 al 100.</h4>
            <?php
              $b=0;
              while ($b <= 100) {
                echo "$b \n ";
                $b = $b+2;
              }
             ?>
          <h4>4. Mostrar los números impares del 1 al 100.</h4>
            <?php
               $b=1;
              while ($b <= 100) {
                echo "$b \n ";
                $b = $b+2;
              }
             ?>
          <h4>5. Mostrar la suma de los números de 1 a 20</h4>
            <?php
              $auxSuma=0;
              for ($i=0; $i <= 20; $i++) {
              echo  "$auxSuma + $i = ". ($auxSuma += $i)."<br/>";
              }
             ?>
          <h4>6. Mostrar la suma de números pares de 1 a 20.</h4>
            <?php
              $auxSuma=2;
                for ($i=2; $i <= 20; $i++) {   
                echo  "$auxSuma + $i = ". ($auxSuma += ($i++))."<br/>";
             }


             ?>

  </body>
</html>
