<?php
include '../init.php';

$message = $_POST['message'];

$parents_info = "Данные родителя: \n";
$child_info = "\nДанные ребенка:\n";

if (!empty($message['parent'])){
    foreach ($message['parent'] as $key => $value){
        switch ($key){
            case 'name': $attr_name = 'Имя';
                break;
            case 'surname': $attr_name = 'Фамилия';
                break;
            case 'phone': $attr_name = 'Телефон';
                break;
            default : $attr_name = 'ATTR';
                break;
        }
        if (!empty($value)){
            $parents_info .= $attr_name .': '.$value ."\n";
        } else {
            continue;
        }
    }
} else {
    echo "Данные родителя не заполнены";
}
if (!empty($message['child'])){
    foreach ($message['child'] as $key => $value){
        switch ($key){
            case 'name': $attr_name = 'Имя';
                break;
            case 'surname': $attr_name = 'Фамилия';
                break;
            case 'birthdate': $attr_name = 'Дата рождения';
                break;
            default: $attr_name = 'ATTR';
                break;
        }
        if (!empty($value)){
            $child_info .= $attr_name .': '.$value ."\n";
        } else {
            continue;
        }
    }
} else {
    echo 'Данные о ребенке не заполнены';
}
$message = $parents_info . $child_info;

$telegram->sendMessage($message);
