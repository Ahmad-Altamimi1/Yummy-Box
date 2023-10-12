<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            ['id'=>1,
                'name' => 'Pandora1',
                'categoryId'=>1,
                'discountId'=>1,
                'shortDescription' => 'As a vfrom basics to responsive design. 
                ',
                'longDescription' => 'As a volunteer  you play a pivotal role in empowering aspiring web developers. Your responsibilities include guiding learners through the essentials of HTML, CSS, and JavaScript, fostering an understanding of responsive web design
                ',
                'cartDescription' => 'Volunteer to teach the art of crafting captivating and user-friendly web experiences with our Front-End Foundations project.
                ',
                'img' => 'images/defultimg.jpg',
                'img1' => 'images/defultimg.jpg',
                'img2' => 'images/defultimg.jpg',
                'img3' => 'images/defultimg.jpg',
                'cla' => 14,
                'price' => 140,
                'prot' => ' sun mon thu , for two weeks' ,
                "dayId" => 2,
                
            ],
            ['id'=>2,
                'name' => 'Pandora2',
                'categoryId'=>1,
                'discountId'=>1,
                'shortDescription' => 'As a vfrom basics to responsive design.' ,

                
                'longDescription' => 'As a volunteer  you play a pivotal role in empowering aspiring web developers. Your responsibilities include guiding learners through the essentials of HTML, CSS, and JavaScript, fostering an understanding of responsive web design
                ',
                'cartDescription' => 'Volunteer to teach the art of crafting captivating and user-friendly web experiences with our Front-End Foundations project.
                ',
                'img' => 'images/defultimg.jpg' ,
                'img1' => 'images/defultimg.jpg',
                'img2' => 'images/defultimg.jpg',
                'img3' => 'images/defultimg.jpg',
                'cla' => 184,
                'price' => 180,
                "dayId"=>3,

                'prot' => ' sun mon thu , for two weeks' ,
                     
            ],
            ['id'=>3,
                'name' => 'Pandora3',
                'categoryId'=>1,
                'discountId'=>1,
                'shortDescription' => 'As a vfrom basics to responsive design. 
                ',
                'longDescription' => 'As a volunteer  you play a pivotal role in empowering aspiring web developers. Your responsibilities include guiding learners through the essentials of HTML, CSS, and JavaScript, fostering an understanding of responsive web design
                ',
                'cartDescription' => 'Volunteer to teach the art of crafting captivating and user-friendly web experiences with our Front-End Foundations project.
                ',
                'img' => 'images/defultimg.jpg',
                'img1' => 'images/defultimg.jpg',
                'img2' => 'images/defultimg.jpg',
                'img3' => 'images/defultimg.jpg',
                'cla' => 14,
                'price' => 140,
                'prot' => ' sun mon thu , for two weeks' ,
                "dayId" => 2,
                
            ],
            ['id'=>4,
                'name' => 'Pandora4',
                'categoryId'=>1,
                'discountId'=>1,
                'shortDescription' => 'As a vfrom basics to responsive design.' ,

                
                'longDescription' => 'As a volunteer  you play a pivotal role in empowering aspiring web developers. Your responsibilities include guiding learners through the essentials of HTML, CSS, and JavaScript, fostering an understanding of responsive web design
                ',
                'cartDescription' => 'Volunteer to teach the art of crafting captivating and user-friendly web experiences with our Front-End Foundations project.
                ',
                'img' => 'images/defultimg.jpg' ,
                'img1' => 'images/defultimg.jpg',
                'img2' => 'images/defultimg.jpg',
                'img3' => 'images/defultimg.jpg',
                'cla' => 184,
                'price' => 180,
                "dayId"=>4,

                'prot' => ' sun mon thu , for two weeks' ,
                     
            ],
            ['id'=>5,
                'name' => 'Pandora5',
                'categoryId'=>1,
                'discountId'=>1,
                'shortDescription' => 'As a vfrom basics to responsive design. 
                ',
                'longDescription' => 'As a volunteer  you play a pivotal role in empowering aspiring web developers. Your responsibilities include guiding learners through the essentials of HTML, CSS, and JavaScript, fostering an understanding of responsive web design
                ',
                'cartDescription' => 'Volunteer to teach the art of crafting captivating and user-friendly web experiences with our Front-End Foundations project.
                ',
                'img' => 'images/defultimg.jpg',
                'img1' => 'images/defultimg.jpg',
                'img2' => 'images/defultimg.jpg',
                'img3' => 'images/defultimg.jpg',
                'cla' => 14,
                'price' => 140,
                'prot' => ' sun mon thu , for two weeks' ,
                "dayId" => 5,
                
            ],
            ['id'=>6,
                'name' => 'Pandora6',
                'categoryId'=>1,
                'discountId'=>1,
                'shortDescription' => 'As a vfrom basics to responsive design.' ,

                
                'longDescription' => 'As a volunteer  you play a pivotal role in empowering aspiring web developers. Your responsibilities include guiding learners through the essentials of HTML, CSS, and JavaScript, fostering an understanding of responsive web design
                ',
                'cartDescription' => 'Volunteer to teach the art of crafting captivating and user-friendly web experiences with our Front-End Foundations project.
                ',
                'img' => 'images/defultimg.jpg' ,
                'img1' => 'images/defultimg.jpg',
                'img2' => 'images/defultimg.jpg',
                'img3' => 'images/defultimg.jpg',
                'cla' => 184,
                'price' => 180,
                "dayId"=>1,

                'prot' => ' sun mon thu , for two weeks' ,
                     
            ],
                   
            
       ] );
    }
    
}
