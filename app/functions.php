<?php

/**
 * Получаем количетво задач проекта
 * @param array $tasks
 * @param string $projectName
 * @return int
 */
function taskCounts($tasks, $projectName) {
    $count = 0;
    foreach ($tasks as $task) {
        if ($task['category'] === $projectName) {
            $count++;
        }
    }
    if ($projectName === 'Все') {
        $count = count($tasks);
    }
    return $count;
}

/**
 * Подключаем шаблон
 * @param string $waytofile
 * @param array $arrayfile
 * @return null/string
 */
function include_template($waytofile, $arrayfile) {
    if (file_exists($waytofile)) {
        ob_start();
        extract($arrayfile);
        include ($waytofile);
        return ob_get_clean();
    }
    return '';
}