<?php

foreach ($articles as $a) {
    echo '<pre>';
    echo '<h1>' . $a['title'] . '</h1>';
    echo '<p>' . $a['content'] . '</p>';
}
