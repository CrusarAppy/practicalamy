class Database {
    private $host = "localhost";
    private $db_name = "practicalamy";
    private $username = "root";
    private $password = "";
    public $conn;

    public function dbConnection() {
        $this->conn = null;
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
            if ($this->conn->connect_error) {
                die("Connection failed: ". $this->conn->connect_error);
            }
        } catch(Exception $e) {
            echo "Connection error: ". $e->getMessage();
        }
        return $this->conn;
    }
}
