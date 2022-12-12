<?

session_start();

$pages = [
    'users' => [
        'name' => 'Пользователи',
        'icon' => 'fa-solid fa-user-group'
    ],
    'income' => [
        'name' => 'Доходы',
        'icon' => 'fa-solid fa-plus'
    ],    
    'consumption' => [
        'name' => 'Расходы',
        'icon' => 'fa-solid fa-minus'
    ],    
    'table' => [
        'name' => 'Таблица',
        'icon' => 'fa-solid fa-table-list'
    ],
];


$route = $_GET['route'] ? $_GET['route'] : 'main';


