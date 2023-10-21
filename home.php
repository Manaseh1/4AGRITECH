
<?php
require 'vendor/autoload.php';
include("./navbar.php");
$api_key = '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';

// The API endpoint
$endpoint = 'https://api.openai.com/v1/engines/davinci/completions';

// Data to send in the request
$data = array(
  
    'prompt' => 'you are a farm adviser and manager that offers farming tips to farmers on the 4agritechplatform.Provide a tip for today:',
    'max_tokens' => 50,
);

// Set up cURL
$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $api_key,
    'Content-Type: application/json',
));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Execute the request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Handle the API response
if ($response) {
    $result = json_decode($response, true);
    if (isset($result['choices'][0]['text'])) {
        $output = $result['choices'][0]['text'];
        echo $output;
    } else {
        echo 'No valid response received from OpenAI API.';
    }
} else {
    echo 'API request failed.';
}
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username   = "sandbox";
$apiKey     = "ddf42d1fbc5ad6b1da9800d2a0202a8f841ce5c4eb7c7a5a009cb0783470e83d";

// Initialize the SDK
$AT         = new AfricasTalking($username, $apiKey);

// Get the SMS service
$sms        = $AT->sms();

// Set the numbers you want to send to in international format
$recipients = "+254791037763";

// Set your message
$message    = "I'm a lumberjack and its ok, I sleep all night and I work all day";

// Set your shortCode or senderId
$from       = "myShortCode or mySenderId";

try {
    // Thats it, hit send and we'll take care of the rest
    $result = $sms->send([
        'to'      => $recipients,
        'message' => $message,
        'from'    => $from
    ]);

    print_r($result);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}
?>
<div class="row">
    <!-- start -->
    <div class="col l3 m6 s12">
      <div class="card">
        <div class="card-image ">
          <img src="./imgs/price.avif">
          <span class="card-title black-text">Prices</span>
        </div>
        <div class="card-content">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis veniam veritatis aut, nihil tenetur vero est doloribus obcaecati incidunt quo voluptatem eaque asperiores animi illum ex maiores quisquam in! Minima!
      </p>
        </div>
        <div class="card-action">
          <a href="price.php">learn more ...</a>
        </div>
        
      </div>

      
    </div>
    <!-- end of one card -->
    <div class="col l3 m6 s12">
      <div class="card">
        <div class="card-image ">
          <img src="./imgs//weather.avif">
          <span class="card-title b;ie-text">Weather</span>
        </div>
        <div class="card-content">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis veniam veritatis aut, nihil tenetur vero est doloribus obcaecati incidunt quo voluptatem eaque asperiores animi illum ex maiores quisquam in! Minima!
      </p>
        </div>
        <div class="card-action">
          <a href="weather.php">This is a link</a>
        </div>
        
      </div>

      
    </div>

    <div class="col l3 m6 s12">
      <div class="card">
        <div class="card-image ">
          <img src="./imgs/tips.jpg">
          <span class="card-title black-text">Tips</span>
        </div>
        <div class="card-content">
          <h3>Yout tip for the day</h3>
          <p><?php echo $output; ?></p>
         
        </div>
        <div class="card-action">
          <a href="tips.php">This is a link</a>
        </div>
        
      </div>

      
    </div>
    <div class="col l3 m6 s12">
      <div class="card">
        <div class="card-image ">
          <img src="./imgs/recomend.avif">
          <span class="card-title red-text">Recomended crop</span>
        </div>
        <div class="card-content">
          <p >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis veniam veritatis aut, nihil tenetur vero est doloribus obcaecati incidunt quo voluptatem eaque asperiores animi illum ex maiores quisquam in! Minima!
      </p>
        </div>
        <div class="card-action">
          <a href="crops.php">This is a link</a>
        </div>
        
      </div>

      
    </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  