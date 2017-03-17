<?php

use PHPUnit\Framework\TestCase;

class IntegrationTestCase extends TestCase
{
    static $storagePath;

    /** @test */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$storagePath = "./tmp-data";
        if(!file_exists(self::$storagePath))
        {
            mkdir(self::$storagePath, 0755, true);
        }
    }

    /** @test */
    public static function tearDownAfterClass()
    {
        parent::tearDownAfterClass();
        if(file_exists(self::$storagePath))
        {
            self::removeDirectory(self::$storagePath);
        }
    }

    private static function removeDirectory($path)
    {
        $files = glob($path . '/*');
        foreach ($files as $file)
        {
            is_dir($file) ? self::removeDirectory($file) : unlink($file);
	    }
        rmdir($path);
        return;
    }
}