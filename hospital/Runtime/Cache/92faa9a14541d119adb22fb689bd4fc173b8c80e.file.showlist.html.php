<?php /* Smarty version Smarty-3.1.6, created on 2016-04-25 10:39:36
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Role\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:204265684bcc25f3123-38083584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92faa9a14541d119adb22fb689bd4fc173b8c80e' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Role\\showlist.html',
      1 => 1461550989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204265684bcc25f3123-38083584',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5684bcc26c606',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5684bcc26c606')) {function content_5684bcc26c606($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>角色列表</title>

        <link href="<?php echo @Admin_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：角色管理-》角色列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="#" target='_self'>【添加角色】</a>
                </span>
            </span>
        </div>
        <div></div>
       
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>角色</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
</td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</td> 
                        <td><a href="<?php echo @__CONTROLLER__;?>
/distribute/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
">分配权限</a></td> 
                        <td><a href="">修改</td> 
                        <td><a href="javascript::" onclick="delect_product(1)">删除</a></td> 
                    </tr>
                    <?php } ?>
                   
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>