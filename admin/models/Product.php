<?php 
    require_once("Model.php");
	class product extends Model{
		var $table = 'products';

		function All(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT
						p.*,
						pl.textDescription 
					FROM
						products p
						LEFT JOIN productlines pl ON p.productLine = pl.productLine";

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
						p.*,
						pl.productDescription 
					FROM
						products p
						LEFT JOIN productlines pl ON p.productLine = pl.id WHERE p.productCode = '".$id."'";

		    // Thuc thi cau lenh truy van co so du lieu

		    return $data = $this->connection->query($query)->fetch_assoc();
        }
 
        function edit($data){
        	$v = "";
            foreach ($data as $key => $value) {
            	$v .= $key."='".$value."',";
            }
            $v = trim($v,",");
        	// Cau lenh truy van co so du lieu
        	$query = "UPDATE ".$this->table." SET ".$v." WHERE id ='".$data['id']."'";

		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query);
        }

        function delete($id){
        	// Cau lenh truy van co so du lieu
    		$query = "DELETE FROM ".$this->table." WHERE id = '".$id."'";

		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query);
        }
	}
 ?>