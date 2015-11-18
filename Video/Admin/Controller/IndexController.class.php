<?php
/**
 * Index控制器
 *
 * @author xingcheng.hu
 * @createtime 2015-11-16 19:07:59
 */
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {

    //后台首页数据浏览
    public function index(){
        $user = M('User');
        $data = $user->select();
        $this->assign('list',$data);
        $this->display();
    }
}