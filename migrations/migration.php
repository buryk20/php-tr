<?php

use Config\Config;
use Core\Db;

require_once dirname(__DIR__) . '/Config/constants.php';
require_once BASE_DIR . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(BASE_DIR);
$dotenv->load();

// \Core\Db::connect();



class Migration
{

    const SCRITPS_DIR = __DIR__ . '/scripts/';

    const MIGRATIONS_TABLE = '0_migrations';

    protected PDO $db;

    public function __construct()
    {
        $this->db = Db::connect();
        try {
            $this->db->beginTransaction();
            $this->db->commit();
        } catch (PDOException $exception) {
            $this->db->rollBack();
            d($exception->getMessage(), $exception->getTrace());
        }
    }
}

new Migration;
