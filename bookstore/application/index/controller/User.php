<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;

class User extends Controller{
	public function user(){
		$id = session("uid");
		$re=Db::query("select * from bookstore_user where id = ".$id);        
		$this->assign('re',$re);
		return $this->fetch();
	}
	public function yanzheng(){
		$this->error("请先登陆！！！",url('login/login'));
	}
	public function shoppingcar($id){
        $re=Db::table('bookstore_pro')->where('id',$id)->value('pName');
        $rs=Db::table('bookstore_user')->where('id',$id)->update(['pName' => $re]);
        if($rs){
        	$this->success('购买成功!',url('bookstore/dlbookstore'));
        }
        else{
        	$this->error('购买失败!');
        }
	}
}