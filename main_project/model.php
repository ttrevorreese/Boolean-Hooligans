<?php
	//include connection file 
	include_once("fetch.php");
	 
	// initilize all variable
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	//define index of column
	$columns = array( 
		0 =>'ID',
		1 =>'Name', 
		2 => 'CountryCode',
		3 => 'District',
        4 => 'Population'
	);

	$where = $sqlTot = $sqlRec = "";

	// check search value exist
	if( !empty($params['search']['value']) ) {   
		$where .=" WHERE ";
		$where .=" ( Name LIKE '".$params['search']['value']."%' ";    
		$where .=" OR District LIKE '".$params['search']['value']."%' ";

		$where .=" OR ID LIKE '".$params['search']['value']."%' )";
	}

	// getting total number records without any search
	$sql = "SELECT * FROM `city` ";
	$sqlTot .= $sql;
	$sqlRec .= $sql;
	//concatenate search sql if value exist
	if(isset($where) && $where != '') {

		$sqlTot .= $where;
		$sqlRec .= $where;
	}