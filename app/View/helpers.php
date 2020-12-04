<?php

function setting($settings, $key) {
    return isset($settings[$key]) ? $settings[$key] : '';

};

?>
