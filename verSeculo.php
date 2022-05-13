<?php
//para cada unidade milhar precisamos fazer um If pois estou usando o substr e pegando os digitos a frente!
$ano = filter_input(INPUT_POST, "ano");
$seculo = $ano/100; 
if ($ano <1000){
	$seculoFinal = substr("$seculo", 0,1);
	$digito2ano = substr("$ano", 0,1);
	if($seculo > $digito2ano ){ 
		$seculoFinal = $seculoFinal + 1;
	} 
}else{
	$seculoFinal = substr("$seculo", 0,2); 
	$digito2ano = substr("$ano", 0,2);
	if($seculo > $digito2ano ){ 
		$seculoFinal = $seculoFinal + 1; 
	}
}
if($seculoFinal <= 0){
	$seculoFinal = 1;
}
?>

 <!DOCTYPE html>
 <html>
   <head>
   <meta charset=utf-8?>
     <title>Ver qual &eacute o s&eacuteculo</title>
     <style>
      input{padding:10px; margin: 5px;}
     </style>
   </head>
   <body>
    <h2><?="O Ano &eacute ".$ano." = s&eacuteculo " .$seculoFinal;?></h2>
     <form method="post">
      <label>Informe o Ano: 
         <input type="text" name="ano"/>
      </label><br>  
       <input type="submit" name="btnAno" value="Ver qual &eacute o seculo">
     </form>
   </body>
 </html>

