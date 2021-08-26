<?php
$dalTableProdutos = array();
$dalTableProdutos["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTableProdutos["Nome"] = array("type"=>202,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTableProdutos["Valor"] = array("type"=>5,"varname"=>"Valor", "name" => "Valor", "autoInc" => "0");
$dalTableProdutos["Quantidade"] = array("type"=>3,"varname"=>"Quantidade", "name" => "Quantidade", "autoInc" => "0");
$dalTableProdutos["Codfornecedor"] = array("type"=>3,"varname"=>"Codfornecedor", "name" => "Codfornecedor", "autoInc" => "0");
$dalTableProdutos["Descricao"] = array("type"=>202,"varname"=>"Descricao", "name" => "Descricao", "autoInc" => "0");
$dalTableProdutos["Codconta"] = array("type"=>3,"varname"=>"Codconta", "name" => "Codconta", "autoInc" => "0");
$dalTableProdutos["Codigo"]["key"]=true;

$dal_info["ConsultorioOdontologicosqlite3__Produtos"] = &$dalTableProdutos;
?>