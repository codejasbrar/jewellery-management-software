<?php
require_once('database/dbconfig.php');

function getAll($con,$table)
{
	$sql = "SELECT * FROM {$table}";
	$result = mysqli_query($con,$sql);
	$return['result'] = array();
	if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			$return['result'][] = $row;
		}
	}
	return $return['result'];
}
function getWhere($data = array(),$string = NULL)
{
	$fields = array_keys($data);
	$values = array_values($data);
	$count = count($fields);
	$item = "";
	for($i = 0; $i < $count; $i++)
	{
		if($count > 1 && $count - 1 != $i)
		{
			if(is_string($values[$i]))
			{
				$item .=  $fields[$i] . " = " . "'{$values[$i]}' AND ";
			}
			else
			{
				$item .=  $fields[$i] . " = " . "'{$values[$i]}' AND ";
			}
		}
		else
		{
			if(is_string($values[$i]))
			{
				$item .=  $fields[$i] . " = " . "'{$values[$i]}'";
			}
			else
			{
				$item .=  $fields[$i] . " = " . "'{$values[$i]}'";
			}
		}
		if(!is_null($string))
		{
			$item .= $string;
		}
	}
	return $item;
}
//----
function  selectWhere($con,$table,$data = array(),$string = NULL)
{
	$fields = array_keys($data);
	$values = array_values($data);
	$count = count($fields);
	$item = "";
	for($i = 0; $i < $count; $i++)
	{
		if($count > 1 && $count - 1 != $i)
		{
			if(is_string($values[$i]))
			{
				$item .=  $fields[$i] . " = " . "'{$values[$i]}' AND ";
			}
			else
			{
				$item .=  $fields[$i] . " = " . "'{$values[$i]}' AND ";
			}
		}
		else
		{
			if(is_string($values[$i]))
			{
				$item .=  $fields[$i] . " = " . "'{$values[$i]}'";
			}
			else
			{
				$item .=  $fields[$i] . " = " . "'{$values[$i]}'";
			}
		}
		if(!is_null($string))
		{
			$item .= $string;
		}
	}
	$sql = "SELECT * FROM {$table} WHERE {$item}"; 
	//echo $sql;
	$result = mysqli_query($con,$sql);
	$return['result'] = array();
	if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			$return['result'][] = $row;
		}
	}
	return $return['result'];
}
function deleteAll($con,$table)
{
	$sql = "TRUNCATE {$table}";
	$result = mysqli_query($con,$sql);
	$callback = mysqli_affected_rows();
	return $callback;
}
//----
function deleteWhere($con,$table,$where)
{
	$sql = "DELETE FROM {$table} WHERE {$where}";
	$result = mysqli_query($con,$sql);
	$callback = mysqli_affected_rows();
	return $callback;
}
function insert($con,$table,$data = array(),$GetLastInsertID=true,$printQuery=false)
{
	$fields = implode(", ", array_keys($data));
	$values = "'".implode("','", array_values($data))."'";
	$sql = "INSERT INTO `{$table}` ({$fields}) VALUES ({$values}) ";
	if($printQuery)
	{
		echo $sql;
		//exit;
	}
	$result = mysqli_query($con,$sql);
	$insertId = mysqli_insert_id($con);
	if($GetLastInsertID)
	{
		return $insertId;
	}
	else
	{
		return $result;
	}
}
//----
function update($con,$table,$data,$where)
{
	foreach ($data as $x => $y)
	{
		$values[] = "{$x} = '{$y}'";
	}
	$final = implode(", ", $values);
	$sql = " UPDATE `{$table}` SET {$final} WHERE {$where} ";
	//echo $sql;
	$result = mysqli_query($con,$sql);
	return $result;
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function dbRowUpdate($table_name, $form_data, $where_clause='')
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add key word
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // start the actual SQL statement
    $sql = "UPDATE ".$table_name." SET ";

    // loop and build the column /
    $sets = array();
    foreach($form_data as $column => $value)
    {
         $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);

    // append the where statement
    $sql .= $whereSQL;

    // run and return the query result
    return mysqli_query($con,$sql);
}
