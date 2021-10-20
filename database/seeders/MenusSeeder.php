<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $menus = [
            [
                'title'=>'İş Elanları',
                'route'=> 'jobs'
            ],
            [
                'title'=>'Bizim barədə',
                'route'=> 'aboutus'
            ],
            [
                'title'=>'İşə götürənlər üçün',
                'route'=> 'foremployers'
            ],
            [
                'title'=>'İş axtaranlar üçün',
                'route'=> 'forjobseekers'
            ],
            [
                'title'=>'Xidmət haqqı',
                'route'=> 'servicefee'
            ],
            [
                'title'=>'İnsan Qaynaqları',
                'route'=> 'hr'
            ],
            [
                'title'=>'Əlaqə',
                'route'=> 'contactus'
            ]

        ];

        foreach ($menus  as $key => $menu) {
            Menu::create($menu);
        }


    }
}
