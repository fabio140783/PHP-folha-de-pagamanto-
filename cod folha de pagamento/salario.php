<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de folha pagamento</title>
</head>
<body>
    <form action="salario.php" method="get">
        Informe seu Salario: <input type="text"name="s"><br>
        Informe horas Mês  : <input type="text" name="h"><br>
        <button>CALCULAR</button>
    </form>
    <?php
    $n=$_GET["s"];
    $n2=$_GET["h"];
    $n3=(($n/176)*$n2);#considerar 44 horas semanais totalizando 176 horas mês
    $n4=$n3*(11/100);
    echo "Desconto de IR R$ ".$n4."<br>";
    $n5=$n3*(8/100);
    echo "Desconto de INSS R$ ".$n5."<br>";
    $n6=$n3*(5/100);
    echo "Desconto de Sindicato R$ ".$n6."<br>";
    echo "Salario Bruto R$".$n."<br>";
    $r=$n4+$n5+$n6;
    echo "Total de desconto R$ ".$r."<br>";
    $q=$n3-$r;
    echo "Saldo liquido de R$ ".$q;    
    ?>
    
</body>
</html>