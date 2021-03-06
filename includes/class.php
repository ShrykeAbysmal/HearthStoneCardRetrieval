<?
function createAccessToken($apiKey, $apiSecret, $region = 'us') {
    $curl_handle = curl_init();
    try {
      curl_setopt($curl_handle, CURLOPT_URL, "https://$region.battle.net/oauth/token");
      curl_setopt($curl_handle, CURLOPT_POSTFIELDS, ['grant_type' => 'client_credentials']);
      curl_setopt($curl_handle, CURLOPT_USERPWD, $apiKey . ':' . $apiSecret);
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl_handle, CURLOPT_HTTPHEADER, ['Content-Type: multipart/form-data']);
      $response = curl_exec($curl_handle);
      $status = curl_getinfo($curl_handle, CURLINFO_HTTP_CODE);
        
      if ($status !== 200) {
        throw new Exception('Failed to create client_credentials access token.');
      }
      return json_decode($response)->access_token;
    } finally {
      curl_close($curl_handle);
    }
  }






?>