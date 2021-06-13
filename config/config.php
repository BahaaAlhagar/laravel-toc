<?php

return [
    /**
     * Minimum string character length to generate a table of contents
     */
    'min_length'    =>  1000,

    /**
     * Heading prefix leave empty to disable
     */
    'prefix'    =>  'toc',

    /**
     * Prefix position you can choose from `start`, `end`
     */
    'prefix_position'   =>  'start',
    
    /**
     * Supported headings to create table of contents
     */
    'supported_headings'    =>  [
        'h1',
        'h2',
        'h3',
        'h4',
        'h5',
        'h6',
    ],

    /**
     * Generate sluggable headings
     */
    'sluggable_headings'    =>  false,
];
