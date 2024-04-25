<?php

include 'functions.php';

if (!empty($_POST)){

  $data['success'] = true;
  $_POST  = multiDimensionalArrayMap('cleanEvilTags', $_POST);
  $_POST  = multiDimensionalArrayMap('cleanData', $_POST);

  //your email adress 
  $emailTo ="antonio.buttiglione@gmail.com"; //"yourmail@yoursite.com";

  //from email adress
  $emailFrom ="info@abvideomaker.com"; //"contact@yoursite.com";

  //email subject
  $emailSubject = "Info AB Video Maker";

  $name = $_POST["name"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];
  if($name == "")
   $data['success'] = false;
 
 if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
   $data['success'] = false;


 if($comment == "")
   $data['success'] = false;

  $captcha;
  if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
  }
  if(!$captcha) {
    echo '<h2>reCAPTCHA non checkato!</h2>';
    $data['success'] = false;
    exit;
  }
  //inserire nella variable $secretKey la SECRET KEY fornitaci da Google reCAPTCHA
  $secretKey = "AIzaSyAwK5h-tjFszr2ew_uxZHjt4FOkedCTNnw";
  $ip = $_SERVER['REMOTE_ADDR'];
  $response=file_get_contents("https://recaptchaenterprise.googleapis.com?secret=".$secretKey."&amp;response=".$captcha."&amp;remoteip=".$ip);
  $responseKeys = json_decode($response,true);
  echo $responseKeys["success"]."<br>".$response;
  if(intval($responseKeys["success"]) !== 1) {
    echo '<h2>ROBOT!!</h2>';
    $data['success'] = false;
  } else {
    echo '<h2>Thank you for compiling the form.</h2>';
    $data['success'] = true;
  }

 if($data['success'] == true){

  $message = "NAME: $name<br>
  EMAIL: $email<br>
  COMMENT: $comment";


  $headers = "MIME-Version: 1.0" . "\r\n"; 
  $headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
  $headers .= "From: <$emailFrom>" . "\r\n";
  mail($emailTo, $emailSubject, $message, $headers);

  $data['success'] = true;
  echo json_encode($data);
}
}

// Include Google Cloud dependencies using Composer
require 'vendor/autoload.php';

use Google\Cloud\RecaptchaEnterprise\V1\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\TokenProperties\InvalidReason;

/**
* Create an assessment to analyze the risk of a UI action.
* @param string $siteKey The key ID for the reCAPTCHA key (See https://cloud.google.com/recaptcha-enterprise/docs/create-key)
* @param string $token The user's response token for which you want to receive a reCAPTCHA score. (See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment#retrieve_token)
* @param string $project Your Google Cloud project ID
*/
function create_assessment(
   string $siteKey,
   string $token,
   string $project
): void {
    // TODO: To avoid memory issues, move this client generation outside
    // of this example, and cache it (recommended) or call client.close()
    // before exiting this method.
   $client = new RecaptchaEnterpriseServiceClient();
   $projectName = $client->projectName($project);

   $event = (new Event())
       ->setSiteKey($siteKey)
       ->setToken($token);

   $assessment = (new Assessment())
       ->setEvent($event);

   try {
       $response = $client->createAssessment(
           $projectName,
           $assessment
       );

       // You can use the score only if the assessment is valid,
       // In case of failures like re-submitting the same token, getValid() will return false
       if ($response->getTokenProperties()->getValid() == false) {
           printf('The CreateAssessment() call failed because the token was invalid for the following reason: ');
           printf(InvalidReason::name($response->getTokenProperties()->getInvalidReason()));
       } else {
           printf('The score for the protection action is:');
           printf($response->getRiskAnalysis()->getScore());

           // Optional: You can use the following methods to get more data about the token
           // Action name provided at token generation.
           // printf($response->getTokenProperties()->getAction() . PHP_EOL);
           // The timestamp corresponding to the generation of the token.
           // printf($response->getTokenProperties()->getCreateTime()->getSeconds() . PHP_EOL);
           // The hostname of the page on which the token was generated.
           // printf($response->getTokenProperties()->getHostname() . PHP_EOL);
       }
   } catch (exception $e) {
       printf('CreateAssessment() call failed with the following error: ');
       printf($e);
   }
}

// TODO(Developer): Replace the following before running the sample
create_assessment(
   'YOUR_RECAPTCHA_SITE_KEY',
   'YOUR_USER_RESPONSE_TOKEN',
   'YOUR_GOOGLE_CLOUD_PROJECT_ID'
);
?>