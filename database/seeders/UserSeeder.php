<?php

namespace Database\Seeders;

use DB;
use App\Models\User;
use Faker\Factory as fakerdata;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   //$faker= fakerdata::Create();
        $json= File::get(path:'database/json/user.json');
        $objects=collect(json_decode($json));

        $objects->each(function($object){
            User::create([
                'name'=> $object->name,
                'password'=>$object->password,
                'organization_id'=>$object->organization_id,
                'image_fk'=>$object->image_fk,
                'acc_type'=>$object->acc_type,
                'title'=>$object->title,
            ]);


        });

    }
}
