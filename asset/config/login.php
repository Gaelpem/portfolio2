<?php
class Admin {
    const ERROR_NOM = "Nom incorrect"; 
    const ERROR_EMAIL = "Email incorret"; 
    const ERROR_MDP = "Mot de passe incorrect"; 

    private string $nom = ""; 
    private string $email = ""; 
    private string $mdp = ""; 

    public function __construct(array $data){
      if(!empty($data["admin_nom"]) && !empty($data["admin_email"]) && !empty($data["admin_mdp"]))
          $this->setNom($data["admin_nom"]); 
          $this->setEmail($data["admin_email"]); 
          $this->setMdp($data["admin_mdp"]); 
    }
}