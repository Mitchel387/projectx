<?php

function insert() {
    include ("database/dbconnect.php");

    //insert
    $begin = "Week " . $_POST['begin'];
    $eind = 'Week ' . $_POST['eind'];
    $jaar = $_POST['jaar'];
    $bedrag = $_POST['total'];

    $insert = $conn->prepare("INSERT INTO `betalingen`(`begin`, `eind`, `jaar`, `bedrag`) VALUES (:begin, :eind, :jaar, :bedrag)");
    $insert->bindParam(":begin", $begin);
    $insert->bindParam(":eind", $eind);
    $insert->bindParam(":jaar", $jaar);
    $insert->bindParam(":bedrag", $bedrag);
    $insert->execute();

    echo "De gegevens zijn opgeslagen in de database";
}