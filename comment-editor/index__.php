<?php

extract(Plugin::state('comment-editor'));

Config::set('page.o.js.COMMENT', isset($editors[$editor]) ? $editors[$editor] : []);

require __DIR__ . DS . 'lot' . DS . 'worker' . DS . $editor . '.php';