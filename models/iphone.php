<?php

class iphone extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "iphone";
    }

    public function ajouter($data)
    {
        $this->sql = "insert into " . $this->table . " (nom, prix, description, courte_description, quantite) 
        VALUE (:nom, :prix, :description, :courte_description, :quantite)";
        return $this->getLines($data, null);

    }

    public function getAll()
    {
        $this->sql = "SELECT f.*, i.chemin_image from " . $this->table .
            " f left join Image i on f.id_iphone = i.id_iphone";

        return $this->getLines();
    }

    public function lire($data)
    {
        $this->sql = "SELECT f.*, i.chemin_image from " . $this->table .
            " f left join Image i on f.id_iphone = i.id_iphone where f.id_iphone = :id_iphone";

        return $this->getLines($data, true);
    }

    public function modifier($data)
    {
        $this->sql = "UPDATE " . $this->table . " SET nom = :nom, prix = :prix, description = :description, courte_description = :courte_description, quantite = :quantite WHERE id_iphone = :id_iphone";
        // Assurez-vous que le tableau $data contient toutes les clés nécessaires
//            // Appel à la méthode getLines avec les données correctes
        return $this->getLines($data, null);
    //    } else {
            // Si des clés sont manquantes dans $data, affichez un message d'erreur ou gérez-le autrement
            // Dans cet exemple, je vais afficher un message d'erreur et retourner false
      //      echo "Certaines clés sont manquantes dans le tableau de données.";
        }
    
    
    
    


    public function deleteById($data)
    {
        $this->sql = "delete from " . $this->table . " where id_iphone = :id_iphone";
        return $this->getLines($data, null);
    }


}