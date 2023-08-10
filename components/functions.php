<?php

function findPath($root, $file) {
    $dirs = scandir($root);
    foreach ($dirs as $dir) {
        if ($dir == $file) {
            return $root . $dir;
        } else if (is_dir($root . $dir) != false && $dir != "." && $dir != ".." && $dir != ".git") {
            $path = findPath($root . $dir . "/", $file);
            if ($path != null) {
                return $path;
            }
        }
    }
}

?>