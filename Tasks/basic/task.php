<?php 


function calculateElectricityBill($units) {
    $totalBill = 0;

    if ($units <= 50) {
        $totalBill = $units * 2.50;
    } else {
        
        $totalBill += 50 * 2.50;

        if ($units <= 150) {
            $totalBill += ($units - 50) * 5.00;
        } else {
            
            $totalBill += 100 * 5.00;

           
            if ($units <= 250) {
                $totalBill += ($units - 150) * 6.20;
            } else {
               
                $totalBill += 100 * 6.20;

               
                $totalBill += ($units - 250) * 7.50;
            }
        }
    }

    return $totalBill;
}


$unitsConsumed = 300;
$monthlyBill = calculateElectricityBill($unitsConsumed);

echo "Monthly Electricity Bill for $unitsConsumed units: " . number_format($monthlyBill, 2) . " JOD";




?> 