<?php
namespace App\Db;

use PDO;
use PDOException;
//utilise le single pattern sigleton
class Db extends PDO
{
    //Instance unique de la classe
    private static $instance;

    //Information de connexion avec des constantes
    private const DBHOST = 'localhost';
    private const DBUSER = 'root';
    private const DBPASS = '';
    private const DBNAME = 'livres';

    //visibilité private: on ne peut pas instancier cette classe
    //elle sera en instance unique
    private function __construct()
    {
        //DSN de connexion
        $_dsn = 'mysql:dbname='. self::DBNAME . ';host=' . self::DBHOST;

        //on appelle le constructeur de la classe PDO
        try{

           parent::__construct($_dsn, self::DBUSER, self::DBPASS); 

            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            die($e->getMessage());
        }
        
    }

    //C'est le nom donné en general pour les singleton
    //permet d'avoir une seule instance
    public static function getInstance():self
    {

        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}