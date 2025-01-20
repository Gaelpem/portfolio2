
<?php


class User{


    const ERROR_NOM = 'Nom incorrect'; 
    const ERROR_EMAIL = 'Email incorrect'; 

    private string $nom = ""; 
    private string $email = ""; 

    public function __construct(array $data){
        if(!empty($data["user_nom"]) && !empty($data["user_email"])){
            $this->setNom($data["user_nom"]); 
            $this->setEmail($data["user_email"]); 
        }else{
            throw new Exception("Vous devez remplir tous les champs"); 
        }
    }


    public function setName( string $nom) : void 
    {
        
    }




}


?>