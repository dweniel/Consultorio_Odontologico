<?php
$dalTableAtendimento_Agendado = array();
$dalTableAtendimento_Agendado["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTableAtendimento_Agendado["Nome"] = array("type"=>202,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTableAtendimento_Agendado["Data do Atendimento"] = array("type"=>202,"varname"=>"Data_do_Atendimento", "name" => "Data do Atendimento", "autoInc" => "0");
$dalTableAtendimento_Agendado["Telefone"] = array("type"=>202,"varname"=>"Telefone", "name" => "Telefone", "autoInc" => "0");
$dalTableAtendimento_Agendado["Horario do Atendimento"] = array("type"=>202,"varname"=>"Horario_do_Atendimento", "name" => "Horario do Atendimento", "autoInc" => "0");
$dalTableAtendimento_Agendado["Valor da Consulta"] = array("type"=>5,"varname"=>"Valor_da_Consulta", "name" => "Valor da Consulta", "autoInc" => "0");
$dalTableAtendimento_Agendado["Codigo"]["key"]=true;

$dal_info["ConsultorioOdontologicosqlite3__Atendimento_Agendado"] = &$dalTableAtendimento_Agendado;
?>