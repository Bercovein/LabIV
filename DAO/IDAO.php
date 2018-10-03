<?php 
namespace DAO;

interface IDAO{

	function add($object);
	function getAll();
	function delete($object);

	/*
	function insert($dato);
    function search($id);
    function update($datonuevo);
    */
}

?>