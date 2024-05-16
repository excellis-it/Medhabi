<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u$r07af9ca93e52abb5cc5c8b841e22bb19&secretKey=5bfd47820e035b5d70f5a9f9c217bd6048f8e88e',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'[
    {
        "Attribute": "EmailAddress",
        "Value": "'.$_POST['email'].'"
    },
    {
        "Attribute": "FirstName",
        "Value": "'.$_POST['firstname'].'"
    },
    {
        "Attribute": "Phone",
        "Value": "'.$_POST['phone'].'"
    },
    {
      "Attribute": "mx_City",
      "Value": "'.$_POST['city'].'"
    },
    {
        "Attribute": "Source",
        "Value": "Website"
     },
    {
        "Attribute": "SourceCampaign",
        "Value": "https://www.msu.edu.in/courses"
    },
    {
        "Attribute": "mx_Programme",
        "Value": "'.$_POST['programme'].'"
     },
]',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));
// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;

$response = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
// echo $response;


if ($httpcode == 200) {
    
  header('Location: https://www.msu.edu.in/thank-you'); 
    exit; 
} else {
    echo "<script>alert('You Email ID Already Exists Please Try Another Email Id.'); window.history.back();</script>";
    exit;
}


?>