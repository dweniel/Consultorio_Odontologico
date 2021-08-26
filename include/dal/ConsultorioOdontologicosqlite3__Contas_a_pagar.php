<?php
$dalTableContas_a_pagar = array();
$dalTableContas_a_pagar["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTableContas_a_pagar["Nome da Conta"] = array("type"=>202,"varname"=>"Nome_da_Conta", "name" => "Nome da Conta", "autoInc" => "0");
$dalTableContas_a_pagar["Valor da Conta"] = array("type"=>5,"varname"=>"Valor_da_Conta", "name" => "Valor da Conta", "autoInc" => "0");
$dalTableContas_a_pagar["Tipo de Conta"] = array("type"=>202,"varname"=>"Tipo_de_Conta", "name" => "Tipo de Conta", "autoInc" => "0");
$dalTableContas_a_pagar["Data de Vencimento"] = array("type"=>202,"varname"=>"Data_de_Vencimento", "name" => "Data de Vencimento", "autoInc" => "0");
$dalTableContas_a_pagar["Codconta"] = array("type"=>3,"varname"=>"Codconta", "name" => "Codconta", "autoInc" => "0");
$dalTableContas_a_pagar["Codigo"]["key"]=true;

$dal_info["ConsultorioOdontologicosqlite3__Contas_a_pagar"] = &$dalTableContas_a_pagar;
?>