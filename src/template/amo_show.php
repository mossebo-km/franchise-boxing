<meta charset="UTF-8">

<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladstarkovsky
 * Date: 15.02.2018
 * Time: 18:48
 */

require_once __DIR__ . '/assets/amocrm.phar';


try {
    // Создание клиента
    $amo = new \AmoCRM\Client('mossebokm', 'code@mossebo.ru', 'a8ec1408de98a8a05c18ca0ee3624720');

    // SUBDOMAIN может принимать как часть перед .amocrm.ru,
    // так и домен целиком например test.amocrm.ru или test.amocrm.com


    var_dump($amo->lead->apiList(['query' => '15092950',]));
    //var_dump($amo->contact->apiList(['query' => 'ФИО',]));



} catch (\AmoCRM\Exception $e) {
    printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
}

?>
