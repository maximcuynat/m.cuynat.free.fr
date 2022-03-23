<?php
require_once '../Model/ManagerUser.php';

abstract class Manager
{
	private static $_bdd;

	// fonctions de connexion
	private static function setBdd()
    {
        try
        {
            self::$_bdd = new PDO('mysql:host=localhost;dbname=','root'); // ajouter apres dbname le nom de la base de donnée
            self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        catch(Exception $e)
        {
            die("Connection failed: " . $e->getMessage());
            // header('location:../View/errors/errorConnexionBdd.php');
        }   
    }

    protected function getBdd()
    {
        if(self::$_bdd == null)
            $this->setBdd();
        return self::$_bdd;
    }

    
}
?>