<?php

class Teacher
{
    private $conn;
    private $table = "teachers";

    private $servername = "127.0.0.1";
    private $username   = "admin";
    private $password   = "Admin@1234";
    private $dbname     = "school_management";


    public function __construct()
    {
        $this->connectDatabase();
    }


    // Setup Database Connection
    private function connectDatabase()
    {
        try {
            $conn = new PDO(
                "mysql:host=127.0.0.1",
                $this->username,
                $this->password
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("CREATE DATABASE IF NOT EXISTS {$this->dbname}");

        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }

    //Connection with database
        try {
            $this->conn = new PDO(
                "mysql:host={$this->servername};dbname={$this->dbname}",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //    //Status table
            $this->conn->exec("
                CREATE TABLE IF NOT EXISTS status (
                    id      TINYINT     AUTO_INCREMENT PRIMARY KEY,
                    name    VARCHAR(30) NOT NULL
                )
            ");

            $count_Statuses = $this->conn->query("SELECT COUNT(*) FROM status")->fetchColumn();
            if ($count_Statuses == 0) {
                $this->conn->exec("
                    INSERT INTO status (name) VALUES
                        ('Active'),
                        ('On Leave'),
                        ('Suspended'),
                        ('Retired'),
                        ('Resigned')
                ");
            }

            // Teachers table
            $this->conn->exec("
                CREATE TABLE IF NOT EXISTS {$this->table} (
                    id  INT AUTO_INCREMENT PRIMARY KEY,
                    first_name    VARCHAR(100) NOT NULL,
                    last_name     VARCHAR(100) NOT NULL,
                    gender        ENUM('Male', 'Female', 'Others') NOT NULL,
                    date_of_birth DATE,
                    email         VARCHAR(150) NOT NULL,
                    phone         VARCHAR(20)  NOT NULL,
                    address       TEXT,
                    salary        DECIMAL(15,2),
                    created_at    DATETIME,
                    modified_at   DATETIME,
                    status_id     TINYINT      DEFAULT 1,
                    FOREIGN KEY (status_id) REFERENCES status(id)
                )
            ");

        } catch (PDOException $e) {
            die("Database Table setup failed: " . $e->getMessage());
        }
    }


    // GET all teachers
    public function getAllTeachers($page = 1, $limit = 10)
    {
        $offset = ($page - 1) * $limit;

        $stmt = $this->conn->prepare("
            SELECT * FROM {$this->table}
            ORDER BY id DESC
            LIMIT :limit OFFSET :offset
        "); 

        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);

        $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // GET single teacher
    public function getOneTeacher($id)
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM {$this->table}
             WHERE id = :id"
        );

        $stmt->execute(['id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    // CREATE teacher
    public function createTeachers($data)
    {
        $stmt = $this->conn->prepare("
            INSERT INTO {$this->table}
            (first_name, last_name, gender, date_of_birth, email, phone, address, salary, status_id)
            VALUES
            (:first_name, :last_name, :gender, :date_of_birth, :email, :phone, :address, :salary, :status_id)
        ");

        return $stmt->execute([
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'gender'        => $data['gender'],
            'date_of_birth' => $data['date_of_birth'],
            'email'         => $data['email'],
            'phone'         => $data['phone'],
            'address'       => $data['address'],
            'salary'        => $data['salary'],
            'status_id'     => $data['status_id']
        ]);
    }


    // UPDATE teacher
    public function updateTeachers($id, $data)
    {
        $stmt = $this->conn->prepare("
            UPDATE {$this->table}
            SET
                first_name    = :first_name,
                last_name     = :last_name,
                gender        = :gender,
                date_of_birth = :date_of_birth,
                email         = :email,
                phone         = :phone,
                address       = :address,
                salary        = :salary
            WHERE id = :id
        ");

        return $stmt->execute([
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'gender'        => $data['gender'],
            'date_of_birth' => $data['date_of_birth'],
            'email'         => $data['email'],
            'phone'         => $data['phone'],
            'address'       => $data['address'],
            'salary'        => $data['salary'],
            'id'            => $id,
        ]);
    }
}