<?php

    require __DIR__ . "/vendor/autoload.php";

    use notification\email;

    $novoEmail = new email;
    $novoEmail->sendEmail();