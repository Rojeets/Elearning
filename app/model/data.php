<?php
session_start(); // Ensure sessions are started

class Database {
    private $connect;
    public function connect() {
        $servername = "localhost";
        $database = "Elearning";
        $username = "elearning";
        $password = "";

        // Create connection
        $this->connect = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (mysqli_connect_errno()) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $this->connect;
    }

    // Optional method to close the connection
    public function close() {
        if ($this->connect) {
            mysqli_close($this->connect);
        }
    }
}

class users{
    public function __construct() {
        $this->db = new Database();
        $this->connect = $this->db->connect();
    }
    public function login($email, $password) {
        $query = "SELECT * FROM auth WHERE Email = '$email' AND password = '$password'";
        $result = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }
    public function getUserData($email) {
        $query = "SELECT * FROM student WHERE Email = '$email'";
        $result = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }
}

class courses{
    public function __construct() {
        $this->db = new Database();
        $this->connect = $this->db->connect();
    }
    public function getCourseData($email) {
        $query = "SELECT * FROM course WHERE Email = '$email'";
        $result = mysqli_query($this->connect, $query);
         // Return all courses
         if (mysqli_num_rows($result) > 0) {
            $rows = array();
            while($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
                }
                return $rows;
            }
    }
}
