<?php

if (!defined('PATH_SYSTEM')) die ('Bad request');

/**
 * Class Model
 */
class Model
{
    /**
     * @var mysqli|null
     */
    protected $connect;
    /**
     * @var
     */
    protected $table;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (mysqli_connect_errno()) {
            die ('Fail to connect to MySQL' . mysqli_connect_error());
        }
    }

    /**
     *
     * @return array
     */
    public function select()
    {
        $result = $this->connect->query("SELECT * FROM $this->table");
        $data = [];
        if ($result->num_rows > 0) {
            while ($item = mysqli_fetch_assoc($result)) {
                $data[] = $item;
            }
        }
        return $data;
    }

    /**
     * @param $table
     * @param array $data
     */
    public function insert($table, $data = array())
    {
        $response = $this->connect->query("INSERT INTO $table VALUE " . implode(",", $data));
        if ($response === false) {
            echo "Error " . $this->connect->error;
        }
    }
}

