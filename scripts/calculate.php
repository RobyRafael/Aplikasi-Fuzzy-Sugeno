<?php
$minDemand = $_POST['minDemand'];
$maxDemand = $_POST['maxDemand'];
$minSupply = $_POST['minSupply'];
$maxSupply = $_POST['maxSupply'];
$minProduction = $_POST['minProduction'];
$maxProduction = $_POST['maxProduction'];
$demand = $_POST['demand'];
$supply = $_POST['supply'];

// Fungsi keanggotaan untuk Permintaan
function fuzzy_demand($maxDemand, $minDemand, $demand) {
    $turun = ($maxDemand - $demand) / ($maxDemand - $minDemand);
    $naik = ($demand - $minDemand) / ($maxDemand - $minDemand);
    return ['demandTurun' => $turun, 'demandNaik' => $naik];
}

// Fungsi keanggotaan untuk Persediaan
function fuzzy_supply($maxSupply, $minSupply, $supply) {
    $sedikit = ($maxSupply - $supply) / ($maxSupply - $minSupply);
    $banyak = ($supply - $minSupply) / ($maxSupply - $minSupply);
    return ['supplySedikit' => $sedikit, 'supplyBanyak' => $banyak];
}

// Fungsi keanggotaan untuk Permintaan
$demand_fuzzy = fuzzy_demand($maxDemand, $minDemand, $demand);
$supply_fuzzy = fuzzy_supply($maxSupply, $minSupply, $supply);

// Aturan Fuzzy Sugeno
$rules = [
    'R1' => min($demand_fuzzy['demandTurun'], $supply_fuzzy['supplyBanyak']),
    'R2' => min($demand_fuzzy['demandTurun'], $supply_fuzzy['supplySedikit']),
    'R3' => min($demand_fuzzy['demandNaik'], $supply_fuzzy['supplyBanyak']),
    'R4' => min($demand_fuzzy['demandNaik'], $supply_fuzzy['supplySedikit'])
];

// Nilai produksi berdasarkan aturan
if($rules['R1'] > $rules['R2']) {
    $minRule = $rules['R2'];
} else{
    $minRule = $rules['R1'];
}

if($rules['R3'] > $rules['R4']) {
    $maxRule = $rules['R3'];
} else{
    $maxRule = $rules['R4'];
}

// Defuzzifikasi
$Z = (($minRule * $minProduction) + ($maxRule * $maxProduction)) / ($minRule + $maxRule);

//Format hasil agar hanya menampilkan 3 angka di belakang koma
$rules['R1'] = number_format($rules['R1'], 3);
$rules['R2'] = number_format($rules['R2'], 3);
$rules['R3'] = number_format($rules['R3'], 3);
$rules['R4'] = number_format($rules['R4'], 3);
$minRule = number_format($minRule, 3);
$maxRule = number_format($maxRule, 3);
$Z = number_format($Z, 3);

include 'result.php';