<?php

class Declarant {
    private $_name;
    private $_birthname;
    private $_firstname;
    private $_birthday;
    private $_addressStreet;
    private $_addressCity;
    private $_parts;
    private $_situation;
    private $_dependents;
    private $_income;
    private $_taxable;
    private $_amountOfTaxe;
    private $_referenceIncome;
    private $_spi;
    private $_facture;


    public function __construct($name, $birthname, $firstname, $birthday, $addressStreet, $addressCity, $parts, $situation, $dependents, $income, $taxable, $amountOfTaxe, $referenceIncome, $spi, $facture) {
        $this->setName($name);
        $this->setBirthname($birthname);
        $this->setFirstname($firstname);
        $this->setBirthday($birthday);
        $this->setAddressStreet($addressStreet);
        $this->setAddressCity($addressCity);
        $this->setParts($parts);
        $this->setSituation($situation);
        $this->setDependents($dependents);
        $this->setIncome($income);
        $this->setTaxable($taxable);
        $this->setAmountOfTaxe($amountOfTaxe);
        $this->setReferenceIncome($referenceIncome);
        $this->setSpi($spi);
        $this->setFacture($facture);

    }
    
        
    
    public function setName($name) {
        if (!is_string($name)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_name = $name;
    }

    public function getName() {
        return $this->_name;
    }

    public function setBirthname($birthname) {
        if (!is_string($birthname)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_birthname = $birthname;
    }

    public function getBirthname() {
        return $this->_birthname;
    }

    public function setFirstname($firstname) {
        if (!is_string($firstname)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_firstname = $firstname;
    }

    public function getFirstname() {
        return $this->_firstname;
    }

    public function setBirthday($birthday) {
        if (!is_string($birthday)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_birthday = $birthday;
    }

    public function getBirthday() {
        return $this->_birthday;
    }

    public function setAddressStreet($addressStreet) {
        if (!is_string($addressStreet)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_addressStreet = $addressStreet;
    }

    public function getAddressStreet() {
        return $this->_addressStreet;
    }

    public function setAddressCity($addressCity) {
        if (!is_string($addressCity)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_addressCity = $addressCity;
    }

    public function getAddressCity() {
        return $this->_addressCity;
    }

    public function setParts($parts) {
        if (!is_string($parts)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_parts = $parts;
    }

    public function getParts() {
        return $this->_parts;
    }

    public function setSituation($situation) {
        if (!is_string($situation)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_situation = $situation;
    }

    public function getSituation() {
        return $this->_situation;
    }

    public function setDependents($dependents) {
        if (!is_string($dependents)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_dependents = $dependents;
    }

    public function getDependents() {
        return $this->_dependents;
    }

    public function setIncome($income) {
        if (!is_string($income)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_income = $income;
    }

    public function getIncome() {
        return $this->_income;
    }

    public function setTaxable($taxable) {
        if (!is_string($taxable)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_taxable = $taxable;
    }

    public function getTaxable() {
        return $this->_taxable;
    }

    public function setAmountOfTaxe($amountOfTaxe) {
        if (!is_string($amountOfTaxe)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_amountOfTaxe = $amountOfTaxe;
    }

    public function getAmountOfTaxe() {
        return $this->_amountOfTaxe;
    }

    public function setReferenceIncome($referenceIncome) {
        if (!is_string($referenceIncome)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_referenceIncome = $referenceIncome;
    }

    public function getReferenceIncome() {
        return $this->_referenceIncome;
    }

    public function setSpi($spi) {
        if (!is_string($spi)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_spi = $spi;
    }

    public function getSpi() {
        return $this->_spi;
    }

    public function setFacture($facture) {
        if (!is_string($facture)) {
            trigger_error('Format STRING attendu', E_USER_WARNING);
            return;
        }
        $this->_facture = $facture;
    }

    public function getFacture() {
        return $this->_facture;
    }

    

}

?>