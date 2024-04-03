<?php
    $answer = "Данны успешно добавлены.";

    $fio = $_REQUEST['fio'];
    $number = $_REQUEST['number'];
    $email = $_REQUEST['email'];
    $review = $_REQUEST['review'];

    if($fio != '' && $number != '' && $email != '' && $review != '') {
        $mas = [
            'FIO' => $fio,
            'Number' => $number,
            'Email' => $email,
            'Review' => $review
        ];
        
        $file = file_get_contents('data.json');
        if($file != null) $data[] = json_decode($file, true);
        
        $data[] = $mas; // $data.array_push($mas)        
        
        $json_data = json_encode($data, JSON_UNESCAPED_UNICODE);

        if(!file_put_contents('data.json', $json_data)) $answer = "Ошибка добавления данных.";

        // if(file_put_contents('data.json', $json_data . "\n", FILE_APPEND)) echo "Данные успешно добавлены.";
        // else echo "Ошибка добавления данных.";
    }
    else $answer = "Ошибка заполнения. Введите все данные.";
    
    echo $answer;
?>