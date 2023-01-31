<?php

function ordena(array $nota1,array $nota2)
{

    return $nota2['nota']<=> $nota1['nota'];
/*if($nota1['nota'] > $nota2['nota']){
    return -1;
}
if($nota2['nota'] > $nota1['nota']){
    return 1;

}

return 0;*/

}
$saldos=[

'nicolas' => 1000,
'marilda' => 2490,
];


$notas=[
['aluno'=>'marcos','nota' => 5],
['aluno'=>'carlos','nota' => 1],
['aluno'=>'nicolas','nota' => 2],
['aluno'=>'marilda','nota' => 3],
['aluno'=>'pedro','nota' => 4],
];


usort($notas,'ordena');




//usort()     //nos explicamos para o PHP como queremos a nossa organização
//sort($notas);  //ordem crescente
//rsort($notas); //ordem decrecente
//asort($notas); //ordem crescente,porem com os mantendo os indicadores se forem strings
//arsort($notas); //ordem decrecente,porem com os mantendo os indicadores se forem strings

//ksort($notas); //ordena usando os indicadores na ordem alfabetica
//krsort($notas); //ordena usando os indicadores na ordem alfabetica decrecente
var_dump($notas);


//                      MANEIRA DE VERIFICAR SE É UM ARRAY


if(is_array($notas)){

echo"EH um array".PHP_EOL;

};

/*if(gettype($notas) === 'array'){

echo"eh um array tambem".PHP_EOL;

}*/
//                  DISPONIVEL NO PHP 8.O,VERIFICA SE O ARRAY TEM INDICADOR NUMERICO E CRESCENTE

 //   array_is_list($notas);

//                      VERIFICA SE EXISTE A """""CHAVE"""""""" ESPECIFICADO NO ARRAY   * CHAVE=INDICADOR


//arrays_key_exists('nicolas',$notas)

//                         VERIFICA SE EXISTE A """ CHAVE"""" E SE NAO EH NULO


//isset($saldos['nicolas'])

var_dump(isset($saldos['nicolas']));


//                      VERIFICA SE O VALOR EXISTE

//in_array(1000,$saldos)
var_dump(in_array(1000,$saldos));
//                      PROCURA A ""CHAVE "" DE UM VALOR ESPECIFICO NO ARRAY
echo array_search(1000,$saldos);