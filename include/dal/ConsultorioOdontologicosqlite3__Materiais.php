<?php
$dalTableMateriais = array();
$dalTableMateriais["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTableMateriais["Nome"] = array("type"=>202,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTableMateriais["Quantidade"] = array("type"=>3,"varname"=>"Quantidade", "name" => "Quantidade", "autoInc" => "0");
$dalTableMateriais["Tipo"] = array("type"=>202,"varname"=>"Tipo", "name" => "Tipo", "autoInc" => "0");
$dalTableMateriais["Codfornecedor"] = array("type"=>3,"varname"=>"Codfornecedor", "name" => "Codfornecedor", "autoInc" => "0");
$dalTableMateriais["Codigo"]["key"]=true;

$dal_info["ConsultorioOdontologicosqlite3__Materiais"] = &$dalTableMateriais;
?>