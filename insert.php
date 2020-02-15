<?php

    //header("Location: index.html");

    include "connect.php";
    include "index.php";

    $cdempgrp = $_POST['CDEMPGRP'];

    //classificacao
    $cdfilial = $_POST['CDFILIAL'];
    $dsfilial = $_POST['DSFILIAL'];
    /*
    $cdespecie = $_POST['CDESPECIE'];
    $dsespecie = $_POST['DSESPECIE'];
    $cdconta = $_POST['CDCONTA'];
    $dsconta = $_POST['DSCONTA'];
    $cdcc = $_POST['CDCC'];
    $dscc = $_POST['DSCC'];
    $cdcrp = $_POST['CDCRP'];
    $dscrp = $_POST['DSCRP'];
    $cdlocal = $_POST['CDLOCAL'];
    $dslocal = $_POST['DSLOCAL'];
    $cdprj = $_POST['CDPRJ'];
    $dsprj = $_POST['DSPRJ'];
    $cdlinhaproducao = $_POST['CDLINHAPRODUCAO'];
    $dslinhaproducao = $_POST['DSLINHAPRODUCAO'];
    $cdps = $_POST['CDPS'];
    $dsps = $_POST['DSPS'];
    */

    //inventario
    $nrbem = $_POST['NRBEM'];
    //$nafa = $_POST['NAFA'];
    //$tag = $_POST['TAG'];
    $vidautil = $_POST['VIDAUTIL'];
    $dsbem = $_POST['DSBEM'];
    $marca = $_POST['DSMARCA'];
    $modelo = $_POST['DSMODELO'];
    $nrserie = $_POST['NRSERIE'];

    //complemento
    $dsdimensao = $_POST['DSDIMENSAO'];
    $dsandar = $_POST['DSANDAR'];
    $dscapacidade = $_POST['DSCAPACIDADE'];
    $nrrpm = $_POST['NRRPM'];
    $dspotencia = $_POST['DSPOTENCIA'];
    $dsobs = $_POST['DSOBS'];

    //renomeando img
    $foto1 = $cdempgrp . '_' . $cdfilial . '_' . $nrbem . '_1.png';
    $destino = 'imagens/' . $foto1;
    $arquivo_tmp = $_FILES['IMAGEM']['tmp_name'];
    move_uploaded_file( $arquivo_tmp, $destino  );

    $foto2 = $cdempgrp . '_' . $cdfilial . '_' . $nrbem . '_2.png';
    $destino = 'imagens/' . $foto2;
    $arquivo_tmp = $_FILES['IMAGEM2']['tmp_name'];
    move_uploaded_file( $arquivo_tmp, $destino  );
    
    $foto3 = $cdempgrp . '_' . $cdfilial . '_' . $nrbem . '_3.png';
    $destino = 'imagens/' . $foto3;
    $arquivo_tmp = $_FILES['IMAGEM3']['tmp_name'];
    move_uploaded_file( $arquivo_tmp, $destino  );

    $foto4 = $cdempgrp . '_' . $cdfilial . '_' . $nrbem . '_4.png';
    $destino = 'imagens/' . $foto4;
    $arquivo_tmp = $_FILES['IMAGEM4']['tmp_name'];
    move_uploaded_file( $arquivo_tmp, $destino  );

/*
    $result = mysqli_query($link, "insert into COLETAWEB(CDEMPGRP, CDFILIAL, DSFILIAL, CDESPECIE, DSESPECIE, CDCONTA, DSCONTA, CDCC, DSCC, CDCRP, DSCRP, 
    CDLOCAL, DSLOCAL, CDPRJ, DSPRJ, CDLINHAPRODUCAO, DSLINHAPRODUCAO, CDPS, DSPS, NRBEMNOVO, NRBEM, DSTAGBEM, VIDAUTIL, DSBEM, DSMARCA, DSMODELO, 
    NRSERIE, DSDIMENSAO, DSANDAR, DSCAPACIDADE, NRRPM, DSPOTENCIA, DSOBS) values('$cdempgrp', '$cdfilial', '$dsfilial', '$cdespecie', '$dsespecie', '$cdconta',
    '$dsconta', '$cdcc', '$dscc', '$cdcrp', '$dscrp', '$cdlocal', '$dslocal', '$cdprj', '$dsprj', '$cdlinhaproducao', '$dslinhaproducao', '$cdps', '$dsps', 
    '$nrbem', '$nafa', '$tag', '$vidautil', '$dsbem', '$marca', '$modelo', '$nrserie', '$dsdimensao', '$dsandar', '$dscapacidade', '$nrrpm', '$dspotencia', '$dsobs' )");
*/
     $result = mysqli_query($link, "insert into COLETAWEB(CDEMPGRP, CDFILIAL, DSFILIAL, NRBEMNOVO, VIDAUTIL, DSBEM, DSMARCA, DSMODELO, 
    NRSERIE, DSDIMENSAO, DSANDAR, DSCAPACIDADE, NRRPM, DSPOTENCIA, DSOBS, FOTO1, FOTO2, FOTO3, FOTO4) values('$cdempgrp', '$cdfilial', '$dsfilial', '$nrbem', '$vidautil', '$dsbem', '$marca', '$modelo', 
    '$nrserie', '$dsdimensao', '$dsandar', '$dscapacidade', '$nrrpm', '$dspotencia', '$dsobs', '$foto1', '$foto2', '$foto3', '$foto4' )");
    
    if ($result)
    {
    ?>
    <html>
    <body>
        <script>window.location='index.html';alert('Item enviado com sucesso');</script>
        <!-- <icript>alert('Item enviado com sucesso');</script> -->
    <body>
    </html>
    <?php
    }
    else
    {
    ?>
            <html>
    <body>
        <script>alert('Falha no envio do item');</script>
    <body>
    </html>
    <?php
    }
?>