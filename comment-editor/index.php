<?php

Asset::set(EXTEND . DS . 'rich-text-editor' . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'r-t-e.min.css', 10.1);
Asset::set(EXTEND . DS . 'rich-text-editor' . DS . 'lot' . DS . 'asset' . DS . 'js' . DS . 'r-t-e.min.js', 10.1);

Hook::set('asset.bottom', function($content) {
    return $content . '<script>window.COMMENT.RTE=' . json_encode(Plugin::state(__DIR__, 'RTE')) . ';</script>';
}, 9.91);

Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'comment-editor.min.css', 10.2);
Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'comment-editor' . DS . $site->shield . '.min.css', 10.3);
Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'js' . DS . 'comment-editor.min.js', 10.2);