<?php
$dalTableMaterial = array();
$dalTableMaterial["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTableMaterial["Nome"] = array("type"=>202,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTableMaterial["Valor"] = array("type"=>5,"varname"=>"Valor", "name" => "Valor", "autoInc" => "0");
$dalTableMaterial["Quantidade"] = array("type"=>3,"varname"=>"Quantidade", "name" => "Quantidade", "autoInc" => "0");
$dalTableMaterial["Codfornecedor"] = array("type"=>3,"varname"=>"Codfornecedor", "name" => "Codfornecedor", "autoInc" => "0");
$dalTableMaterial["Descricao"] = array("type"=>202,"varname"=>"Descricao", "name" => "Descricao", "autoInc" => "0");
$dalTableMaterial["Codigo"]["key"]=true;

$dal_info["ConsultorioOdontologicosqlite3__Material"] = &$dalTableMaterial;
?>