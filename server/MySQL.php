<?php
class MySQL implements ConnectionInterface
{
    private $host;
    private $DBname;
    private $username;
    private $password;
    private $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public $connection;

    public function getConnection(){
        try {
            $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->DBname,
                                        $this->username,
                                        $this->password,
                                        $this->opt);
            $this->connection->exec("SET names utf8");
        } catch (PDOException $e) {
            echo json_encode(array("message"=>$e->getMessage()));
        }

        return $this->connection;
    }
}