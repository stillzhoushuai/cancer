<?php /* Smarty version Smarty-3.1.6, created on 2015-12-27 19:51:09
         compiled from "/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/diseasedrugassociation_add.html" */ ?>
<?php /*%%SmartyHeaderCode:315602911567fcefed20779-55952870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0206bd9cf81cd0a1a351425e27f1981d57515c62' => 
    array (
      0 => '/opt/lampp/htdocs/Cancer/hospital/Admin/View/Genes/diseasedrugassociation_add.html',
      1 => 1451216780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315602911567fcefed20779-55952870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_567fcefedaf49',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567fcefedaf49')) {function content_567fcefedaf49($_smarty_tpl) {?><html>
<body>
<font size="4" color="black">
	<p><b>添加疾病药物关联分析信息</b></p>
</font>
<hr/>
<font size="3" color="black">
<form name="form1" method="post" action="<?php echo @__CONTROLLER__;?>
/diseasedrugassociation_add1">
	<table border="0px" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
		<td align="right">Disease Name:</td><td><input type="text" name="diseasename" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseName'];?>
"></td>
		<td align="right">Disease Stage:</td>
		<td><select name="diseasestage" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiseaseStage'];?>
">
			<option>&nbsp;</option>
			<option>&nbsp;</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="right">Drug Name:</td><td><input type="text" name="drugname" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugName'];?>
"></td>
		<td align="right">Drug Stage:</td><td><select name="drugstage" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DrugStage'];?>
">
			<option>Approved</option>
			<option>        </option>
			</select>
		</td>
	</tr>
	<tr><td align="right">Approved Year:</td><td><select name="approvedyear" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ApprovedYear'];?>
">
		<option>   </option>
		<option>   </option>
		</select>
		</td><td>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr><td align="right">Drug Stage Description:</td><td><textarea name="drugstagedescription" cols="60" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['DrugStageDescription'];?>
</textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Association Description:</td><td><textarea name="associationdescription" cols="60" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['AssociationDescription'];?>
</textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td align="right">Clinical Application Description:</td><td><textarea name="clinicalapplicationdescription" cols="60" rows="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['ClinicalApplicationDescription'];?>
</textarea></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr>
	<td align="right">Last updated:</td><td><input type="text" name="lastipdate" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['LastUpdate'];?>
"></td><td align="right">Operator:</td><td><input type="text" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Operator'];?>
"></td>
	</tr>
        <tr>
	<td align="center">
	<input type="submit"  name="Submit" class="btn_grey" value="Save" onClick="return check(form1)">
	
	</td>
</tr>
</table>
</form>
<hr/>


<script language="javascript">
	function check(form){				//验证表单是否为空
		if(form.diseasename.value==""){
			alert("请输入diseasename！");form.diseasename.focus();return false;
		}
	
		if(form.drugname.value==""){
			alert("请输入drugname！");form.drugname.focus();return false;
		}
		if(form.drugstage.value==""){
			alert("请输入drugstage！");form.drugstage.focus();return false;
		}
	
		if(form.drugstagedescription.value==""){
			alert("请输入drugstagedescription！");form.drugstagedescription.focus();return false;
		}
		if(form.accociationdescription.value==""){
			alert("请输入accociationdescription！");form.accociationdescription.focus();return false;
		}
		if(form.clinicalapplocationdescription.value==""){
			alert("请输入clinicalapplocationdescription！");form.clinicalapplocationdescription.focus();return false;
		}
		if(form.lastupdated.value==""){
			alert("请输入lastupdated！");form.lastupdated.focus();return false;
		}
		if(form.operator.value==""){
			alert("请输入operator！");form.operator.focus();return false;
		}
form.submit();
}
</script>
</font>
</body>
</html><?php }} ?>