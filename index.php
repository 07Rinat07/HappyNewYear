<?php

function secondToDate($month, $day) {
    // Текущая дата и время
    $currentDate = date('Y-m-d H:i:s');
    $currentDateArray = explode('-', date('Y-m-d-H-i-s', strtotime($currentDate)));

    // Определяем год следующего события
    if ($currentDateArray[1] > $month || ($currentDateArray[1] == $month && $currentDateArray[2] > $day)) {
        $year = $currentDateArray[0] + 1;
    } elseif ($currentDateArray[1] == $month && $currentDateArray[2] == $day) {
        return 0; // Если сегодня тот самый день
    } else {
        $year = $currentDateArray[0];
    }

    // Формируем даты
    $dateFrom = date_create($currentDate);
    $dateTo = date_create("$year-$month-$day");

    // Разница между датами
    $diff = date_diff($dateTo, $dateFrom);

    // Переводим разницу в секунды
    return ($diff->y * 365 * 24 * 60 * 60) +
           ($diff->m * 30 * 24 * 60 * 60) +
           ($diff->d * 24 * 60 * 60) +
           ($diff->h * 60 * 60) +
           ($diff->i * 60) +
           $diff->s;
}

// Пример использования
$secondTo = secondToDate(12, 24);

// Получаем текущую дату
$currentDate = date('m.d');
$currentDateArray = explode('.', $currentDate); 

$currentMonth = $currentDateArray[0];
$currentDay = $currentDateArray[1];

// Подключаем класс PDO
include "classes/PdoConnect.php";

try {
    $pdoInstance = PdoConnect::getInstance();
    $pdo = $pdoInstance->getConnection();

    // Пример простого запроса, чтобы убедиться в правильности подключения
    $stmt = $pdo->query("SELECT 1");
    if ($stmt) {
        echo "Подключение к базе данных успешно!";
    } else {
        echo "Ошибка выполнения запроса.";
    }
} catch (Exception $e) {
    die("Ошибка: " . $e->getMessage());
}

// Логика подключения файла
if ($currentMonth == 12 && $currentDay >= 24) {
    include 'online_store.php'; // Если текущая дата >= 24 декабря
} else {
    include 'timer.php'; // До наступления 24 декабря
}
