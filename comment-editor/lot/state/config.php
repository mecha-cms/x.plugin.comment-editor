<?php

return [
    'editor' => 'rich-text-editor',
    'editors' => [
        'c-k-editor' => ['CKE' => []], // TODO
        'rich-text-editor' => [
            'RTE' => [
                'tools' => ['b', 'i', 'a'],
                'x' => false // disable source view
            ]
        ],
        'text-editor' => ['TE' => []] // TODO
    ]
];