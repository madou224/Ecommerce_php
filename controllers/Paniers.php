<?php

class Paniers extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $panier = new Panier();
        $iphones = $panier->getAll();
        if (is_null($iphones)) {
            $iphones = [];
        }
        $this->render("index", compact('iphones'));
    }

    public function ajouter($id_iphone)
    {
        if (is_numeric($id_iphone)) {
            $panier = new Panier();
            $panier->ajouter($id_iphone, 1);
        }
        header("Location: " . URI . "iphones/index");

    }

    public function supprimer($id_iphone)
    {
        if (is_numeric($id_iphone)) {
            $panier = new Panier();
            $panier->supprimer($id_iphone);
        }
        header("Location: " . URI . "paniers/index");

    }

    public function modifier($id_iphone)
    {
        if (is_numeric($id_iphone)) {
            if (isset($_POST['quantite']) && is_numeric($_POST['quantite'])) {
                $panier = new Panier();
                $panier->ajouter($id_iphone, $_POST['quantite']);
            }

        }
        header("Location: " . URI . "paniers/index");
    }
}