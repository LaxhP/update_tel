<?php

class update{
    public $codeCivilite;
    public $nomApprenant;
    public $prenomApprenant;
    public $adr1;
    public $cp;
    public $ville;
    public $codeCommune;
    public $tel1;
    public $tel2;
    public $email;
    public $dateNaissance;
    //public $lieuNaissance;
    //public $codePaysNaissance;
    public $codeNationalite;
    public $estReconnuHandicape;


    /**
     * Get the value of codeCivilite
     */
    public function getCodeCivilite()
    {
        return $this->codeCivilite;
    }

    /**
     * Set the value of codeCivilite
     */
    public function setCodeCivilite($codeCivilite): self
    {
        $this->codeCivilite = $codeCivilite;

        return $this;
    }

    /**
     * Get the value of nomApprenant
     */
    public function getNomApprenant()
    {
        return $this->nomApprenant;
    }

    /**
     * Set the value of nomApprenant
     */
    public function setNomApprenant($nomApprenant): self
    {
        $this->nomApprenant = $nomApprenant;

        return $this;
    }

    /**
     * Get the value of prenomApprenant
     */
    public function getPrenomApprenant()
    {
        return $this->prenomApprenant;
    }

    /**
     * Set the value of prenomApprenant
     */
    public function setPrenomApprenant($prenomApprenant): self
    {
        $this->prenomApprenant = $prenomApprenant;

        return $this;
    }

    /**
     * Get the value of adr1
     */
    public function getAdr1()
    {
        return $this->adr1;
    }

    /**
     * Set the value of adr1
     */
    public function setAdr1($adr1): self
    {
        $this->adr1 = $adr1;

        return $this;
    }

    /**
     * Get the value of cp
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set the value of cp
     */
    public function setCp($cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get the value of ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     */
    public function setVille($ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of codeCommune
     */
    public function getCodeCommune()
    {
        return $this->codeCommune;
    }

    /**
     * Set the value of codeCommune
     */
    public function setCodeCommune($codeCommune): self
    {
        $this->codeCommune = $codeCommune;

        return $this;
    }

    /**
     * Get the value of tel1
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set the value of tel1
     */
    public function setTel1($tel1): self
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get the value of tel2
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set the value of tel2
     */
    public function setTel2($tel2): self
    {
        $this->tel2 = $tel2;

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
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     */
    public function setDateNaissance($dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get the value of lieuNaissance
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * Set the value of lieuNaissance
     */
    public function setLieuNaissance($lieuNaissance): self
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    /**
     * Get the value of codePaysNaissance
     */
    public function getCodePaysNaissance()
    {
        return $this->codePaysNaissance;
    }

    /**
     * Set the value of codePaysNaissance
     */
    public function setCodePaysNaissance($codePaysNaissance): self
    {
        $this->codePaysNaissance = $codePaysNaissance;

        return $this;
    }

    /**
     * Get the value of codeNationalite
     */
    public function getCodeNationalite()
    {
        return $this->codeNationalite;
    }

    /**
     * Set the value of codeNationalite
     */
    public function setCodeNationalite($codeNationalite): self
    {
        $this->codeNationalite = $codeNationalite;

        return $this;
    }

    /**
     * Get the value of estReconnuHandicape
     */
    public function getEstReconnuHandicape()
    {
        return $this->estReconnuHandicape;
    }

    /**
     * Set the value of estReconnuHandicape
     */
    public function setEstReconnuHandicape($estReconnuHandicape): self
    {
        $this->estReconnuHandicape = $estReconnuHandicape;

        return $this;
    }
}


?>