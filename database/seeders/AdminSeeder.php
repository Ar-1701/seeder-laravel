<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/adminTbl.json');
        $stu = collect(json_decode($json));
        $stu->each(function ($stu) {
            Admin::create([
                'name' => $stu->name,
                'email' => $stu->email
            ]);
        });
    }
}
