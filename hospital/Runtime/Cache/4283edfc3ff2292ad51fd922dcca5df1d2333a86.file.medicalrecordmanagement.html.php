<?php /* Smarty version Smarty-3.1.6, created on 2015-11-20 15:09:37
         compiled from "D:/xampp/htdocs/Cancer/hospital/Home/View\Index\medicalrecordmanagement.html" */ ?>
<?php /*%%SmartyHeaderCode:2028456415c06af7913-87086862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4283edfc3ff2292ad51fd922dcca5df1d2333a86' => 
    array (
      0 => 'D:/xampp/htdocs/Cancer/hospital/Home/View\\Index\\medicalrecordmanagement.html',
      1 => 1447989991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2028456415c06af7913-87086862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56415c06b5d22',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56415c06b5d22')) {function content_56415c06b5d22($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS_URL;?>
/medicalrecordmanagement.css"/>
<script type="text/javascript">
function check1(form){
        if(form.medicalid.value==""){
            alert("请输入病历号！");form.medicalid.focus();return false;
            }
        if(form.name.value==""){
             alert("请输入姓名！");form.name.focus();return false;
            }
        if(form.medicalname.value==""){
            alert("请输入疾病名称！");form.medicalname.focus();return false;
            }
        if(form.gene.value==""){
             alert("请输入基因！");form.gene.focus();return false;
            }
        form.submit();
}
function check2(form){
        if(form.medicalid.value==""){
            alert("请输入病历号！");form.medicalid.focus();return false;
        }
        if(form.name.value==""){
            alert("请输入姓名！");form.name.focus();return false;
        }
        form.submit();
}
function setTab(name,cursel){
	cursel_0=cursel;
	for(var i=1; i<=links_len; i++){
		var menu = document.getElementById(name+i);
		var menudiv = document.getElementById("con_"+name+"_"+i);
		if(i==cursel){
			menu.className="off";
			menudiv.style.display="block";  //块显示
		}
		else{
			menu.className="";
			menudiv.style.display="none";	//层隐藏
		}
	}
}
function Next(){                                                        
	cursel_0++;
	if (cursel_0>links_len)cursel_0=1
	setTab(name_0,cursel_0);
} 
var name_0='one';
var cursel_0=1;
var ScrollTime=2000000000;//循环周期（毫秒）
var links_len,iIntervalId;
onload=function(){
	var links = document.getElementById("tab1").getElementsByTagName('li')
	links_len=links.length;
	for(var i=0; i<links_len; i++){
		links[i].onmouseover=function(){
			clearInterval(iIntervalId);
			this.onmouseout=function(){
				iIntervalId = setInterval(Next,ScrollTime);;
			}
		}
	}
	document.getElementById("con_"+name_0+"_"+links_len).parentNode.onmouseover=function(){
		clearInterval(iIntervalId);
		this.onmouseout=function(){
			iIntervalId = setInterval(Next,ScrollTime);;
		}
	}
	setTab(name_0,cursel_0);
	iIntervalId = setInterval(Next,ScrollTime);
}
</script>
</head>
<body>
<div class="tab1" id="tab1">
	
	<div class="menu">
		<ul>
			<li id="one1" onclick="setTab('one',1)">查看病历</li>
			<li id="one2" onclick="setTab('one',2)">随诊记录</li>
		</ul>
	</div>
	<div class="menudiv" align="center">
                                <div id="con_one_1">
                                <form name="form1" method="post" action="">
                                <table border="0px">
                                <tr><td><span class="left" >病历号:<input type="text" name="medicalid" id="medicalid"></span>&nbsp;&nbsp;<span class="left">姓名:<input type="text" name="name1" id="name1"></span></td></tr>
                                <tr><td>&nbsp;</td></tr>
                                <tr><td><span class="left">疾病名称:<input type="text" name="medicalname" id="medicalname" size="70"></span></td></tr>
                                <tr><td>&nbsp;</td></tr>
                                <tr><td><span class="left">基因:<input type="text" name="gene" id="gene"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="left">基因属性：</span><input type=radio name="">ALL<input type=radio name="">+<input type=radio name="">-
                                &nbsp;&nbsp;&nbsp;<input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check1(form1)"></td></tr>
                                </table>
                                </form>
                                
                                        
                                
                        
                                    <br>
                        <a href="medicalrecordmanagement_1_view.php">查看</a>
            </div>
            <div id="con_one_2" style="display:none;">
                                <form name="form2" method="post" action="">
                                <table border="0px">
                                <tr><td><a href="createmedicalrecord.php">创建病历</a></td></tr>
                                <tr><td><span class="left" >病历号:<input type="text" name="medicalid" id="medicalid"></span>&nbsp;&nbsp;<span class="left">姓名:<input type="text" name="name" id="name"></span>
                                &nbsp;&nbsp;&nbsp;<input type="submit"  name="Submit" class="btn_grey" value="查询"  size="50" onClick="return check2(form2)"></td></tr>
                                </table>
                                </form>
                                <script language="javascript">
                                
                                </script>
            </div>
	</div>
</div>
</body>
</html><?php }} ?>