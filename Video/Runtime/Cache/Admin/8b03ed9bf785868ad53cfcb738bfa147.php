<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--链接样式表-->
    <link href="/Video-Management-System/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title></title>
</head>
<body>
<!--导航条-->
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <a class="brand" href="#">影音管理系统</a>
        <ul class="nav">
            <li><a href="#">用户管理</a></li>
            <li><a href="#">视频管理</a></li>
            <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown">帮助
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a>我要捐款</a><li>
                    <li><a>联系我们</a><li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--搜索功能提交表单-->
<div class="container">
    <form method="post" action="/Video-Management-System/index.php/admin/User/user_search">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">用户ID：</span>
            <input type="text" class="form-control" placeholder="Id" name="uid">
            <span class="input-group-addon" id="basic-addon1">用户昵称：</span>
            <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
            <div>
            性　别：<select name="sex" class="form-control">
            <option value="">全部</option>
            <option value="男">男</option>
            <option value="女">女</option></select>
            身　份：<select name="identity" class="form-control">
                <option value="">全部</option>
                <option value="非会员">非会员</option>
                <option value="会员">会员</option></select>
            状　态：<select name="status" class="form-control">
                <option value="">全部</option>
                <option value="正常">正常</option>
                <option value="禁用">禁用</option></select>
            <button type="submit" value="搜索"></button>
            </div>
    </form>
</div>
<!--遍历用户信息表格-->
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>用户I　D</th>
                <th>用户昵称</th>
                <th>用户密码</th>
                <th>用户性别</th>
                <th>用户身份</th>
                <th>用户状态</th>
                <th>操　　作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vo["uid"]); ?></td>
                    <td><?php echo ($vo["username"]); ?></td>
                    <td><?php echo ($vo["password"]); ?></td>
                    <td><?php echo ($vo["sex"]); ?></td>
                    <td><?php echo ($vo["identity"]); ?></td>
                    <td><?php echo ($vo["status"]); ?></td>
                    <td><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#check" data-uid="<?php echo ($vo["uid"]); ?>">审核</button>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#edit" data-uid="<?php echo ($vo["uid"]); ?>">编辑</button>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#delete" data-uid="<?php echo ($vo["uid"]); ?>">删除</button>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#forbidden" data-uid="<?php echo ($vo["uid"]); ?>">禁用</button></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>
<!--用户操作触发弹窗内容-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog" aria-hidden="true" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">用户信息修改</h4>
            </div>
        <form method="post" action="">
            <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">用户I　D：</span>
                    <input type="text" class="form-control" placeholder="Id" name="uid" value="<?php echo ($data["uid"]); ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">用户昵称：</span>
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div>
                    性　　别：<select name="sex" class="form-control">
                    <option value="">全部</option>
                    <option value="男">男</option>
                    <option value="女">女</option></select>
                </div>
                <div>
                     身　　份：<select name="identity" class="form-control">
                    <option value="">全部</option>
                    <option value="非会员">非会员</option>
                    <option value="会员">会员</option></select>
                </div>
                <div>
                    状　　态：<select name="status" class="form-control">
                    <option value="">全部</option>
                    <option value="正常">正常</option>
                    <option value="禁用">禁用</option></select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="submit" class="btn btn-primary">确认修改</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!--链接jquery、bootstrap两个js文件-->
<script src="/Video-Management-System/bootstrap/js/jquery.js"></script>
<script src="/Video-Management-System/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>