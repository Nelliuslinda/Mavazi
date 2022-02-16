<?php
namespace App\Controllers;
use App\Libraries\Hash;

class Auth extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function login()
    {
        return view('auth/login');
    }

    public function register(){
        return view('auth/register');
    }

    public function save(){
        $validation = $this->validate([
            'first_name'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'First name is required'
                ]
                ],
            'last_name'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'First name is required'
                ]
                ],
            'email'=>[
                'rules'=>'required|valid_email|is_unique[tbl_users.email]',
                'errors'=>[
                    'required'=>'Email is required',
                    'valid_email'=>'Enter valid email format',
                    'is_unique'=>'Email already exists'
                ]
                ],
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required'=>'Password is required',
                    'min_length'=>'Password must have atleast 5 characters in length',
                    'max_length'=>'Password must not have more than 12 characters in length'
                ]
                ],
            'retype_password'=>[
                'rules'=>'required|min_length[5]|max_length[12]|matches[password]',
                'errors'=>[
                    'required'=> 'Retype Password is required',
                    'min_length'=>'Retype Password must have atleast 5 characters in length',
                    'max_length'=>'Retype Password must not have more than 12 characters in length',
                    'matches'=>'Retype Password does not match Password '
                ]
                ],
            'gender'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Gender is required'
                ]
                ]
                ]);

        if(!$validation){
            return view('auth/register',['validation' => $this->validator]);
        }else{
            //Enter into database
            $first_name = $this->request->getPost('first_name');
            $last_name = $this->request->getPost('last_name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $gender = $this->request->getPost('gender');
            $role = $this->request->getPost('role');

            $values = [
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'email'=>$email,
                'password'=>Hash::make($password),
                'gender'=>$gender,
                'role'=>$role
            ];

            $usersModel = new \App\Models\UsersModel();
            $query = $usersModel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail','Something went wrong');
                
            }else{
                return redirect()->to('vend/index')->with('success','Welcome to Mavazi');
            }
        }
    }

    function check(){
        //validate

        $validation = $this->validate([
            'email'=>[
                'rules'=>'required|valid_email|is_not_unique[tbl_users.email]',
                'errors'=>[
                    'required'=>'Email is required',
                    'valid_email'=>'Enter a valid email formart',
                    'is_not_unique'=>'This email is not registered in Mavazi'
                ]
                ],
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required'=>'Password is required',
                    'min_length'=>'Password must have atleast 5 characters in length',
                    'max_length'=>'Password must not have more than 12 characters in length'
                ]
            ]
        ]);

        if(!$validation){
            return view('auth/login',['validation'=>$this->validator]);
        }else{
            // echo "Form successfully validated";
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $usersModel = new \App\Models\UsersModel();
            $user_info = $usersModel->where('email',$email)->first();
            $check_password = Hash::check($password, $user_info['password']);

            if(!$check_password){
                session()->setFlashdata('fail','Incorrect password');
                return redirect()->to('/auth/login')->withInput();
            }else{
                $user_id = $user_info['user_id'];
                session()->set('loggedUser', $user_id);
                return redirect()->to('dashboard');
            }
        }
    }
}
