<?php
require_once 'connection.php';
class $Table{

$Atributes

function __construct()
{
}
$Methods

//Lógica de negocio

function connect(connection $$con) {

	return $$con->openConnetion();

}

function list$Table() {

	$$con = new connection();

	$$conection = $$this->connect($$con);

	mysql_select_db("$strNameDataBase");

	$$list$Table = mysql_query("SELECT * FROM $TableMin") or die(mysql_error());

	$$array$Table = array();

	while ($$lis = mysql_fetch_array($$list$Table)) {
		$$$TableMin = new $Table();
		$listExtract
		$$array$Table[] = $$$TableMin;

	}
	$$con->closeConnetion($$connection);
	return $$array$Table;

}

function create$Table($Table $TableMin) {

	$$con = new connection();

	$$conection = $$this->connect($$con);

	mysql_select_db("$strNameDataBase");

	mysql_query("$sqlCreateScript") or die(mysql_error());

	$$con->closeConnetion($$connection);

}

function update$Table($$$primaryKey, $$strFieldColumn, $$value){
	$$con = new connection();

	$$conection = $$this->connect($$con);

	mysql_select_db("$strNameDataBase");

	mysql_query("UPDATE $TableMin SET $$strFieldColumn = $$value where $$primaryKey = $$$primaryKey") or die(mysql_error());

	$$con->closeConnetion($$connection);
}
}
?>