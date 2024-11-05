<?php
class CarPolicy
{

private $policyNumber ="";
private $yearlyPremium ="";
private $dateOfLastClaim ="";


    public function __construct($policyNumber, $yearlyPremium)
    {
        $this->policyNumber = $policyNumber;
        $this->yearlyPremium = $yearlyPremium;

    }

    public function setDateOfLastClaim($date) 
    {
        $this->dateOfLastClaim = $date;
    }

    
    public function __toString() 
    {
        return "PN: ". $this->policyNumber;
    }


    public function getTotalYearsNoClaims()
    {
     $currentDate = new DateTime();
     $lastDate= new DateTime($this->dateOfLastClaim);
     $interval = $currentDate->diff($lastDate);
     return $interval->format("%y");
    }
}