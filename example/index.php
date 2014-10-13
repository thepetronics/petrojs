<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PetroJs Example</title>
<script type="text/javascript" src="../Petrojs.js"></script>
</head>
<body>
<input type="text" id="prop" value="Hello Folks!" />
<input type="button" value="Hide" onclick="hide()" />
<input type="button" value="Show" onclick="show()" />
<input type="button" value="FadeIn" onclick="fadein()" />
<input type="button" value="FadeOut" onclick="fadeout()" />
<input type="button" value="Toggle" onclick="toggle()" />
<input type="button" value="Change Text" onclick="changetext()" />
<input type="button" value="Change Size" onclick="changesize()" />
<input type="button" value="Original Size" onclick="originalsize()" />
<input type="button" value="Change Background Color" onclick="changebgcolor()" />
<input type="button" value="OnClick" id="onclick" />
<input type="button" value="XMLHTTPGETRequest" onclick="get()" />
<input type="button" value="XMLHTTPGETRequestInnerHtml" onclick="getinnerhtml()" />
<input type="button" value="XMLHTTPGETRequestValue" onclick="getvalue()" />
<input type="button" value="XMLHTTPPOSTRequest" onclick="post()" />
<input type="button" value="XMLHTTPPOSTRequestInnerHtml" onclick="postinnerhtml()" />
<input type="button" value="XMLHTTPPOSTRequestValue" onclick="postvalue()" />

<div id="use">
</div>

<script type="text/javascript">
function hide() {
$petrojs('#prop').hide();
}
function show() {
$petrojs('#prop').show();
}
function fadein() {
$petrojs('#prop').fadeIn(100);
}
function fadeout() {
$petrojs('#prop').fadeOut(100);
}
function toggle() {
$petrojs('#prop').toggle();
}
function changebgcolor() {
$petrojs('#prop').bgcolor('#777');
}
function changetext() {
$petrojs('#prop').value('Its Changed');
}
function changesize() {
$petrojs('#prop').size('250','300');
}
function originalsize() {
$petrojs('#prop').size('15','166');
}
function get() {
petrojs.GET('../load/get.php','alert');
}
function getinnerhtml() {
petrojs.GET('../load/get.php','innerhtml','use');
}
function getvalue() {
petrojs.GET('../load/get.php','value','prop');
}
function post() {
petrojs.POST('data=Your Posted Value','../load/post.php','alert');
}
function postinnerhtml() {
petrojs.POST('data=Your Posted Value','../load/post.php','innerhtml','use');
}
function postvalue() {
petrojs.POST('data=Your Posted Value','../load/post.php','value','prop');
}
$petrojs('#onclick').click(function() {
		alert('its clicked');
});
</script>
</body>
</html>
