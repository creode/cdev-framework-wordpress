<?php

namespace Cdev\WordPress\Framework;

use Creode\Framework\Framework;

class WordPress extends Framework
{
    const NAME = 'wordpress';
    const LABEL = 'WordPress';

    /**
     * Returns commands to clear cache on this framework
     * @return array
     */
    public function clearCache()
    {
        return [];
    }

    /**
     * Returns commands to run updates on this framework
     * @return array
     */
    public function update()
    {
        return [];
    }

    /**
     * Returns an array of tables that can have their data cleansed on dev environments
     * @return array
     */
    public function getDBTableCleanseList()
    {
        return [
            'wp_comments',
            'wp_commentmeta'
        ];
    }
}
