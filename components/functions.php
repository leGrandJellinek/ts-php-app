<?

session_start();

$pages = [
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




function drawTable($login) {
    include_once "./components/db.php";

    $arr = tableInfo();
    $result .= '<table class="main__table">';
    $result .= '<tr>
    <th>Тип</th>
    <th>Категория</th>
    <th>Сумма</th>
    <th>Дата</th>
    <th>Время</th>
    <th>Итого</th>
    <th>Комментарий</th>
    </tr>';
    
    foreach ($arr as $key => $value) {
        if($value['login'] == $login){
            $str = $value["sum"];
            $content = str_replace(" ", "", $str);
            $content = html_entity_decode($content);
            if($value['type'] == "Доход"){
                $totalSum = $totalSum + (int)$content;
            }elseif($value['type'] == "Расход"){
                $totalSum = $totalSum - (int)$content;
            };
            $result .= '<tr>';
            $result .= '<td>'. $value["type"] . '</td>';
            $result .= '<td>'. $value["categ"] . '</td>';
            $result .= '<td class="table-sum">'. $value["sum"] . '</td>';
            $result .= '<td>'. $value["date"] . '</td>';
            $result .= '<td>'. $value["time"] . '</td>';
            $result .= '<td>'. number_format($totalSum, 0, '', ' ') . '</td>';
            $result .= '<td>'. $value["comment"] . '</td>';
            $result .= '</tr>';
        }
    }
    $result .= '</table>';
    echo $result;
}