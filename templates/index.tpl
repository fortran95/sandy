<html>
<head>
<meta charset="UTF-8" />
<title>{$user.name} - 微博</title>
<link rel="stylesheet" type="text/css" href="static/css/reset.css">
<link rel="stylesheet" type="text/css" href="static/css/structure.css">
<script src="static/js/ajax.js"></script>
</head>
<body>
<div class="box info">
<strong>{$user.name}</strong>
</div>


<div class="box rightcolumn">
这里显示一些有用的信息
</div>

<div id="entries">
<div class="box entry">
第一条微博
</div>
</div>

<script>
ajax('ajax.php',function(c){
    c = "<div class=\"box entry\">" + c + "</div>";
    document.getElementById('entries').innerHTML += c;
});
</script>
</body>
</html>
