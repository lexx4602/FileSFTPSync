<?php
/**
 * Created by PhpStorm.
 * User: ABorisov
 * Date: 11.07.2016
 * Time: 13:14
 */

// $path - путь к директории
// $pattern - шаблон поиска
// $flags - константа для функции glob()
// $depth - глубина вложенности, просматриваемая функцией. -1 - без ограничений.
function bfglob($path, $pattern = '*', $flags = GLOB_NOSORT, $depth = -1)
{
    $matches = array();
    $folders = array(rtrim($path, DIRECTORY_SEPARATOR));

    while($folder = array_shift($folders))
    {
        $matches = array_merge($matches, glob($folder.DIRECTORY_SEPARATOR.$pattern, $flags));
        if($depth != 0)
        {
            $moreFolders = glob($folder.DIRECTORY_SEPARATOR.'*', GLOB_ONLYDIR);
            $depth   = ($depth < -1) ? -1: $depth + count($moreFolders) - 2;
            $folders = array_merge($folders, $moreFolders);
        }
    }
    return $matches;
}

$file = bfglob('C:\\', "*", GLOB_NOSORT, -1);
print_r($file);
