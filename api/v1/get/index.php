<?php
    //headers
    header('Access-Control-Allow-Origin: *');
    if(isset($_GET["id"]) && isset($_GET["momentum"]) && isset($_GET["proficiency"]) && isset($_GET["difficulty"]) && isset($_GET["percent"]))
    {
        $params = new \stdClass();
        $params->id = $_GET["id"];
        $params->momentum = $_GET["momentum"];
        $params->proficiency = $_GET["proficiency"]; 
        $params->difficulty = $_GET["difficulty"]; 
        $params->percent = $_GET["percent"];

        
        $command = ('python C:\xampp\htdocs\api\v1\get\engine\engine.py ' . $params->id . " " . $params->momentum . " " . $params->proficiency . " ". $params->difficulty . " " .  $params->percent);
        $output = shell_exec($command);


        $output = explode('splithere', $output);
        $output = $output[1];
        $output = explode(' ', $output);
        $data = new \stdClass();
        $data->jump_prediction = strval(intval($output[0]));
        $data->predicted_ID = $output[1];
        $data->predicted_name = $output[2] . " " . $output[3] . " " . strval($output[4]);

        echo json_encode($data);
        http_response_code(200);
    }else
    {
        error("enter 5 valid parameters: momentum, proficiency, difficulty, percent, and jump");
        http_response_code(406);
    }

    function error($message)
    {
        $data = new \stdClass();
        $data->message = $message;
        echo json_encode($data);
    }
?>