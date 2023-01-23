<?php

/**
 * Database connection
 *
 *
 *
 * @author adapted from Benjamin Besse
 *
 * @link   http://fr3.php.net/manual/fr/book.pdo.php classe PDO
 */

namespace App\Model;

use PDO;
use PDOException;

/**
 *
 * This class only make a PDO object instanciation. Use it as below :
 *
 * <pre>
 *  $db = new Connection();
 *  $conn = $db->getPdoConnection();
 * </pre>
 */
class Connection
{
    private PDO $pdoConnection;

    private string $user;

    private string $host;

    private string $password;

    private string $dbName;

    /**
     * Initialize connection
     *
     * @access public
     */
    public function __construct()
    {
        $this->user = 'root';
        $this->host = 'localhost';
        $this->password = '';
        $this->dbName = 'fst';
        try {
            $this->pdoConnection = new PDO(
                'mysql:host=localhost' . $this->host . '; dbname=fst' . $this->dbName . '; charset=utf8',
                $this->user,
                $this->password
            );
            $this->pdoConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            // show errors in DEV environment
            if (ENV === 'dev') {
                $this->pdoConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            echo '<div class="error">Error !: ' . $e->getMessage() . '</div>';
        }
    }

    /**
     * @return PDO $pdo
     */
    public function getPdoConnection(): PDO
    {
        return $this->pdoConnection;
    }
}

/*Connexion PDO 

try 
{
    $con = new PDO('mysql:host=localhost;dbname=bd_mini_chat;charset=utf8','root','');

    echo "Succes de la connexion à la bdd </br>";
 
    // Message d'erreur en cas de non connexion :

} catch (Exception $e) {
    die('Erreur: '. $e ->getMessage());
}
// finir le test

finally{
    echo " </br> fin du test </br> </br>";
}
