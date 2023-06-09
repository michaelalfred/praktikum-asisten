<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        $message['failed'] = "";
        return view('login', $message);
    }

    public function home()
    {
        $session = session();
        if ($session->has('pengguna')) {
            $item = $session->get('pengguna');
            if ($item == 'admin') {
                return view('login/home');
            } else {
                return view('login');
            }
        } else {
        return view('login');
        }
    }

    public function check()
    {
        $user = $this->request->getPost(['usr']);
        $pass = $this->request->getPost(['pwd']);

        $model = model(LoginModel::class);
        $login = $model->ambil($user);

        $message['failed'] = "";

        if(!empty($login)){
            if($pass['pwd'] == $login['password']){
                $session = session();
                $session->set('pengguna', $login['username']);
                return redirect()->route('asisten');
            } else {
                $message['failed'] = "Username atau password anda salah!";
                return view('login', $message);
            }
        } else {
            $message['failed'] = "Username atau password anda salah!";
                return view('login', $message);
        }

    }

    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return redirect()->route('login');
    }
}