<?php
require_once 'conexion.php';
require_once 'Banco.php';

class negocioBanco{


function __construct()
{
}
function conectar(conexion$con) {

	return $con->abrirConexion();

}

function listarBanco() {

	$con = new conexion();

	$conexion = $this->conectar($con);

	mysql_select_db("sgatherm_factoring");

	$listarBanco = mysql_query("SELECT * FROM banco") or die(mysql_error());

	$listaBanco = array();

	while ($lis = mysql_fetch_array($listarBanco)) {
		$bancoTemp = new Banco();
		$bancoTemp->setIntIdBanco($lis["intIdBanco"]);
		$bancoTemp->setStrNombreBanco($lis["strNombreBanco"]);
		$listaBanco[] = $bancoTemp;

	}
	$con->cerrarConexion($conexion);
	return $listaBanco;

}

function ingresarBanco(Banco $banco) {

$con = new conexion();

$conexion = $this->conectar($con);

mysql_select_db("sgatherm_factoring");

mysql_query("INSERT INTO banco(strNombreBanco) VALUES ('".$banco->getStrNombreBanco()."')") or die(mysql_error());

$con->cerrarConexion($conexion);

}

}?>