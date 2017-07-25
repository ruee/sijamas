<?php

use Illuminate\Database\Seeder;


class MenuSeed extends Seeder
{
    /* example add menu
        \trinata::addMenu([ 
                'parent_id'     => null,
                'title'         => 'Management product',
                'controller'    => '#',
                'slug'          => 'product',
                'order'         => 1,
            ],[]);

                \trinata::addMenu([ 
                    'parent_id'     => 'product',
                    'title'         => 'Category',
                    'controller'    => 'CategoryController',
                    'slug'          => 'category',
                    'order'         => '1'
                ],['index','create','update','delete']
            ); 

    */
   

         
    public function run()
    {	
		\trinata::addMenu([ 
                'parent_id'     => null,
                'title'         => 'Kategori Kerjasama',
                'controller'    => 'KategoriKerjasamaController',
                'slug'          => 'kategori-kerjasama',
                'order'         => 2,
            ],['index','create','update','delete']
		);
		
		\trinata::addMenu([ 
                'parent_id'     => null,
                'title'         => 'Usulan Kerjasama',
                'controller'    => 'UsulanKerjasamaController',
                'slug'          => 'usulan-kerjasama',
                'order'         =>3,
            ],['index','create','update','delete']
		);
		
		\trinata::addMenu([ 
                'parent_id'     => null,
                'title'         => 'Laporan',
                'controller'    => 'LaporanController',
                'slug'          => 'laporan',
                'order'         => 4,
            ],['index','create','update','delete']
		);
		        
    }
}
