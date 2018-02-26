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