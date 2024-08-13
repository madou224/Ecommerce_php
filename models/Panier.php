<?php

class Panier
{
    const NAME = "Panier";

    public function __construct()
    {
        if (!isset($_SESSION[self::NAME])) {
            $_SESSION[self::NAME] = [];
        }
    }

    public function ajouter($id_iphone, $quantite)
    {
        $_SESSION[self::NAME][$id_iphone] = $quantite;
    }

    public function supprimer($id_iphone)
    {
        unset($_SESSION[self::NAME][$id_iphone]);
    }

    public function getAll()
    {
        $iphones = [];
        foreach ($_SESSION[self::NAME] as $id_iphone => $quantite) {
            $iphone = new iphone();
            // ['id_iphone'=>$id_iphone]

            $currentiphone = $iphone->lire(compact('id_iphone'));
            //var_dump($currentiphone);
            if ($currentiphone) {
                // [0=>[$quantite,$iphone]]
                $iphones[] = [$quantite, $currentiphone];
            } else {
                 unset($_SESSION[self::NAME][$id_iphone]);
            }
        }
        return $iphones;
    }

}