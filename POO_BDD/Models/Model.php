<?php
namespace App\Models;

use App\Db\Db;

class Model extends Db
{
    protected $table;

    //Instance de Db
    private ?Db $db; 

    public function __construct($table = null, ?Db $db = null){
            $this->table = $table;
            $this->db = $db;
    }

    public function findAll()
    {
        $requete = $this->requete('SELECT * FROM ' . $this->table);
        return $requete->fetchAll();
    }

    public function findBy(array $data)
    {
        $keys = [];
        $values = [];

        foreach($data as $key => $value){
            $keys[] = "$key = ?";
            $values[] = $value;
        }

        //print_r($keys);
        //print_r($values);
        $field_list = implode(' AND ', $keys);
        //print_r($field_list);
        return $this->requete('SELECT * FROM '.$this->table.' WHERE '.$field_list, $values)->fetchAll();
    }

    public function findById(int $id){
        return $this->requete('SELECT * FROM '.$this->table.' WHERE id = '. $id)->fetch();
    }

    public function create(Model $model){
        $keys = [];
        $values = [];
        $fields = [];

        foreach($model as $key => $value){
            if(!empty($value) && $key !== 'db' && $key !== 'table'){

                $keys[] = $key;
                $values[] = $value;
                $fields[]= '?';
            }
            
        }
        $key_list = implode(', ', $keys);
        $field_list = implode(', ', $fields);

        //echo $key_list; die($field_list);
        return $this->requete('INSERT INTO '.$this->table.' ('.$key_list.')
        VALUES ('. $field_list.')', $values);
    }

    public function update(int $id, Model $model){
        $keys = [];
        $values = [];

        foreach($model as $key => $value){
            if(!empty($value) && $key !== 'db' && $key !== 'table'){

                $keys[] = "$key = ? ";
                $values[] = $value;
                
            }
            
        }
        $values[] = $id;
        $key_list = implode(', ', $keys);
        
       
        return $this->requete('UPDATE '.$this->table.' SET '.$key_list.' WHERE
        id = ? ', $values);
    }

    public function delete(int $id){
        return $this->requete('DELETE '.$this->table.' WHERE id = ? ', [$id]);
    }

    public function requete(string $sql, ?array $attributs= null)
    {
        //on récupère l'instance de Db
        $this->db = DB::getInstance();

        if($attributs !== null){
            //Requête préparée
            $requetes = $this->db->prepare($sql);
            $requetes->execute($attributs);
            return $requetes;
        }else{
            //Requête simple
            return $this->db->query($sql);
        }
    }

    public function hydrate(array $donnees) 
        {
            foreach ($donnees as $key => $value) 
            {
            // On fabrique le nom du setter correspondant à l'attribut :
            $setter = 'set'.ucfirst($key);
        // Si le setter correspondant existe :
            if (method_exists($this, $setter)) 
            {
            // On appelle le setter = $setter contient son nom !!!
            $this->$setter($value);
            }
            }
            return $this;
        }

}