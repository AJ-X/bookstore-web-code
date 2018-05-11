<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Login extends Controller{
	public function login(){
		return $this->fetch();
	}

	public function register(){
		return $this->fetch();
	}

	public function adlogin(){
		return $this->fetch();
	}

	public function addenglu(){
		$data = [       								//接受传递的参数  
                'username' => input('username'),  
                'password' => input('password'),
                'Email' => input('Email'),

            ];
        $re=Db::query("select * from bookstore_admin where username='{$data['username']}' and password='{$data['password']}' and Email='{$data['Email']}'");
        if ($re){
            session('user',$data['username']);         
        $this->success('登陆成功!',url('admin/admin'));
        }
        else{
        $this->error('登陆失败!');
        }
	}

	public function denglu(){
		$data = [       								//接受传递的参数  
                'username' => input('username'),  
                'password' => input('password'),
            ];
        $re=Db::query("select * from bookstore_user where username='{$data['username']}' and password='{$data['password']}'");
        if ($re){
            session('user',$data['username']);
            $userid = Db::query("select id from bookstore_user where username='{$data['username']}'");

            session("uid",$userid[0]['id']);
        $this->success('登陆成功!',url('index/dlindex'));        
        } 
        else{   
        $this->error('登陆失败!');
        }
    }

	public function zhuce(){
		$data = [       								//接受传递的参数  
                'username' => input('username'),  
                'password' => input('password'),
                'address' => input('address'),
            ];       	
			if(Db::table('bookstore_user')->insert($data)){        //添加数据  
   			$this->success('注册成功!',url('login/login'));
                // $userid = Db::name('user')->getLastInsID(); 
                // session('id',$userid);   
   			}else{  
   			$this->error('注册失败!'); 
   			}  		
	}
}