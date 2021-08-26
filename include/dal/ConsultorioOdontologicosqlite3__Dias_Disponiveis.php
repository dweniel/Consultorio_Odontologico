<?php
$dalTableDias_Disponiveis = array();
$dalTableDias_Disponiveis["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTableDias_Disponiveis["Data disponivel"] = array("type"=>202,"varname"=>"Data_disponivel", "name" => "Data disponivel", "autoInc" => "0");
$dalTableDias_Disponiveis["Hora disponivel"] = array("type"=>202,"varname"=>"Hora_disponivel", "name" => "Hora disponivel", "autoInc" => "0");
$dalTableDias_Disponiveis["Tipo de consulta"] = array("type"=>202,"varname"=>"Tipo_de_consulta", "name" => "Tipo de consulta", "autoInc" => "0");
$dalTableDias_Disponiveis["Valor total da consulta"] = array("type"=>5,"varname"=>"Valor_total_da_consulta", "name" => "Valor total da consulta", "autoInc" => "0");
$dalTableDias_Disponiveis["Coddisponivel"] = array("type"=>3,"varname"=>"Coddisponivel", "name" => "Coddisponivel", "autoInc" => "0");
$dalTableDias_Disponiveis["Codigo"]["key"]=true;

$dal_info["ConsultorioOdontologicosqlite3__Dias_Disponiveis"] = &$dalTableDias_Disponiveis;
?>