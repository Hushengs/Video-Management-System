<?php
/**
 * User控制器
 *
 * @author xingcheng.hu
 * @createtime 2015-11-17 15:27:45
 */
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller {

    //用户数据查询
    public function user_search(){
        $user = M('User');
        //查询数据组合
        if(isset($_POST['uid']) && $_POST['uid'] != NULL){
        $data['uid'] = array('eq', $_POST['uid']);
        }
        if(isset($_POST['username']) && $_POST['username'] != NULL){
        $data['username'] = array('like',"%{$_POST['username']}%");
        }
        if(isset($_POST['sex']) && $_POST['sex'] != NULL){
        $data['sex'] = array('eq', $_POST['sex']);
        }
        if(isset($_POST['identity']) && $_POST['identity'] != NULL){
            $data['identity'] = array('eq', $_POST['identity']);
        }
        if(isset($_POST['status']) && $_POST['status'] != NULL){
            $data['status'] = array('eq', $_POST['status']);
        }
        $data = $user->where($data)->select();
        $this->assign('list',$data);
        $this->display('Index/index');
    }

    //用户信息编辑
    public function user_edit(){
        $user = M('User');
        $uid = $_GET['uid'];
        $data = $user->find($uid);
        $this->assign('list',$data);
        $this->display('');
    }
}