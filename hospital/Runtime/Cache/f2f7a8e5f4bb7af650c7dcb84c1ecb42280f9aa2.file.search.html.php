<?php /* Smarty version Smarty-3.1.6, created on 2016-04-25 13:09:22
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Refseqs\search.html" */ ?>
<?php /*%%SmartyHeaderCode:5412568520dfb903e4-34356688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2f7a8e5f4bb7af650c7dcb84c1ecb42280f9aa2' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Refseqs\\search.html',
      1 => 1461550990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5412568520dfb903e4-34356688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_568520dfd49ad',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568520dfd49ad')) {function content_568520dfd49ad($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
 .table_a{ border-collapse:collapse;border: 1px solid #E3E6EB }
.table_a td{ line-height: 25px; padding-left: 8px;text-align: left; }
.div_head{
    font-size: 13px;
    margin: 10px 5px;
    padding-left: 10px;
    line-height: 25px;
    height:25px;
    background-color: #E8F2FC;
    border-bottom: solid #1c94c4 1px
}
</style>
</head>
<body>
<font size="4" color="black">
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：参考序列-》参考序列查询</span>
            </span>
        </div>
</font>
<hr/>
<table border="0px" cellpadding="0" cellspacing="0" bgcolor="" align="left">
<font size="3" color="black">
<form name="myform" method="post" action="<?php echo @__CONTROLLER__;?>
/search_handle">
	<tr>
		<td align="right">Accession</td><td><input type="text" name="accession" id="accession" size="25"></td>
		<td align="right">Sequence</td><td><input type="text" name="sequence" id="sequence" size="25"></td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
		<td align="right">CDS Start</td><td><input type="text" name="cdsstart" id="cdsstart" size="25"></td>
		<td align="right">CDS End</td><td><input type="text" name="cdsend" id="cdsend" size="25"></td>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr>
		<td colspan="2" align="center">
		<input type=submit name="Submit" value="Search" onclick="">
		</td>
		
	</tr>
</form>

</table>
<table border="1px" class="table_a" id="result">
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>Gene</td>
                        <td>Accession</td>
                        <td>AccessionVersion</td>
                        <td>Exons Start</td>
                        <td>Exons End</td>
                        <td>Exons Star</td>
                        <td>CDS Start</td>
                        <td>CDS End</td>
                        <td>Sequence</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Gene'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Accession'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['AccessionVersion'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ExonsStart'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ExonsEnd'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ExonsStar'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['CDSstart'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['CDSend'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Sequence'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/xiugai/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/delete/newIdDelet/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
" onclick="if (confirm('确定要删除吗？')) return true; else return false;">删除</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                      <td colspan="100" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                      </td>
                    </tr>
</table>
</font>
</body>
</html><?php }} ?>