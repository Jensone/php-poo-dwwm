<?php
/*
 * Classe représentant un utilisateur
 */

class Utilisateur
{
    public string $nom;
    public string $email;
    public string $identifiant;
    public DateTime $dateInscription;


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of nom + identifiant
     */
    public function getNomIdentifiant()
    {
        return $this->nom . ' (' . $this->identifiant . ')';
    }

    /**
     * Get th value of nom + dateInscription
     */
    public function getNomDateInscription() 
    {
        return $this->nom 
            . ' (inscit(e) depuis le ' 
            . $this->dateInscription->format('d/m/Y') 
            . ')';
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of identifiant
     */ 
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set the value of identifiant
     *
     * @return  self
     */ 
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get the value of dateInscription
     */ 
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set the value of dateInscription
     *
     * @return  self
     */ 
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }
}
