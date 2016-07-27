<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>phpwcms: LOGIN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="robots" content="noindex, nofollow">
	<link href="include/inc_css/login.css" rel="stylesheet" type="text/css">
	<script language="javascript" type="text/javascript" src="include/inc_js/phpwcms.js"></script>
	<script language="javascript" type="text/javascript" src="include/inc_js/md5.js"></script>
</head>

<body>
<table width="504" border="0" align="center" cellpadding="0" cellspacing="0" summary="Login Screen">
  <tr>
    <td colspan="3"><img src="img/leer.gif" alt="" width="1" height="12"></td>
  </tr>
  <tr>
    <td colspan="3"><img src="img/leer.gif" alt="" width="18" height="1"><a href="index.php" target="_top"><img src="img/backend/preinfo2.jpg" alt="phpwcms" width="122" height="31" border="0"></a></td>
  </tr>
  <tr>
    <td colspan="3"><img src="img/leer.gif" alt="" width="1" height="7"></td>
  </tr>
  <tr>
    <td colspan="3"><a href="index.php" target="_top"><img src="img/backend/preinfo2_r4_c2.jpg" alt="phpwcms" width="504" height="154" border="0"></a></td>
  </tr>
  <tr>
    <td colspan="3"><img src="img/leer.gif" alt="" width="1" height="11"></td>
  </tr>
  <tr>
    <td width="15" style="width:15px;"><img src="img/backend/preinfo2_r6_c2.gif" alt="" width="15" height="15" border="0"></td>
    <td width="474" bgcolor="#FFFFFF" style="width:474px;"><img src="img/backend/preinfo2_r6_c3.gif" alt="" width="474" height="15" border="0"></td>
    <td width="15" style="width:15px;"><img src="img/backend/preinfo2_r6_c7.gif" alt="" width="15" height="15" border="0"></td>
  </tr>
  <tr>
    <td style="background-image:url(img/backend/preinfo2_r7_c2.gif);background-repeat:repeat-y;" bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF" style="padding-left:3px;padding-right:3px;" id="loginFormArea">
		<div class="error" style="font-weight:bold;padding:0 0 15px 0;font-size:12px;text-align:center">JavaScript wird im Backend ben&ouml;tigt!</div></td>
    <td style="background-image:url(img/backend/preinfo2_r7_c7.gif);background-repeat:repeat-y;background-position:right;" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td style="background-image:url(img/backend/preinfo2_r7_c2.gif);background-repeat:repeat-y;" bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF" style="padding: 0 3px 5px 3px;font-size:10px;"><strong><a href="http://www.phpwcms.de" target="_blank" style="text-decoration:none;">phpwcms</a></strong> Copyright &copy; 2003&#8212;2007
            Oliver Georgi. Extensions are copyright of their respective owners.
            Visit <a href="http://www.phpwcms.de" target="_blank">http://www.phpwcms.de</a> for
            details. phpwcms is free software released under <a href="http://www.fsf.org/licensing/licenses/gpl.html" target="_blank">GPL</a> and comes WITHOUT ANY WARRANTY. Obstructing the appearance of this notice is prohibited
      by law. 
    </td>
    <td style="background-image:url(img/backend/preinfo2_r7_c7.gif);background-repeat:repeat-y;background-position:right;" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td><img src="img/backend/preinfo2_r9_c2.gif" alt="" width="15" height="15" border="0"></td>
    <td bgcolor="#FFFFFF"><img src="img/backend/preinfo2_r9_c3.gif" alt="" width="474" height="15" border="0"></td>
    <td><img src="img/backend/preinfo2_r9_c7.gif" alt="" width="15" height="15" border="0"></td>
  </tr>
</table>
<div id="loginForm" style="display:none;">
<form name="login_formular" method="post" action="login.php" autocomplete="off" style="margin:0;padding:0;" onsubmit="return login(this);">
<input type="hidden" name="json" id="json" value="0" />
<input type="hidden" name="md5pass" id="md5pass" value="" />
<input type="hidden" name="ref_url" value="" />
<input name="form_aktion" type="hidden" id="form_aktion" value="login" />
<h1>Anmelde-Daten eingeben</h1><div class="error" style="margin-top:10px;font-weight:bold;display:none;" id="jserr">Fehler beim Anmelden!</div>	

	<table border="0" cellpadding="0" cellspacing="0" summary="Login Form" style="margin:15px 0 20px 10px">
        <tr>
          <td align="right" nowrap="nowrap" class="v10">Benutzer:&nbsp;</td>
          <td class="v10"><input name="form_loginname" type="text" id="form_loginname" style="width:250px;" size="30" maxlength="30" value=""></td>
          </tr>
        <tr><td colspan="2"><img src="img/leer.gif" alt="" width="1" height="3"></td></tr>
        <tr>
          <td align="right" nowrap="nowrap" class="v10">Passwort:&nbsp;</td>
          <td class="v10"><input name="form_password" type="password" id="form_password" style="width:250px;" size="30" maxlength="40"></td>
          </tr>
        <tr><td colspan="2"><img src="img/leer.gif" alt="" width="1" height="4"></td></tr>
        <tr>
          <td align="right" nowrap="nowrap" class="v10">Backend Sprache:&nbsp;</td>
          <td class="v10"><select name="form_lang" id="form_lang" style="width:250px;" onchange="getObjectById('json').value='2';login(this.form);">
            <option value="ar">&#1593;&#1585;&#1576;&#1610;</option>
<option value="bg">&#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080;</option>
<option value="ca">Catal&agrave;</option>
<option value="cz">&#268;esky</option>
<option value="da">Dansk</option>
<option value="de" selected="selected">Deutsch</option>
<option value="en">English</option>
<option value="es">Espa&ntilde;ol</option>
<option value="et">Eesti</option>
<option value="fi">Suomi</option>
<option value="fr">Fran&#231;ais</option>
<option value="gr">&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;</option>
<option value="hu">Magyar</option>
<option value="it">Italiano</option>
<option value="lt">Lietuviu</option>
<option value="nl">Nederlands</option>
<option value="no">Norsk</option>
<option value="pl">Polski</option>
<option value="pt">Portugu&ecirc;s</option>
<option value="ro">Rom&acirc;n&#259;</option>
<option value="ru">&#1056;&#1091;&#1089;&#1089;&#1082;&#1086;&#1084;</option>
<option value="se">Svenska</option>
<option value="sk">Sloven&#269;ina</option>
<option value="sl">Sloven&scaron;&#269;ina</option>
<option value="tr">T&uuml;rk&ccedil;e</option>
<option value="vn">Ti&#7871;ng Vi&#7879;t</option>          </select></td>
          </tr>
        <tr><td colspan="2"><img src="img/leer.gif" alt="" width="1" height="10"></td></tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="submit_form" type="submit" value="Anmelden" /></td>
          </tr>
    </table>
    </form>
</div>
<script language="javascript" type="text/javascript">
<!--
var loginHTML = getObjectById('loginForm');
var loginArea = getObjectById('loginFormArea');
loginArea.innerHTML = loginHTML.innerHTML;
loginHTML.innerHTML = '';
document.login_formular.form_loginname.focus();
//-->
</script>
</body>
</html>