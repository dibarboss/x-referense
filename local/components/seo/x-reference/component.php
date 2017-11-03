<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;
$url = $APPLICATION->GetCurDir();

if ($curl = curl_init()) {
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    curl_setopt($curl, CURLOPT_URL, $arParams['url'] . '?url=' . $url . '&project_id=' . $arParams['project_id'] . '&key=' . $arParams['key']);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_DNS_CACHE_TIMEOUT, 3);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
    $out = curl_exec($curl);
    curl_close($curl);
    $out = json_decode($out, TRUE);
    if (!empty($out)) {
        foreach ($out as $value) {
            $item['NAME'] = $value['anchor'];
            $item['LINK'] = $value['url'];
            $arResult[] = $item;
        }

        $this->IncludeComponentTemplate();
    }
}