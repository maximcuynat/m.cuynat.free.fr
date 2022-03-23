<?php
require_once 'ManagerUser.php';

abstract class Manager
{
	private static $_bdd;

	// fonctions de connexion
	private static function setBdd()
    {
        try
        {
            self::$_bdd = new PDO('mysql:host=localhost;dbname=monblog','root'); // ajouter apres dbname le nom de la base de donnée
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

    protected function addUser($Username, $Password, $Mail, $notif)
    {
        // $reqAddUser = self::$_bdd->prepare("INSERT INTO User VALUES (?, ?, ?, ?)");
        if($notif == "ok")
            $notif = 1;
        else
            $notif = 0;
        // $reqAddUser->execute(array($Username, $Password, $Mail, $notif));
        print_r($reqAddUser);
    }
    
}
?>