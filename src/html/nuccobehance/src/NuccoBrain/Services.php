<?php

namespace NuccoBrain;

use Behance\Client as BClient;
use NuccoBrain\Behance\Client;

abstract class Services {
    /**
     * @var array A cache for services.
     */
    static protected $cache = array();

    /**
     * Gets a central PDO object.
     *
     * @return \PDO
     *   A central PDO object.
     */
    static public function getPDO() {
        if (!isset(self::$cache[__FUNCTION__])) {
            require_once __DIR__ . '/../../config.php';
            $config = nucco_brain_get_config();
            $config = $config['database'];

            self::$cache[__FUNCTION__] = new \PDO(
                "{$config['driver']}:host={$config['host']};dbname={$config['dbname']}",
                $config['user'],
                $config['pass']
            );
        }
        return self::$cache[__FUNCTION__];
    }

    /**
     * Gets a central Behance Client object.
     *
     * @return Client
     *   A central Behance Client object.
     */
    static public function getBehanceClient() {
        if (!isset(self::$cache[__FUNCTION__])) {
            require_once __DIR__ . '/../../config.php';
            $config = nucco_brain_get_config();
            $config = $config['behance'];

            // $pdo = self::getPDO();
            $client  = new BClient($config['api_key']);
            self::$cache[__FUNCTION__] = $client; // new Client($pdo, $client);
        }
        return self::$cache[__FUNCTION__];
    }
}
?>
