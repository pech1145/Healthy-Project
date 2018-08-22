<?php
if(isset($_POST['meg']))
{ $url = 'https://watson-api-explorer.mybluemix.net/assistant/api/v1/workspaces/60378c5f-e2f9-427c-a582-ddd08f3a848d/message?version=2018-02-16&nodes_visited_details=false';
    $username = "1dbaa6dd-68fc-49a2-bf19-34f6bb01ae56"; $password = "2qkv5Hg0jSmQ";
    $ch = curl_init(); $json = ['input'=> ['text'=> $_POST['meg']],"alternate_intents"=> true];
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($json));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Content-Length: ' . strlen(json_encode($json)))
    );
    $output = curl_exec($ch);
    $info = curl_getinfo($ch); $teee = ['test'=>'yee'];
    echo $output;
//return $_POST['meg'];
}else{ return 'null';
}
?>

