<?php

namespace Directus\Database\Migration;

interface ApplicationInterface
{
    public function __construct($config, $argv);
    public function execute();
    public function getAdapter();
    public function initTasks();
    public function migrationsDirectory($key);
    public function migrationsDirectories();
    public function dbDirectory();
    public function initializeDb();
    public function updateSchemaForTimestamps();
}