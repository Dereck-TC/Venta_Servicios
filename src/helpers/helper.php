<?php
// function to consume services by curl.
// @param $route: the route to consume.
// @param $method: the method to use.
// @param $data: the data to send.
function callToService($route, $method, $data, $headers = null)
{
    $url = 'http://fpr.carlocordova.com/api/' . $route;
    $curl = curl_init($url);

    if (isset($data)) {
        $payload = json_encode($data);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
    }

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        $headers
    ));

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = json_decode(curl_exec($curl));

    curl_close($curl);

    return $response;
}
