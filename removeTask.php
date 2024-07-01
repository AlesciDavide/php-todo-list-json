<?php 
echo $_POST['delete'];



    if($_POST['delete'] == 'no'){
        header("location: ./index.php");

    }else{

        $data = file_get_contents('./db/todoListAdditions.json');
        $data =json_decode($data, true);
    
        unset($data[$_POST['delete']]);
    
        $jsonData = json_encode($data);
    
        file_put_contents("./db/todoListAdditions.json", $jsonData);
    
        header("location: ./index.php");
    }

    
    






?>