<?php

class iphones extends Controller
    {

            public function index()
                {

                    $iphone = new iphone();
                    $iphones = $iphone->getAll();
                    $this->render('index', compact("iphones"));
                }

            public function admin()
                {
                    if (isset($_SESSION[Auth::USER])) {
                        if ($_SESSION[Auth::USER]->description === Auth::ADMIN) {
                            $iphone = new iphone();
                            $iphones = $iphone->getAll();
                            $this->render('admin', compact("iphones"));
                            return;
                        }
                    }

                    header("Location: " . URI . "iphones/index");
                }

                public function __construct()
                {
                    parent::__construct();
                }

            private function uploadImage($id_iphone)
                {

                        if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
                            $image_name = $_FILES["image"]["name"];
                            $image_tmp = $_FILES["image"]["tmp_name"];
                            $image_destination = "assets/images/" . basename($image_name); // Chemin de destination du fichier sur le serveur

                            // Vérifier que le fichier est une image (facultatif mais recommandé)
                            // images/a-2-1634829071.JPG
                            $image_type = strtolower(pathinfo($image_destination, PATHINFO_EXTENSION));
                            // jpg
                            if (!in_array($image_type, array("jpg", "jpeg", "png", "gif","avif","webp"))) {
                                echo "Seules les images JPG, JPEG, PNG et GIF sont autorisées.";
                                exit();
                            }

                            // Déplacer l'image téléchargée vers le dossier spécifié
                            if (move_uploaded_file($image_tmp, RACINE . $image_destination)) {
                                $image = new Image();
                                $data = [
                                    "id_iphone" => $id_iphone,
                                    "chemin_image" => $image_destination
                                ];
                                $image->upload($data);

                        }
                    }

                }

            public function ajouter()
                    {

                    // var_dump($_FILES);
                        // if (isset($_SESSION[Auth::USER])) {
                        //     if ($_SESSION[Auth::USER]->description === Auth::ADMIN) {
                                if (isset($_POST['save'])) {
                                    if ($this->isValid($_POST)) {
                                        unset($_POST['save']);
                                        $iphone = new iphone();
                                        if ($iphone->ajouter($_POST)) {
                                            global $oPDO;
                                            $id_iphone = $oPDO->lastInsertId();
                                            $this->uploadImage($id_iphone);
                                            header(URI . "iphones/index");
                    
                                            
                                        }else{
                                            echo "erreur";
                                        }
                        
                    //     //                     $this->uploadImage($id_iphone);
                    //     //                     header("Location: " . URI . "iphones/admin");
                    //     //                     return;

                    //     //                 } else {
                    //     //                     header("Location: " . URI . "iphones/admin");
                    //     //                     return;
                                        }
                                    }
                        $this->render("ajouter");
                                }
                    //             $this->render("ajouter");
                    //             return;
                    // //         }
                    // //     }
                    // //     header("Location: " . URI . "iphones/index");
                    // }

            public function supprimer($id_iphone)
                {
                    if (isset($_SESSION[Auth::USER])) {
                        if ($_SESSION[Auth::USER]->description === Auth::ADMIN) {
                            if (is_numeric($id_iphone)) {
                                $iphone = new iphone();
                                if ($iphone->deleteById(["id_iphone" => $id_iphone])) { // Passer l'identifiant du iphone en tant que tableau associatif
                                    header("Location: " . URI . "iphones/admin");
                                    return;
                                }
                                header("Location: " . URI . "iphones/admin");
                                return;
                            }
                            header("Location: " . URI . "iphones/admin");
                            return;
                        }
                    }
                    header("Location: " . URI . "iphones/index");
                }



                public function modifier($id_iphone)
                {
                    // Vérifiez si l'utilisateur est administrateur
                    if (!isset($_SESSION[Auth::USER]) || $_SESSION[Auth::USER]->description !== Auth::ADMIN) {
                        header("Location: " . URI . "iphones/index");
                        return;
                    }
                
                    // Vérifiez si le formulaire est soumis
                    if (isset($_POST['modifier'])) {
                        unset($_POST['modifier']);
                        // Effectuez la validation des données du formulaire (vous devez implémenter cette méthode)
                        if ($this->isValid($_POST)) {
                            // Créez un objet iphone
                            $iphone = new iphone();
                            // Mettez à jour les données du iphone dans la base de données
                            if ($iphone->modifier($_POST)) {
                                // Redirigez l'utilisateur vers la page d'administration après la modification
                                header("Location: " . URI . "iphones/admin");
                                return;
                            } else {
                                // En cas d'erreur lors de la modification, affichez un message d'erreur
                                echo "Erreur lors de la modification du iphone.";
                                return;
                            }
                        }
                    }
                
                    // Récupérez les détails du iphone à modifier
                    $iphone = new iphone();
                    $iphoneDetails = $iphone->lire(["id_iphone" => $id_iphone]);
                
                    // Vérifiez si le iphone existe
                    if (!$iphoneDetails) {
                        // Redirigez l'utilisateur vers la page d'administration si le iphone n'existe pas
                        header("Location: " . URI . "iphones/admin");
                        return;
                    }
                
                    // Chargez la vue du formulaire de modification avec les détails du iphone
                    $this->render('modifier', compact("iphoneDetails"));
                }
            
                public function modifierAction()
                {
                    if (isset($_POST['modifier'])) {
                        if ($this->isValid($_POST)) {
                            $iphone = new iphone();
                            // Mettre à jour les détails du iphone dans la base de données
                            if ($iphone->modifier($_POST)) {
                                // Rediriger vers la page d'administration après la modification
                                header("Location: " . URI . "iphones/admin");
                                return;
                            } else {
                                echo "Erreur lors de la modification du iphone.";
                            }
                        }
                    }
                    // Si la soumission du formulaire échoue ou si les données ne sont pas valides, rediriger vers la page de modification avec un message d'erreur.
                    header("Location: " . URI . "iphones/modifier/" . $_POST['id_iphone'] . "?error=true");
                }

            }
