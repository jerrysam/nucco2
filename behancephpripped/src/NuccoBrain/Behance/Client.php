<?php

namespace NuccoBrain\Behance;

use Behance\Client as BClient;

class Client {
    /**
     * @var \PDO The PDO object managing the database.
     */
    protected $pdo;

    /**
     * @var BClient The Behance Client object being proxied.
     */
    protected $client;

    /**
     * Client constructor.
     *
     * Saves dependencies.
     *
     * @param \PDO $pdo
     *   The PDO object managing the database.
     * @param BClient $client
     *   The Behance Client object being proxied.
     */
    public function __construct(\PDO $pdo, BClient $client) {
        $this->pdo    = $pdo;
        $this->client = $client;
    }

    /**
     * Proxies and caches all public calls for the Behance Client.
     *
     * @param $name
     *   The name of the function to call.
     * @param $arguments
     *   The arguments of the function.
     *
     * @return mixed
     *   The response of the Behance Client.
     */
    public function __call($name, $arguments) {
        // Get current time.
        $now  = time();

        // Try to look up data in the database.
        $hash = sha1(serialize(array( $name, $arguments )));
        $sth  = $this->pdo->prepare('SELECT * FROM behance WHERE url = :hash');
        $sth->execute(array(
            ':hash' => $hash,
        ));
        $info = $sth->fetchObject();

        // If data was not found or already expired.
        if (!$info || $info->expires < $now) {
            $result = call_user_func_array(array($this->client, $name), $arguments);

            // Save API call result into the database.
            $sth  = $this->pdo->prepare('INSERT INTO behance (url, created, expires, data) VALUES (:hash, :created, :expires, :data) ON DUPLICATE KEY UPDATE created = :created, expires = :expires, data = :data');
            $sth->execute(array(
                ':hash'    => $hash,
                ':created' => $now,
                ':expires' => $now + 60 * 30,
                ':data'    => serialize($result),
            ));
        }
        else {
            $result = unserialize($info->data);
        }

        return $result;
    }
}
