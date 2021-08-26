<?php
$dalTablePaciente = array();
$dalTablePaciente["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTablePaciente["Nome"] = array("type"=>202,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTablePaciente["CPF"] = array("type"=>202,"varname"=>"CPF", "name" => "CPF", "autoInc" => "0");
$dalTablePaciente["RG"] = array("type"=>202,"varname"=>"RG", "name" => "RG", "autoInc" => "0");
$dalTablePaciente["Data de Nascimento"] = array("type"=>202,"varname"=>"Data_de_Nascimento", "name" => "Data de Nascimento", "autoInc" => "0");
$dalTablePaciente["Sexo"] = array("type"=>202,"varname"=>"Sexo", "name" => "Sexo", "autoInc" => "0");
$dalTablePaciente["Nome da Mae"] = array("type"=>202,"varname"=>"Nome_da_Mae", "name" => "Nome da Mae", "autoInc" => "0");
$dalTablePaciente["Nome do Pai"] = array("type"=>202,"varname"=>"Nome_do_Pai", "name" => "Nome do Pai", "autoInc" => "0");
$dalTablePaciente["E-mail"] = array("type"=>202,"varname"=>"E_mail", "name" => "E-mail", "autoInc" => "0");
$dalTablePaciente["Rua"] = array("type"=>202,"varname"=>"Rua", "name" => "Rua", "autoInc" => "0");
$dalTablePaciente["Numero"] = array("type"=>202,"varname"=>"Numero", "name" => "Numero", "autoInc" => "0");
$dalTablePaciente["Bairro"] = array("type"=>202,"varname"=>"Bairro", "name" => "Bairro", "autoInc" => "0");
$dalTablePaciente["Cidade"] = array("type"=>202,"varname"=>"Cidade", "name" => "Cidade", "autoInc" => "0");
$dalTablePaciente["Estado"] = array("type"=>202,"varname"=>"Estado", "name" => "Estado", "autoInc" => "0");
$dalTablePaciente["Telefone"] = array("type"=>202,"varname"=>"Telefone", "name" => "Telefone", "autoInc" => "0");
$dalTablePaciente["CEP"] = array("type"=>3,"varname"=>"CEP", "name" => "CEP", "autoInc" => "0");
$dalTablePaciente["Codagendamento"] = array("type"=>202,"varname"=>"Codagendamento", "name" => "Codagendamento", "autoInc" => "0");
$dalTablePaciente["Codigo"]["key"]=true;

$dal_info["ConsultorioOdontologicosqlite3__Paciente"] = &$dalTablePaciente;
?>