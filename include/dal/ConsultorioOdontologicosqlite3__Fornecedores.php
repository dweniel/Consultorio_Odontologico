<?php
$dalTableFornecedores = array();
$dalTableFornecedores["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTableFornecedores["Nome"] = array("type"=>202,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTableFornecedores["Telefone"] = array("type"=>202,"varname"=>"Telefone", "name" => "Telefone", "autoInc" => "0");
$dalTableFornecedores["CNPJ"] = array("type"=>202,"varname"=>"CNPJ", "name" => "CNPJ", "autoInc" => "0");
$dalTableFornecedores["Cidade"] = array("type"=>202,"varname"=>"Cidade", "name" => "Cidade", "autoInc" => "0");
$dalTableFornecedores["Estado"] = array("type"=>202,"varname"=>"Estado", "name" => "Estado", "autoInc" => "0");
$dalTableFornecedores["Codigo"]["key"]=true;

$dal_info["ConsultorioOdontologicosqlite3__Fornecedores"] = &$dalTableFornecedores;
?>