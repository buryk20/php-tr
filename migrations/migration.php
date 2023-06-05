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
            $this->createkMigrationTable();
            if ($this->db->inTransaction()) {
                $this->db->commit();
            }
        } catch (PDOException $exception) {
            $this->db->rollBack();
            d($exception->getMessage(), $exception->getTrace());
        }
    }

    protected function createkMigrationTable()
    {
        d('------ Prepare migration table query -------');
        $sql = file_get_contents(static::SCRITPS_DIR . static::MIGRATIONS_TABLE . '.sql');
        $query = $this->db->prepare($sql);
        $result = match ($query->execute()) {
            true => '- Migration table was created (or already exists)',
            false => '- Failed'
        };

        d($result);
        d('------ Finished migration table query -------');
    }
}

new Migration;
