<?php
require_once RACINE . "app/configs/connection.php";
class Model
{
    protected $sql;

    protected $table;

    public function __construct()
    {
    }

    public function getLines($params = [], $estUneligne = false)
{
    global $oPDO;
    $stmt = $oPDO->prepare($this->sql);
    
    // Vérifier si $params est un tableau non vide avant de le parcourir
    if (!empty($params)) {
        foreach ($params as $paramKey => $paramValue) {
            // Vérifier si la clé existe avant de lier le paramètre
            if (array_key_exists($paramKey, $params)) {
                $stmt->bindValue(":" . trim($paramKey), trim($paramValue));
            } else {
                // Gérer le cas où la clé de paramètre n'est pas trouvée
                // Peut-être afficher un message d'erreur ou gérer autrement
            }
        }
    }
    
    // insert, update, delete
    $result = $stmt->execute();
    if ($estUneligne === null) {
        return $result;
    }
    return $estUneligne ?
        $stmt->fetch(PDO::FETCH_OBJ) :
        $stmt->fetchAll(PDO::FETCH_OBJ);
}

}
