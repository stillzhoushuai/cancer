<?php /* Smarty version Smarty-3.1.6, created on 2016-01-04 09:42:11
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Treatment\search_handle.html" */ ?>
<?php /*%%SmartyHeaderCode:296235689cdd7d63711-32232885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6db94086941c58f74930d1761900634cf6c1f637' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Treatment\\search_handle.html',
      1 => 1451871728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296235689cdd7d63711-32232885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5689cdd7e1ef4',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5689cdd7e1ef4')) {function content_5689cdd7e1ef4($_smarty_tpl) {?><html>
<head>
<meta charset="utf-8"> 
<title></title>
<style type="text/css">
body{
	border:1px solid silver;
	width:800px;
	height:auto;
	margin:0 auto;
	/* background-color:blue; */
}
span{
	backgroud-color:#a2d2ff;
	text-align:center;
	font-family:Arial,Helvetica,sans-serif;
	font-size:12px;
	padding:10px;
}
.table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
</style>
</head>
<body><center>
<font size="4" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
	<table border="0px">
	<tr><td id="td1">治疗方案建议</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left" >病历号:<input type="text" name="medicalid" id="medicalid"></span>&nbsp;&nbsp;<span class="left">姓名:<input type="text" name="name" id="name"></span>
			&nbsp;&nbsp;&nbsp;<input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check(form1)"></td></tr>
	</table>
</form>
</font>
</center>
<br>
<br>
<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>病历号</td>
                        <td>姓名</td>
                        <td>性别</td>
                        <td>年龄</td>
                        <td>疾病名称</td>
                        <td>状态</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <tr id="product1">
<!--                        <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</font></td>-->
                        <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
</font></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MedicalID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Name'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Sex'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Old'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['MedicalName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['State'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/chakanbinli_xiugai/works_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">建议治疗方案</a></td>
                    </tr>
                    <?php } ?>
</table>
</body>
</html>
<?php }} ?>