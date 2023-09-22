<?php
class database
{
    // khai báo các biến kết nối tới cơ sở dữ liệu
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
            // lặp lấy key và value
            foreach ($condittion as $key => $value) {
                $sql .= " $key = '$value' AND";
            }
            // cắt and ở cuối
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
    // tạo phương thức lấy dữ liêụ theo điều kiện
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
    // tạo phương thức thêm dữ liệu vào database
    public function insert($table, $data = array())
    {
        // lấy giá trị key cho vào mảng
        $keys = array_keys($data);
        //  Xử lý chuỗi với mảng (biến mảng thành một chuỗi)
        $column = implode(",", $keys);
        // xử lý giá trị
        $value_str = '';
        foreach ($data as $key => $value) {
            $value_str .= "'$value',";
        }
        // xóa dấu phẩy ở cuối
        $value_str = trim($value_str, ",");
        // viết câu lệnh sql
        $sql = "INSERT INTO $table ($column) VALUES ($value_str)";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }
    // tạo phương thức xóa dữ liệu 
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
    //  tạo phương thức sửa dữ liệu trong database
    function update($table, $data = array(), $condition = array())
    {
        $value_str = '';
        foreach ($data as $key => $value) {
            $value_str .= "$key ='$value',";
        }
        // xóa dấu phẩy ở cuối
        $value_str = trim($value_str, ",");
        // viết câu lệnh sql
        $sql = "UPDATE $table SET $value_str WHERE ";

        foreach ($condition as $key => $value) {
            $sql .= "$key = '$value' AND";
        }
        $sql = trim($sql, 'AND');

        $query = mysqli_query($this->conn, $sql);
        return $query;
    }
}
