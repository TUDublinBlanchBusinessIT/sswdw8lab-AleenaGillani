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

    public function getDiscount()
    {
        $yearsNoClaims = $this->getTotalYearsNoClaims();

        if (($yearsNoClaims >= 3)&& ($yearsNoClaims <= 5)){
            return 10;
        } elseif ($yearsNoClaims > 5) {
            return 15; 
        } else {
            return 0; 
        }

    }

    public function getDiscountedPremium() 
    {
        $discount = $this->getDiscount();
        return $this-> yearlyPremium * ($discount / 100);
       
    }   

}   