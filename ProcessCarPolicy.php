<?php

include("CarPolicy.php");



$policyNumber = $_POST['policyNumber'];
$yearlyPremium = $_POST['yearlyPremium'];
$dateOfLastClaim = $_POST['dateOfLastClaim'];

$policy = new CarPolicy($policyNumber, $yearlyPremium);
$policy->setDateOfLastClaim($dateOfLastClaim);

// Display the initial premium and the discounted premium
echo "Initial Premium: $" . $policy->yearlyPremium . "<br>";
echo "Discounted Premium: $" . $policy->getDiscountedPremium() . "<br>";


?>