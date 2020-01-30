<?php

    header('Content-type: application/json');
    require('../connection/db.php');
    if(isset($_POST['date'])){

        $date = $_POST['date'];

        $queryOutletIndo = $connect->query("SELECT value FROM merchant WHERE type ='outlet' AND name ='indomaret' AND date = '".$date."' LIMIT 10");
        $queryOutletIndo->execute();
        $outletindo = $queryOutletIndo->fetchAll(PDO::FETCH_ASSOC);

        $queryUserIndo = $connect->query("SELECT value FROM merchant WHERE type ='user' AND name ='indomaret' AND date = '".$date."' LIMIT 10");
        $queryUserIndo->execute();
        $userindo = $queryUserIndo->fetchAll(PDO::FETCH_ASSOC);

        $queryTrxIndo = $connect->query("SELECT value FROM merchant WHERE type ='trx' AND name ='indomaret' AND date = '".$date."' LIMIT 10");
        $queryTrxIndo->execute();
        $trxindo = $queryTrxIndo->fetchAll(PDO::FETCH_ASSOC);

        $queryVolumeIndo = $connect->query("SELECT value FROM merchant WHERE type ='gtv' AND name ='indomaret' AND date = '".$date."' LIMIT 10");
        $queryVolumeIndo->execute();
        $gtvindo = $queryVolumeIndo->fetchAll(PDO::FETCH_ASSOC);

        $queryOutletAlfa = $connect->query("SELECT value FROM merchant WHERE type ='outlet' AND name ='alfamart' AND date = '".$date."' LIMIT 10");
        $queryOutletAlfa->execute();
        $outletalfa = $queryOutletAlfa->fetchAll(PDO::FETCH_ASSOC);

        $queryUserAlfa = $connect->query("SELECT value FROM merchant WHERE type ='user' AND name ='alfamart' AND date = '".$date."' LIMIT 10");
        $queryUserAlfa->execute();
        $useralfa = $queryUserAlfa->fetchAll(PDO::FETCH_ASSOC);

        $queryTrxAlfa = $connect->query("SELECT value FROM merchant WHERE type ='trx' AND name ='alfamart' AND date = '".$date."' LIMIT 10");
        $queryTrxAlfa->execute();
        $trxalfa = $queryTrxAlfa->fetchAll(PDO::FETCH_ASSOC);

        $queryVolumeAlfa = $connect->query("SELECT value FROM merchant WHERE type ='gtv' AND name ='alfamart' AND date = '".$date."' LIMIT 10");
        $queryVolumeAlfa->execute();
        $gtvalfa = $queryVolumeAlfa->fetchAll(PDO::FETCH_ASSOC);

        $dataMerchant = [
            "date" => $date,
            "indomaret" => [
                "outlet" => $outletindo,
                "user" => $userindo,
                "trx" => $trxindo,
                "gtv" => $gtvindo,
            ],
            "alfamart" => [
                "outlet" => $outletalfa,
                "user" => $useralfa,
                "trx" => $trxalfa,
                "gtv" => $gtvalfa
            ],
        ];
        $dataMerchant = json_encode($dataMerchant);

        echo $dataMerchant;
        
    }
