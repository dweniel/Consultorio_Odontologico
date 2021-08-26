<?php
$dalTablePacientes = array();
$dalTablePacientes["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTablePacientes["Nome"] = array("type"=>202,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTablePacientes["Telefone"] = array("type"=>202,"varname"=>"Telefone", "name" => "Telefone", "autoInc" => "0");
$dalTablePacientes["Cidade"] = array("type"=>202,"varname"=>"Cidade", "name" => "Cidade", "autoInc" => "0");
$dalTablePacientes["Estado"] = array("type"=>202,"varname"=>"Estado", "name" => "Estado", "autoInc" => "0");
$dalTablePacientes["CPF"] = array("type"=>202,"varname"=>"CPF", "name" => "CPF", "autoInc" => "0");
$dalTablePacientes["Rua"] = array("type"=>202,"varname"=>"Rua", "name" => "Rua", "autoInc" => "0");
$dalTablePacientes["Codigo"]["key"]=true;

$dal_info["ConsultorioOdontologicosqlite3__Pacientes"] = &$dalTablePacientes;
?>