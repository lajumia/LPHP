<?php

namespace App\Models;

use Core\Database;

class BaseModel {
    protected $db;

    public function __construct() {
        $this->db = new Database('localhost', 'lphp_db', 'root', '');
    }

    public function getAll($table) {
        return $this->db->query("SELECT * FROM {$table}");
    }
}
