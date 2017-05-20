<?php 
class User
{
	private $id;
	private $name;
	private $email;
	private $table="user";	
	
	public function getTable()
    {
        return $this->table;
    }

	public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        //echo "Você adicionou ". $name . " e foi para ".$this->name;
        return $this;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
        //echo "Você adicionou ". $email . " e foi para ".$this->email;
        return $this;
    }

}

