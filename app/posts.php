<?php

namespace App;

collect(['ContactFormPost'])
    ->each(function ($file) {
        locate_template($file = "app/Post/{$file}.php", true, true);
    });
