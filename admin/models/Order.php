<?php 
    require_once("Model.php");
	class order extends Model{
		var $table = 'orderdetails';

		function All(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT
					    od.*, p.productName, p.thumbnail 
					  FROM
					    orderDetails od LEFT JOIN orders o ON od.id = o.id
					    LEFT JOIN products p ON od.productCode = p.id; ";

		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
		}

		function find($id){
        	// Cau lenh truy van co so du lieu
		    $query = "SELECT
				od.*, p.productName, p.thumbnail 
			FROM
				orderDetails od
				LEFT JOIN orders o ON od.id = o.id
				LEFT JOIN products p ON od.productCode = p.id
			WHERE
				od.id =".$id;

		    // Thuc thi cau lenh truy van co so du lieu

		    return $data = $this->connection->query($query)->fetch_assoc();
        }
	}

?>