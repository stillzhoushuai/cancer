<?php /* Smarty version Smarty-3.1.6, created on 2015-12-14 10:10:40
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Works\viewreport_search1.html" */ ?>
<?php /*%%SmartyHeaderCode:16218566e252010cf42-00811572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7f844203db5f09aeb74d2f0239654903bf67117' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Works\\viewreport_search1.html',
      1 => 1450058762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16218566e252010cf42-00811572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_566e25201d42f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e25201d42f')) {function content_566e25201d42f($_smarty_tpl) {?><html>
<title></title>
<head>
<link rel="stylesheet" type="text/css" href="viewreport.css"/>
<style type="text/css">
    body{
	border:1px solid silver;
	width:800px;
	height:auto;
	margin:0 auto;
	/* background-color:blue; */
}
#td1{
	background-color:#FFE4C4;
	
}
span{
	backgroud-color:#a2d2ff;
	text-align:center;
	font-family:Arial,Helvetica,sans-serif;
	font-size:12px;
	padding:10px;
}
span.left{
	margin-right:30px;
	background-color:#a9d6ff;
}
</style>
</head>
<body><center>
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
	<table border="0">
	<tr><td id=td1>查看报告</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><span class="left">病历号&nbsp;&nbsp;:<input type="text" name="medicalid" id="medical"></span>&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="left">姓名&nbsp;&nbsp;:<input type="text" name="name" id="name"></span>
	&nbsp;&nbsp;&nbsp;<input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check(form1)"></td>
	</tr>
	</table>
</form>
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
/viewreport_xiugai/works_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">预览</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/viewreport_xiugai/works_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">重新生成报告</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/viewreport_xiugai/works_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">医生版</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/viewreport_xiugai/works_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">病人版</a></td>
                    </tr>
                    <?php } ?>
</table>
</body>
</html><?php }} ?>