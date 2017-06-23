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
     * @var
     */
    protected $fillable = array();

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
     * @param string $id
     * @return array
     */
    public function select($id = '')
    {
        if ($id === '') {
            $result = $this->connect->query("SELECT * FROM $this->table");
        } else {
            $result = $this->connect->query("SELECT * FROM $this->table WHERE id = $id");
        }
        $data = [];
        if ($result->num_rows > 0) {
            while ($item = mysqli_fetch_assoc($result)) {
                $data[] = $item;
            }
        }
        return $data;
    }

    /**
     * @param array $data
     * @return bool|mysqli_result
     */
    public function store($data = array())
    {
        $response = $this->connect->query("INSERT INTO $this->table (" . implode(',', $this->fillable) . ") VALUES (\"" . implode(",", $data) . "\")");
        if ($response === false) {
            echo "Error " . $this->connect->error;
        }
        return var_dump($response);
    }

    /**
     * @param $id
     * @param array $data
     * @return bool|mysqli_result
     */
    public function update($id, $data = array())
    {
        $updateContent = '';
        for ($i = 0; $i < count($this->fillable); $i++) {
            $fillName = $this->fillable[$i];
            $updateContent = $updateContent . "$fillName = \"$data[$fillName]\"";
            if ($i < count($this->fillable) - 1) {
                $updateContent = $updateContent . ",";
            }
        }
        $response = $this->connect->query("UPDATE $this->table SET $updateContent  WHERE id = $id");
        return var_dump($response);
    }

    /**
     * @param $id
     * @return bool|mysqli_result
     */
    public function delete($id)
    {
        $response = $this->connect->query("DELETE FROM $this->table WHERE id = $id");
        return $response;
    }
}

