<?php 
    require_once("Model.php");
	class page{
		var $connection;
        var $table = '';

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}
		function All($line,$x){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT p.*, s.sales_percent FROM products p LEFT JOIN productLines pl ON pl.productLine = p.productLine LEFT JOIN sales s ON s.productCode = p.productCode  WHERE pl.productLine = '".$line."' LIMIT 8, ".$x;
		    print($query);
		    die;
		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
		}
	}
 ?>