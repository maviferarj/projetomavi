<?php

try{
   //tentativa de conexao
$options =array(
    PDO::ATTR_PERSISTENT => true,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES 
    UTF8',
    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
);
$conexao = new PDO("mysql:host=localhost;dbname=projetomavi","root","", $options);
//se a conexao ser realizada com sucesso aparece a mensagem :
echo "conexao realizada com sucesso ";

}catch(PDOException $exe){
    //pegar o erro e tratar
    echo "o erro é:".$exe->getMessage();

}


?>