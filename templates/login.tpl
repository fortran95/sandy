<!DOCTYPE HTML>
<html>
<head>
<title>Sandy - 身份认证</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="static/css/reset.css">
<link rel="stylesheet" type="text/css" href="static/css/structure.css">
</head>

<body>
<div class="box info">
{if isset($success)}
<strong>{$success}</strong> 已经登录成功。
{elseif isset($error)}
登录错误，请检查用户名和密码。
{else}
您的密码将用于系统运行所需的一系列信息的解密。您必须启用Cookies才能登录。
{/if}
</div>
<form class="box login" method="post" action="account.php">
        <input type="hidden" name="action" value="login">
	<fieldset class="boxBody">
	  <label><a href="account.php?show=reg" class="rLink" tabindex="1">注册新用户</a>用户名</label>
	  <input type="text" name="username" tabindex="2" placeholder="在此输入您的用户名" required>
	  <label>密码</label>
	  <input type="password" name="password" tabindex="3" required>
	</fieldset>
	<footer>
	  <label><input type="checkbox" tabindex="4">保持登录状态</label>
	  <input type="submit" class="btnLogin" value="登录" tabindex="5">
	</footer>
</form>
</body>
</html>
