<?php
$dalTableCategoria = array();
$dalTableCategoria["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTableCategoria["Nome"] = array("type"=>202,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTableCategoria["Codigo"]["key"]=true;

$dal_info["ConsultorioOdontologicosqlite3__Categoria"] = &$dalTableCategoria;
?>