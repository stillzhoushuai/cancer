<?php /* Smarty version Smarty-3.1.6, created on 2016-01-05 10:59:10
         compiled from "D:/xampp/htdocs/Cancer/hospital/Admin/View\Mutation\xiugai.html" */ ?>
<?php /*%%SmartyHeaderCode:16524568519f9565fe0-23020778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48bf60611700466d5f65b7479fca2bd370e41e0f' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Admin/View\\Mutation\\xiugai.html',
      1 => 1451962738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16524568519f9565fe0-23020778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_568519f96eca4',
  'variables' => 
  array (
    'info' => 0,
    'info_A' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568519f96eca4')) {function content_568519f96eca4($_smarty_tpl) {?><html>
<head><title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="<?php echo @Admin_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
<style type="text/css">
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
<body align="left">
<tr><td>
<font size="4" color="black">
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：生物标记突变-》添加生物标记突变</span>
            </span>
        </div>
</font>
</td></tr>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__SELF__;?>
">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ID'];?>
"/>
	<table class="table_a" border="1" width="100%">

	<tr><td align="right">Gene ID:</td><td><input type="text" name="GeneID" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneID'];?>
"></td><td>&nbsp;</td></tr>
	<tr><td align="right">Gene Name:</td><td><input type="text" name="GeneName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['GeneName'];?>
"></td>
		<td align="right">Category:</td><td><select name="Category">
			 <option value="0">------------请选择---------</option>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Category'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['info']->value['Category'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_A']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['Category'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['Category'];?>
</option>
                 <?php } ?>
			</select>
		</td></tr>
	<tr><td align="right">Accession:</td><td><input type="text" name="Accession" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Accession'];?>
"></td><td align="right">Accession Version:</td><td><input type="text" name="AccessionVersion" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AccessionVersion'];?>
"></td></tr>
	<tr><td align="right">Description:</td><td><textarea name="Description" cols="50" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['Description'];?>
</textarea></td><td align="right">Gene:</td><td><input type="text" name="Gene" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Gene'];?>
"></td></tr>

	<tr><td align="right">DNAsource:</td><td><input type="text" name="DNAsource" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DNAsource'];?>
"></td><td align="right">cDNApostion:</td><td><input type="text" name="cDNApostion" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cDNApostion'];?>
"></td></tr>
	<tr><td align="right">Chrom:</td><td><input type="text" name="Chrom" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Chrom'];?>
"></td><td align="right">Exon:</td><td><input type="text" name="Exon" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Exon'];?>
"></td></tr>
	<tr><td align="right">Codons:</td><td><input type="text" name="Codons" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Codons'];?>
"></td><td align="right">CDSmutationSyntax:</td><td><input type="text" name="CDSmutationSyntax" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['CDSmutationSyntax'];?>
"></td></tr>
	<tr><td align="right">AminoAcidSubstitution:</td><td><input type="text" name="AminoAcidSubstitution" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AminoAcidSubstitution'];?>
"></td><td align="right">HgPosition:</td><td><input type="text" name="HgPosition" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['HgPosition'];?>
"></td></tr>
	<tr><td align="right">RefSNP:</td><td><input type="text" name="RefSNP" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['RefSNP'];?>
"></td><td align="right">RefSeqatpos:</td><td><input type="text" name="RefSeqatpos" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['RefSeqatpos'];?>
"></td></tr>
	<tr><td align="right">AlternativeSeq:</td><td><input type="text" name="AlternativeSeq" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AlternativeSeq'];?>
"></td><td align="right">DrugSensitivity:</td><td><input type="text" name="DrugSensitivity" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugSensitivity'];?>
"></td></tr>
	<tr><td align="right">DrugRiskSensitivity:</td><td><input type="text" name="DrugRiskSensitivity" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugRiskSensitivity'];?>
"></td><td align="right">TargetDrugs:</td><td><input type="text" name="TargetDrugs" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['TargetDrugs'];?>
"></td></tr>
	<tr><td align="right">AssociatedDiseaseName:</td><td><input type="text" name="AssociatedDiseaseName" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['AssociatedDiseaseName'];?>
"></td><td align="right">ReferenceLink:</td><td><input type="text" name="ReferenceLink" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ReferenceLink'];?>
"></td></tr>
	<tr><td align="right">MutationDescription:</td><td><textarea name="MutationDescription" cols="50" rows="10"><?php echo $_smarty_tpl->tpl_vars['info']->value['MutationDescription'];?>
</textarea></td></tr>
	<tr><td align="right">Last Updated:</td><td><input type="text" name="lastupdated" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['LastUpdated'];?>
" readonly="readonly"></td><td align="right">Operator:</td><td><input type="text" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Operator'];?>
" readonly="readonly"></td></tr>

<tr>
	<td align="center">
	<input type=submit name="Submit" class="btn_grey" value="Save" onclick="return check(form1)">
	
	</td>
</tr>
</table>
</form>
<hr/>




<script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.gene.value==""){
			alert("请输入gene！");form.gene.focus();return false;
		}
		if(form.category.value==""){
			alert("请输入category！");form.category.focus();return false;
		}
		if(form.accession.value==""){
			alert("请输入accession！");form.accession.focus();return false;
		}
		if(form.accessionversion.value==""){
			alert("请输入accessionversion！");form.accessionversion.focus();return false;
		}
		if(form.description.value==""){
			alert("请输入description！");form.description.focus();return false;
		}
		if(form.operator.value==""){
			alert("请输入operator！");form.operator.focus();return false;
		}
		if(form.lastupdated.value==""){
			alert("请输入lastupdated！");form.lastupdated.focus();return false;
		}

form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>