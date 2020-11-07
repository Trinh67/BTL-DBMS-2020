 <?php 
	require_once('Connection.php');
	class Model{
		var $connection;
        var $table = '';

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}

		function All(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM ".$this->table;

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
		    $query = "SELECT * FROM ".$this->table." WHERE id=".$id;

		    // Thuc thi cau lenh truy van co so du lieu

		    return $data = $this->connection->query($query)->fetch_assoc();
        }

        function create($data){
        	$f = "";
        	$v = "";
        	foreach ($data as $key => $value) {
        		$f .= $key.",";
        		$v .= "'".$value."',";
        	}

        	$f = trim($f,",");
        	$v = trim($v,",");
        	
        	// Cau lenh truy van co so du lieu
        	$query = "INSERT INTO ".$this->table."(".$f.") VALUES (".$v.");";
		    
		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query);
        }

        function edit($data){
        	$v = "";
            foreach ($data as $key => $value) {
            	$v .= $key."='".$value."',";
            }
            $v = trim($v,",");
        	// Cau lenh truy van co so du lieu
        	$query = "UPDATE ".$this->table." SET ".$v." WHERE id =".$data['id'];

		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query);
        }

        function delete($id){
        	// Cau lenh truy van co so du lieu
    		$query = "DELETE FROM ".$this->table." WHERE id = ".$id;

		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query);
        }
	}
 ?>