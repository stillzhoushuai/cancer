<?php /* Smarty version Smarty-3.1.6, created on 2016-01-03 11:53:42
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Binli\chakanbinli_tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:312256889b1aba5172-07486069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2974c5acd99f733ca35d497c34ee3c326977444c' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Binli\\chakanbinli_tianjia.html',
      1 => 1451793215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312256889b1aba5172-07486069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56889b1ac4929',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56889b1ac4929')) {function content_56889b1ac4929($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>查看病历</title>
<script language="javascript" type="text/javascript" src="<?php echo @Home_JS_URL;?>
/My97DatePicker/WdatePicker.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS_URL;?>
mine.css"/>
<body>
<font size="4" color="black">
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：病历管理-》随诊记录-》添加病历</span>
                <span style="float: right"><input type="button"  name="button1" class="btn_grey" value="返回"  size="50" onclick="history.go(-1)"></span>
            </span>
        </div>
</font>
<center>
<form name="form1" enctype="multipart/form-data" method="post" action="<?php echo @__CONTROLLER__;?>
/chakanbinli_tianjia">
		<table class="table_a" border="1" width="100%">
		<tr><td><font siez="4px"><b class=b1>病人信息</b></td></tr>
		<tr>
			<td>姓名:<input type="text" name="Name" readonly="true"></td>
			<td>年龄:<input type="text" name="Old"  readonly="true"></td>
			<td>性别:<select name="Sex" readonly="true">
						<option>男</option>	
						<option>女</option>
				  	</select>
			</td>
		<tr>
		<tr>
			<td>联系电话:<input type="text" name="PhoneNumber" size="12" readonly="true">
            <td>吸烟:<select name="Smoking" readonly="true">
						<option>是</option>
						<option>否</option>
					</select>
			</td>
		</tr>
		<tr>
			<td>病人来源:<select name="PatientResource"  readonly="true">
							<option>山西省中医研究院</option>
							<option></option>
						</select>
						</td>
			<td>临床医生:<select name="Clinician"  readonly="true">
							<option>None</option>
							<option></option>
						</select>
			</td>
		</tr>
		<tr>
			<td>检测机构:<select name="TestingOrganization" readonly="true">
							<option>山西医科大学公卫研究所</option>
							<option></option>
						</select></td>
			<td>实验室:<select name="Lab"  readonly="true">
							<option>山西医科大学公卫研究所</option>
							<option></option>
						</select>
			</td>
		</tr>
		<tr><td>备注:<textarea rows="6" cols="60" name="Remark" readonly="true"></textarea></td></tr>
		<tr><td><font siez="4px"><b class=b1>疾病信息</b></td></tr><br/><br/>	
		<tr>
			<td>现病史:<textarea rows="6" cols="60" name="HistoryOfPresentIllness" readonly="true"></textarea></td></tr>
		<tr>
			<td>病理报告:<textarea rows="6" cols="60" name="Report" readonly="true"></textarea>
			</td></tr>
		<tr><td>病理报告附件:<input type="file" name="binlibaogaofujian" ></td></tr>
		<tr><td>病理报告附件:</td></tr>
		<tr><td><input type="file" name="binlitupian1" ></td></tr>
		<tr><td><input type="file" name="binlitupian2" ></td></tr>
		<tr><td><input type="file" name="binlitupian3" ></td></tr>
		<tr><td><input type="file" name="binlitupian4" ></td></tr>
		<tr><td>病人口述音频:<input type="file" name="binrenkoushuyinpin" ></td></tr>
		<tr><td>即往史:<textarea rows="6" cols="60" name="PreviousHistory" readonly="true">
					</textarea></td></tr>
		<tr><td>家族史:<textarea rows="6" cols="60" name="FamilyHistory" readonly="true">
					</textarea></td></tr>
		<tr><td>基因检测史:<input type="file" name="jiyinjianceshi" ></td></tr>
		<tr>
			<td><font color="red">*</font>组织类型：
                        <input type="checkbox" name="ffpe" >FFPE
						<input type="checkbox" name="freshtissue" >Fresh Tissue
						<input type="checkbox" name="pleuraleffusion" >Pleural Effusion
						<input type="checkbox" name="ascites" >Ascites
						<input type="checkbox" name="wholeblood" >Whole Blood
			</td>
		</tr>
		<tr>
			<td>取样位置：<input type="text" name="SamplingPosition" size=20 readonly="true">
			</td></tr>
		<tr>
			<td>取样医生：<input type="text" name="SamplingDoctor" size=20 readonly="true"></td></tr>
		<tr>
			<td>预约取样时间：<input type="text" readonly="true" id="d11" onclick="WdatePicker()" name="SamplingTime" ><img src="<?php echo @Home_IMG_URL;?>
/datePicker.gif"></td></tr>
		<tr align="middle">
			<td align="rigth"><input type="submit" name="Submit" value="保存"></td>
		</tr>	
	</table>
	</form>
</center>
</body>
</html><?php }} ?>