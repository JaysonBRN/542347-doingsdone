<?php
// Подключаем пользовательские функции
require_once 'app/init.php';
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
// Массив категорий для задания
$categories = ['Все', 'Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];
// Двумерный массив с информацией о задачах
$tasks = [
    [
        'name' => 'Собеседование в IT компании',
        'date' => '01.06.2018',
        'category' => 'Работа',
        'complete' => 'Нет'
    ],
    [
        'name' => 'Выполнить тестовое задание',
        'date' => '25.05.2018',
        'category' => 'Работа',
        'complete' => 'Нет'
    ],
    [
        'name' => 'Сделать задание первого раздела',
        'date' => '21.05.2018',
        'category' => 'Учеба',
        'complete' => 'Да'
    ],
    [
        'name' => 'Встреча с другом',
        'date' => '22.04.2018',
        'category' => 'Входящие',
        'complete' => 'Нет'
    ],
    [
        'name' => 'Купить корм для кота',
        'date' => 'Нет',
        'category' => 'Домашние дела',
        'complete' => 'Нет'
    ],
    [
        'name' => 'Заказать пиццу',
        'date' => 'Нет',
        'category' => 'Домашние дела',
        'complete' => 'Нет'
    ]
];

$content = include_template('templates/index.php', ['tasks' => $tasks, 'show_complete_tasks' => $show_complete_tasks]);
$layout_content = include_template('templates/layout.php', ['content' => $content, 'title' => 'Дела в порядке', 'categories' => $categories, 'tasks' => $tasks]);
echo ($layout_content);
