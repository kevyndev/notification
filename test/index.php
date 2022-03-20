<?php

    require __DIR__ . "/../vendor/autoload.php";

    use notification\email;

    $novoEmail = new email(
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        ''
    );
    $novoEmail->sendEmail(
        "Assunto de teste",
        "<p>Esse é um e-mail de <b>teste</b>!</p>",
        "",
        "",
        "",
        "");

    var_dump($novoEmail);