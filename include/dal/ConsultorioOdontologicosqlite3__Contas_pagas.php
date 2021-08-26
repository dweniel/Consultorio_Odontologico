<?php
$dalTableContas_pagas = array();
$dalTableContas_pagas["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTableContas_pagas["Nome da conta"] = array("type"=>202,"varname"=>"Nome_da_conta", "name" => "Nome da conta", "autoInc" => "0");
$dalTableContas_pagas["Tipo de conta"] = array("type"=>202,"varname"=>"Tipo_de_conta", "name" => "Tipo de conta", "autoInc" => "0");
$dalTableContas_pagas["Valor total da conta"] = array("type"=>5,"varname"=>"Valor_total_da_conta", "name" => "Valor total da conta", "autoInc" => "0");
$dalTableContas_pagas["Data de vencimento"] = array("type"=>202,"varname"=>"Data_de_vencimento", "name" => "Data de vencimento", "autoInc" => "0");
$dalTableContas_pagas["Codigo"]["key"]=true;

$dal_info["ConsultorioOdontologicosqlite3__Contas_pagas"] = &$dalTableContas_pagas;
?>