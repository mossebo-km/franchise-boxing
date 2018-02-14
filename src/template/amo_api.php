<meta charset="UTF-8">
<?php

// Использовать ее вместо vendor/autoload.php
require_once __DIR__ . '/assets/amocrm.phar';

$data['contact_name'] = $_POST['contact_name'];
$data['contact_phone'] = $_POST['contact_phone'];
$data['contact_email'] = $_POST['contact_email'];
$data['contact_sity'] = $_POST['contact_sity'];
$data['form_name'] = $_POST['form_name'];


try {
    // Создание клиента
    $amo = new \AmoCRM\Client('mossebokm', 'code@mossebo.ru', 'a8ec1408de98a8a05c18ca0ee3624720');

    // SUBDOMAIN может принимать как часть перед .amocrm.ru,
    // так и домен целиком например test.amocrm.ru или test.amocrm.com


    //var_dump($amo->lead->apiList(['query' => '15083090',]));
    //var_dump($amo->contact->apiList(['query' => 'ФИО',]));

    // Создаем лид
    $lead = $amo->lead;
    $lead['name'] = 'Заявка на упаковку ' . $data['contact_sity'];
    $lead['pipeline_id'] = 978055; // Воронка "Упаковка";
    $lead['tags'] = ['лендинг_по_упаковке', 'header_form'];
    $lead->addCustomField(442302, $data['contact_sity']);
    $lead_id = $lead->apiAdd();

    //Создаем контакт
    $contact = $amo->contact;
    $contact->debug(true); // Режим отладки
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
