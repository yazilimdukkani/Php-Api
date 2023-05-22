
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    

<?php 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://jsonplaceholder.typicode.com/photos",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,

));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {




  $data = json_decode($response, true);
  echo "<pre>";
 //var_dump($data);

//echo $data[0]["title"];

foreach($data as  $value){

echo $value['url']."<br>";

}





}

?>



    </body>
</html>