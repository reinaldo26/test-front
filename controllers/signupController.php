<?php
class signupController extends controller 
{
    public function index()
    {
        $data = [];
        
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_FILES) && !empty($_POST['password'])) {
            $u = new Users();
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $url = null;

            $allowed = ['image/jpeg', 'image/jpg', 'image/png'];

            if(in_array($_FILES['picture']['type'], $allowed)) { 
                $file = $_FILES['picture'];

                if (isset($file['tmp_name']) && !empty($file['tmp_name'])) {
                    $folder = 'assets'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'users';
                    $type = explode('/', $file['type']);
                    $type = '.'.array_pop($type);

                    $file_name = rand(0, 99999).$type; 

                    if(!is_dir($folder)) {
                        mkdir($folder);
                    }

                    move_uploaded_file($file['tmp_name'], $folder.DIRECTORY_SEPARATOR.$file_name);
                    $url = $folder.DIRECTORY_SEPARATOR.$file_name;
                    $id_user = $u->insertUser($url, $name, $email, $password);
                    $data['info'] = $u->userInfo($id_user);
                    sleep(2);
                    $data['info'] = $data['info'][0];
                }
            } else {
                 $data['error_message'] = 'Format not allowed.';
            }
        }

        $this->loadTemplate('signup', $data);
    }
    
    public function register()
    {
        $data = [];
        $this->loadTemplate('signup', $data);
    }
}