<?php
require_once 'conection.php';
class $Table{

$Atributes

function __construct()
{
}
$Methods

//Lógica de negocio

function conect(conexion $$con) {

	return $$con->abrirConexion();

}

function list$Table() {

	$$con = new conexion();

	$$conection = $$this->conectar($$con);

	mysql_select_db("$strNameDataBase");

	$$list$Table = mysql_query("SELECT * FROM $TableMin") or die(mysql_error());

	$$array$Table = array();

	while ($$lis = mysql_fetch_array($$list$Table)) {
		$$$TableMin = new $Table();
		$listExtract
		$$array$Table[] = $$$TableMin;

	}
	$$con->cerrarConexion($$conection);
	return $$array$Table;

}

function ingresarBanco(Banco $banco) {

	$con = new conexion();

	$conexion = $this->conectar($con);

	mysql_select_db("sgatherm_factoring");

	mysql_query("INSERT INTO banco(strNombreBanco) VALUES ('".$banco->getStrNombreBanco()."')") or die(mysql_error());

	$con->cerrarConexion($conexion);

}
}
?>