<?php
class database
{
    // khai báo các biến kết nôid tới cơ sở dũ liệu
    protected $conn = null;
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = '';
    protected $dbname = 'do_an_nhanh';

    // tạo phương thức kết nối 
    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if (!$this->conn) {
            echo 'Kết nối thất bại...';
            exit();
        }
    }
    // tạo phương thức lấy dữ liệu từ database 
    public function get($table, $condittion = array())
    {
        // khởi tạo câu lệnh lấy dữ liệu sql
        $sql = "SELECT * FROM $table";
        if (!empty($condittion)) {
            $sql .= " WHERE";
            foreach ($condittion as $key => $value) {
                $sql .= " $key = '$value' AND";
            }
            $sql = trim($sql, "AND");
        }

        // thực thi câu lệnh
        $query = mysqli_query($this->conn, $sql);
        $ketqua = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $ketqua[] = $row;
            }
        }
        return $ketqua;
    }
    // viet function lay du lieu theo dieu kien
    public function get_like($table, $column, $value)
    {
        $sql = "SELECT * FROM $table WHERE $column LIKE '%$value%'";
        // thực thi câu lệnh
        $query = mysqli_query($this->conn, $sql);
        $ketqua = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $ketqua[] = $row;
            }
        }
        return $ketqua;
    }
    //viet function insert 
    public function insert($table, $data = array())
    {
        //B1: laays gia tri cua key cho vao mot mang 
        $keys = array_keys($data);
        // b2: xu ly chuoi voi mang (bien mang thanh moot chuoi)
        $column = implode(",", $keys);
        //B3: xu ly gia tri
        $value_str = '';
        foreach ($data as $key => $value) {
            $value_str .= "'$value',";
        }
        // B4: xoa dau phay o cuoi
        $value_str = trim($value_str, ",");
        //b5 viet câu lệnh sql
        $sql = "INSERT INTO $table ($column) VALUES ($value_str)";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }
    // viet ham xoa
    public function delete($table, $condition = array())
    {
        $sql = " DELETE FROM $table WHERE ";
        // thực thi câu lệnh
        foreach ($condition as $key => $value) {
            $sql .= "$key = '$value' AND";
        }
        $sql = trim($sql, 'AND');
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }
    //  Hàm sửa dữ liệu trong cơ sở dữ liệu
    function update($table, $data = array(), $condition = array())
    {
        $value_str = '';
        foreach ($data as $key => $value) {
            $value_str .= "$key ='$value',";
        }
        //xoa dau phay o cuoi
        $value_str = trim($value_str, ",");
        //viet câu lệnh sql
        $sql = "UPDATE $table SET $value_str WHERE ";

        foreach ($condition as $key => $value) {
            $sql .= "$key = '$value' AND";
        }
        $sql = trim($sql, 'AND');

        $query = mysqli_query($this->conn, $sql);
        return $query;
    }

    public function getOrdId() {
        return $this->conn->insert_id;
    }
}
