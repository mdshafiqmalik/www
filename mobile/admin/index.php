<?php

$queryString = http_build_query([
  'access_key' => 'f095489575083a11d59ac75e9bf3688b',
  'sort' => 'popularity',
]);

$ch = curl_init(sprintf('%s?%s', 'https://api.mediastack.com/v1/news', $queryString));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$json = curl_exec($ch);

curl_close($ch);

$apiResult = json_decode($json, true);

print_r($apiResult);
  ?>
