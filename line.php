 <?php
  

function send_LINE($msg){
 $access_token = 'EQ0i81v1ucsMS+5ON9HDk4QuMJpJnczA+9Ewe48tzQaDGd6TeDgdF0g+aUGJse/KmP4t48KAvFvUa520FEGkS+qn+nfP9UHHHDqK4BoyrhtCgxHIKzReMrUknWq95Pg75wTn06YQZP3Rf55GnGHeygdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'af0a7c71de4804ca7ec9c9a26e064260',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
