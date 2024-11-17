<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>THÔNG BÁO</title>
<link href='css/jquerymobile.css' rel="stylesheet" />
<script type="text/javascript" language='javascript' src="js/jquery.js"></script>
<script type="text/javascript" language='javascript' src="js/jquerymobile.js"></script>
<script type="text/javascript" language='javascript' src="js/simpledialog.js"></script>
<script type="text/javascript" language='javascript' src="js/utils.js"></script>
</head>
<body>
<div data-role="page">
<div data-role="header" data-theme="b">
		<h1>CẢNH BÁO</h1>
</div>
<div id="divContainer" style="width:100%; margin:auto;">
<div data-role="fieldcontain">
<div align="center">[THONGBAO]</div>
<div align="center">
<input type="button" data-inline="true" data-theme="b" id="btnBack" name="btnBack" value="Quay lại" />
</div>
</div>
</div>
</body>
<script type="text/javascript" language="javascript">
$(function() {	
	$("#btnBack").click(function(e) {
		history.back();
    });
});
</script>
</html>