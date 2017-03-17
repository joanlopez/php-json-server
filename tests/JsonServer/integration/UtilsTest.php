<?php

use JsonServer\Utils;

class UtilsTest extends \IntegrationTestCase
{
    public function testWhenSaveFileIsCalledThenThereIsTheProperFile()
    {
        $file_path = self::$storagePath.'/dummy.txt';
        Utils::saveFile($file_path, "dummy-content");
        $this->assertEquals(file_get_contents($file_path), "dummy-content");
    }
}