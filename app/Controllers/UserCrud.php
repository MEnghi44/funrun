<?php 
namespace App\Controllers;

use App\Models\Category;


class UserCrud extends BaseController
{
     // show users list
     public function show(){
        $category = new Category();
        $data['category'] = $category->orderBy('category_id', '')->findAll();
        return view('type', $data);  
    }


}