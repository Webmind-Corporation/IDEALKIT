<?php

    function verifyPage($pageGive, $pdo) {
        $pages = get_table($pdo, "pages");
        foreach ($pages as $page) {
            if ($page["page"] == $pageGive) {
                $stmt = $page;
            }
        }
        if ($stmt["upcomming"] == 0) {
            include_once findPath("../", "upcomming.php");
        } elseif ($stmt["upcomming"] == 1) {
            include_once findPath("../", $pageGive);
        }
    }

?>