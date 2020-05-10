<?php

use Illuminate\Database\Seeder;
use App\Department;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['name' => 'أمن المعلومات واكتشاف الأدلة الجنائية الرقمية']);
        Department::create(['name' => 'تكنولوجيا الشبكات والمحمول']);
        Department::create(['name' => 'المعلوماتية الطبية']);
    }
}
