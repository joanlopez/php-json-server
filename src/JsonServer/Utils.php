<?php

namespace JsonServer;

class Utils
{
    public static function saveFile($path, $content)
    {
        file_put_contents($path, $content);
    }
}