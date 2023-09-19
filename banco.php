<?php

function realizarDeposito($saldo, $valorDeposito){

if($valorDeposito > 0)
{

$novosaldo=$saldo + $valorDeposito;
return $novosaldo;

}else{
    return"valor do deposito invalido";
}

}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //RECUPERE O SALDO ATUAL
$saldoAtual=7000;
   //RECUPERAR O VALOR DO FORMULARIO
   $valorDeposito= $_POST["valor"];
   //CHAME A FUNCAO PARA REALIZAR O DEPOSITO
   $novosaldo = realizarDeposito($saldoAtual, $valorDeposito);
   //EXIBA O RESULTADO
   if(is_numeric($novosaldo)){
    echo "deposito de $valorDeposito realizado com sucesso. novo saldo: $novosaldo";

   }
   else{
    echo "deposito nao realizado $novosaldo ";
   }


}

function realizarSaque ($saldo, $valorsaque){
    if ($valorsaque >0 && $saldo >=$valorsaque){
        $novosaldo1=$saldo - $valorsaque;
        return $novosaldo1;
    }else{
        return "Valor do saque invalido.";
    }
    
    }
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $valorsaque= $_POST["valor2"];
    $novosaldo1 = realizarSaque($novosaldo, $valorsaque);
    {
        if(is_numeric($novosaldo1)){
            echo"<br>"."Saque de $valorsaque realizado com sucesso. novo saldo : $novosaldo1";
        }

    }

}







?> 