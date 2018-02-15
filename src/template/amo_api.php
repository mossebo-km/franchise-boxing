<meta charset="UTF-8">
<?php

// Использовать ее вместо vendor/autoload.php
require_once __DIR__ . '/assets/amocrm.phar';

$data['contact_name'] = $_GET['contact_name'];
$data['contact_phone'] = $_GET['contact_phone'];
$data['contact_email'] = $_GET['contact_email'];
$data['contact_sity'] = $_GET['contact_sity'];
$data['form_name'] = $_GET['form_name'];

// utm
$data['utm_source'] = isset($_COOKIE['utm_source']) ? $_COOKIE['utm_source'] : '';
$data['utm_medium'] = isset($_COOKIE['utm_medium']) ? $_COOKIE['utm_medium'] : '';
$data['utm_campaign'] = isset($_COOKIE['utm_campaign']) ? $_COOKIE['utm_campaign'] : '';
$data['utm_content'] = isset($_COOKIE['utm_content']) ? $_COOKIE['utm_content'] : '';
$data['utm_term'] = isset($_COOKIE['utm_term']) ? $_COOKIE['utm_term'] : '';


try {
    // Создание клиента
    $amo = new \AmoCRM\Client('mossebokm', 'code@mossebo.ru', 'a8ec1408de98a8a05c18ca0ee3624720');

    // SUBDOMAIN может принимать как часть перед .amocrm.ru,
    // так и домен целиком например test.amocrm.ru или test.amocrm.com


    //var_dump($amo->lead->apiList(['query' => '15092950',]));
    //var_dump($amo->contact->apiList(['query' => 'ФИО',]));


    // Создаем лид
    $lead = $amo->lead;
    $lead['name'] = 'Заявка на упаковку ' . $data['contact_sity'];
    $lead['pipeline_id'] = 978055; // Воронка "Упаковка";
    $lead['tags'] = ['лендинг_по_упаковке', $data['form_name']];
    $lead->addCustomField(442302, $data['contact_sity']);
    $lead->addCustomField(428660, [$data['utm_source'] . ' ' . $data['utm_medium'] . ' ' . $data['utm_campaign'] . ' ' . $data['utm_content'] . ' ' . $data['utm_term']]);
    $lead_id = $lead->apiAdd();

    //Создаем контакт
    $contact = $amo->contact;
    $contact['name'] = $data['contact_name'];
    $contact->addCustomField(72158, [
        [
            $data['contact_phone'], '165082'
        ]
    ]);
    $contact->addCustomField(72160, $data['contact_email']);
    $contact->addCustomField(137863, $data['contact_sity']);
    $contact_id = $contact->apiAdd();

    // Связываем лид с контактом
    $link = $amo->links;
    $link['from'] = 'leads';
    $link['from_id'] = $lead_id;
    $link['to'] = 'contacts';
    $link['to_id'] = $contact_id;
    var_dump($link->apiLink());


} catch (\AmoCRM\Exception $e) {
    printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
}
?>
