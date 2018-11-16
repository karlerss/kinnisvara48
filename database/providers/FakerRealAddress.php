<?php


namespace Database\Providers;

use Faker\Generator;
use Faker\Provider\Base;

class FakerRealAddress extends Base
{
    protected static $data = [];

    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
        // Since every time a factory is used a new instance of this is created, hold data in a class variable
        // so we don't need to parse the csv every time.
        if (self::$data) {
            return;
        }
        $filePath = base_path('database/providers/adr_sample.txt');
        if (($handle = fopen($filePath, "r")) !== FALSE) {
            while (($res = fgetcsv($handle, filesize($filePath), ";"))) {
                self::$data[] = [
                    'level_1' => $res[17],
                    'level_2' => $res[20],
                    'level_3' => $res[23],
                    'level_4' => $res[26],
                    'level_5' => $res[29],
                    'level_7' => $res[35],
                    'level_8' => $res[38],
                ];
            }
        }
    }

    public function realAddress()
    {
        return static::randomElement(self::$data);
    }
}