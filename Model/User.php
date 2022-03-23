<?php

class User
{
	private $ID_person;
	private $Username;
	private $Password;
	private $Mail

	
	// == Fonctions constructeur
	public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    // == Fonctions Hydrate
    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
                $this->$method($value);
        }
    }

    // == SET

    public setID_person($value)
    {
    	if($value < 0)
    		$this->ID_person = "";
    	else
    		$this->ID_person = $value;
    }
    public setUsername($value)
    {
    	if($value == "")
    		$this->Username = "";
    	else
    		$this->Username = $value;
    }
    public setPassword($value)
    {
    	if($value == "")
    		$this->Password = "";
    	else
    		$this->Password = $value;
    }
    public setMail($value)
    {
    	if($value == "")
    		$this->Mail = "";
    	else
    		$this->Maim = $value;
    }

    // == GET

    public getID_person()
    {
    	return $this->ID_person;
    }
   	public getUsername()
    {
    	return $this->Username;
    }
    public getPassword()
    {
    	return $this->Password;
    }
    public getMail()
    {
    	return $this->Mail;
    }
}

?>