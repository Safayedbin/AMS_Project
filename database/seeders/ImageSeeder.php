<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json= File::get(path:'database/json/image.json');
        $objects=collect(json_decode($json));

        $objects->each(function($object){
            Image::create([
                'location'=> $object->location,
                'filename'=>$object->filename,

            ]);


        });

    }
}
