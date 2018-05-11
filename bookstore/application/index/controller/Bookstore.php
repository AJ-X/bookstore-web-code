<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
class Bookstore extends Controller{
	public function bookstore(){
		$re=Db::query("select * from bookstore_pro");
		//dump($re);
		$this->assign('re',$re);
		return $this->fetch();
	}
	public function dlbookstore(){
		$re=Db::query("select * from bookstore_pro");
		//dump($re);
		$this->assign('re',$re);
		return $this->fetch();
	}
}