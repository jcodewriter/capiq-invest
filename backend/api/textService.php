<?php

function getThankyouMessage($data, $payto){
    $companyName = htmlspecialchars($data['companyName']);
    $offerTitle = htmlspecialchars($data['offerTitle']);
    $totalPay = htmlspecialchars($data['totalPay']);
    return "
    <strong>Tack för visat intresse av våra aktier</strong> <br> <br>
    <strong>Du har visat intresse för $companyName</strong> <br>
    <strong>$offerTitle</strong> <br>
    <strong>Utdelning kommer att ske enligt villkor till angivet konto.</strong> <br> <br>

    För att bli tilldelad dina aktier, Vänligen följ betalinstruktionerna nedan. <br> <br>

    Betala in <strong>$totalPay</strong> <br>
    Till <strong>$payto</strong> <br>

    Vill du betala med swish kan du ange swishnummer 123 498 32 35 <br>
    Eller skanna QR koden nedan <br>
    <img src=\"/Qrcode/swicgqr.png\">
 




    Ange ditt personnummer som betalningsreferens 12 siffror 
    ";
}