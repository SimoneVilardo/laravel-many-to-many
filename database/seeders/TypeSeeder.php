<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Frontend', 'Backend', 'Fullstack', 'Design', 'DevOps'];

        foreach ($types as $typ) {
            $types = new Type();

            $types->name = $typ;
            $types->slug = Str::slug($typ, '-');

            $types->save();
        }
    }
}