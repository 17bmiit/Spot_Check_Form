<?php 

class Database
{
	private $HOSTNAME;
	private $USERNAME;
	private $PASSWORD;
	private $DATABASE;
	public $con;

	function __construct()
	{
		$this->con = mysqli_connect(
			$this->HOSTNAME = "localhost",
			$this->USERNAME = "root",
			$this->PASSWORD = "",
			$this->DATABASE = "spot_check_form"
		);
	}

	function insert($tbl,$data)
	{
		$datafields = "";
		foreach ($data as $key => $value) 
		{
			$datafields .= "`$key` = '$value' ,";
		}
		$datafields = trim($datafields," ,");
		$query ="INSERT INTO `$tbl` SET $datafields";
		$run = $this->con->query($query);
		if ($run) 
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function select_data($tbl)
	{
		$query = "SELECT * FROM `$tbl`";
		$query = $this->con->query($query);
		$data = mysqli_fetch_all($query,MYSQLI_ASSOC);
		if ($data)
		{
			return $data;
		}
		else
		{
			return FALSE;
		}
	}

	function select_or_where($tbl,$where)
	{
		$wherefields = "";
		foreach ($where as $key => $value) 
		{
			$wherefields .= "`$key`='$value' OR ";
		}
		$wherefields = trim($wherefields," OR ");
		$query = "SELECT * FROM `$tbl` WHERE $wherefields";
		$run = $this->con->query($query);
		$data = mysqli_fetch_all($run,MYSQLI_ASSOC);
		return $data;
	}

	function select_and_where($tbl,$where)
	{
		$wherefields = "";
		foreach ($where as $key => $value) 
		{
			$wherefields .= "`$key`='$value' AND ";
		}
		$wherefields = trim($wherefields," AND ");
		$query = "SELECT * FROM `$tbl` WHERE $wherefields";
		$run = $this->con->query($query);
		$data = mysqli_fetch_all($run,MYSQLI_ASSOC);
		return $data;
	}

	function delete_data($tbl,$where)
	{
		$wherefields = "";
		foreach ($where as $key => $value) 
		{
			$wherefields .= "`$key` = '$value' AND";
		}
		$wherefields = trim($wherefields," AND");
		$query = "DELETE FROM `$tbl` WHERE $wherefields";
		$run = $this->con->query($query);
		if ($run) 
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function select_update_data($tbl,$where)
	{
		$wherefields = "";
		foreach ($where as $key => $value) 
		{
			$wherefields .= "`$key` = '$value' AND ";
		}
		$wherefields = trim($wherefields," AND ");
		$query = "SELECT * FROM `$tbl` WHERE $wherefields";
		$run = $this->con->query($query);
		$data = mysqli_fetch_array($run,MYSQLI_ASSOC);
		if ($data)
		{
			return $data;
		}
		else
		{
			return FALSE;
		}
	}

	function update($tbl,$data,$where)
	{
		$datafields = "";
		foreach ($data as $key => $value) 
		{
			$datafields .= "`$key` = '$value' ,";
		}
		$datafields = trim($datafields," ,");

		$wherefields ="";
		foreach ($where as $key => $value) 
		{
			$wherefields .= "`$key` = '$value' AND";
		}
		$wherefields = trim($wherefields," AND");
		$query = "UPDATE `$tbl` SET $datafields WHERE $wherefields";
		$run = $this->con->query($query);
		if ($run) 
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function search_or_field($tbl,$where)
	{
		$wherefields = "";
		foreach ($where as $key => $value) 
		{
			$wherefields .= "`$key` LIKE '%$value%' OR ";
		}
		$wherefields = trim($wherefields," OR ");
		$query = "SELECT * FROM `$tbl` WHERE $wherefields";
		$run = $this->con->query($query);
		$data = mysqli_fetch_all($run,MYSQLI_ASSOC);
		return $data;
	}

	function search_and_field($tbl,$where)
	{
		$wherefields = "";
		foreach ($where as $key => $value) 
		{
			$wherefields .= "`$key` LIKE '%$value%' AND ";
		}
		$wherefields = trim($wherefields," AND ");
		$query = "SELECT * FROM `$tbl` WHERE $wherefields";
		$run = $this->con->query($query);
		$data = mysqli_fetch_all($run,MYSQLI_ASSOC);
		return $data;
	}

	function upload_img($path,$file)
	{
		$img_name = time()."_".$file['name'];
		$run = move_uploaded_file($file['tmp_name'], $path."/".$img_name);
		if ($run) 
		{
			return $img_name;
		}
		else
		{
			return FALSE;
		}
	}
}

?>