<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\Category;
use App\Models\Regis;

class Register extends Controller {
    
    public function index() {
        // include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function save() {
        // include helper form
        helper(['form']);
        // set rules validation form
        $rules = [
            'id_card' => 'required|min_length[10]|max_length[13]',
            'name' => 'required|min_length[3]|max_length[20]',
            'age' => 'required|min_length[1]|max_length[3]',
            'category_run' => 'required|min_length[1]|max_length[3]',
            'ID' => 'required|min_length[9]|max_length[10]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password' => 'required|min_length[6]|max_length[200]',
            'confpassword' => 'matches[password]',
        ];
        if ($this->validate($rules)) {
            $model = new UserModel();
            $Category = new Category();
            $Regis = new Regis();
            $data = [
                'id_card' => $this->request->getVar('id_card'),
                'name' => $this->request->getVar('name'),
                'age' => $this->request->getVar('age'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            
            $data1 = [ 
                'ID' => $this->request->getVar('ID'),
                'member' => $this->request->getVar('id_card'),
                'category_run' => $this->request->getVar('category_run'),
            ];
            //var_dump($data1);
            $model->insert($data);
            $Regis->insert($data1);
          

            return view('login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}