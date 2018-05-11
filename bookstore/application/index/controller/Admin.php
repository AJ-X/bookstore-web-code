<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
class Admin extends Controller{
	public function admin(){
		return $this->fetch();
	}
	public function dingdan(){
		return $this->fetch();
	}
	public function huiyuanliebiao(){
		$re=Db::query("select * from bookstore_user");
		//dump($re);
		$this->assign('re',$re);
		return $this->fetch();
	}
	public function kucunguanli(){
		return $this->fetch();
	}
	public function delate($id){
		$se=Request::instance()->post('id');
		Db::table('bookstore_pro')->delete($se);
	}
	public function huiyuanxiugai(){
			return $this->fetch();
	} 
	public function edit($id){
			$data = [       					//接受传递的参数  
                'username' => input('username'),  
                'password' => input('password'),
                'address' => input('address'),
                'pName' => input('pName'),
                'id' => $id
            ];
            $shu=Db::table('bookstore_user')->update($data);
            if($shu>0)
            {
            	$this->success('修改成功!',url('admin/huiyuanliebiao'));
            }else{
            	$this->error('修改失败!');
            }
	}
	


	public function shangpinxiugai(){
		return $this->fetch();
	}
	public function xiugaishangpin($id){
		$data = [       								//接受传递的参数  
                'pName' => input('pName'),  
                'pDesc' => input('pDesc'),
                'pAuthor' => input('pAuthor'),
                'aDesc' => input('aDesc'),
                'pImg' => input('pImg'),
                'pPrice' => input('pPrice'),
                'id' => $id
            ];
            $shu=Db::table('bookstore_pro')->update($data);
            if($shu>0)
            {
            	$this->success('修改成功!',url('admin/shangpinliebiao'));
            }else{
            	$this->error('修改失败!');
            }
	}
	public function delatehuiyuan($id){
		$se=Request::instance()->post('id');
		Db::table('bookstore_user')->delete($se);
	}
	public function shangpinliebiao(){
		$re=Db::query("select * from bookstore_pro");
		$this->assign('re',$re);
		return $this->fetch();
	}
	public function tianjiashangpin(){
		return $this->fetch();
	}
	public function tianjiahuiyuan(){
		return $this->fetch();
	}
	public function huiyuantequan(){
		return $this->fetch();
	}
	public function tianjiadingdan(){
		return $this->fetch();
	}
	public function fahuodanliebiao(){
		return $this->fetch();
	}
	public function wuliuliebiao(){
		return $this->fetch();
	}
	public function shangpintianjia(){
		$data = [       								//接受传递的参数  
                'pName' => input('pName'),  
                'pDesc' => input('pDesc'),
                'pAuthor' => input('pAuthor'),
                'aDesc' => input('aDesc'),
                'pImg' => input('pImg'),
                'pPrice' => input('pPrice'),
            ];
        if(Db::table('bookstore_pro')->insert($data)){        //添加数据  
   			$this->success('添加成功!',url('admin/shangpinliebiao')); 			//成功后跳转   
   			}else{  
   			$this->error('添加失败!'); 
   			}
	}
	public function huiyuantianjia(){
		$data = [       								//接受传递的参数  
                'username' => input('username'),  
                'password' => input('password'),
                'address' => input('address'),
            ];       	
			if(Db::table('bookstore_user')->insert($data)){        //添加数据  
   			$this->success('添加成功!',url('admin/huiyuanliebiao')); 			//成功后跳转   
   			}else{  
   			$this->error('添加失败!'); 
   			}  		
	}
}