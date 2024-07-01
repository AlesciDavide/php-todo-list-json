<?php 

if(isset($_POST['task']) && isset($_POST['description']) && isset($_POST['completato'])){

    $data = file_get_contents('./db/todoListAdditions.json');
    $data =json_decode($data, true);

    $data[] = [
        "task" => $_POST['task'],
        "description" => $_POST['description'],
        "completato" => $_POST['completato'],

    ];

    $jsonData = json_encode($data);

    file_put_contents("./db/todoListAdditions.json", $jsonData);

    header("location: ./index.php");
}else{
    http_response_code(404);
};




?>