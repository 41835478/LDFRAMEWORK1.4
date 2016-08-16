<!DOCTYPE html><!--STATUS OK-->
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta content="always" name="referrer"><meta name="theme-color" content="#2932e1">
<title>异常页面设计_百度搜索</title>
<style>
	html{background:#FCFFEC;}
	.box{width:100%; font-size:14px; font-family:"Microsoft YaHei";  padding: 14px 0px; background:#ECF6FF;}
	.box p {padding-left:14px;}
	.box pre {padding-left:14px; line-height:33px;  font-size:14px; font-family:"Microsoft YaHei";}
</style>
</head>
<body>
	<h1>LDFARMEWORK遇到了一个问题</h1>
	<div class='box'>
			<h2><p>【警告】LDFARMEWORK 中 {$file}文件第{$line}行  {$Message}</p></h2>
			<pre>{$traceString}</pre>
			{foreach from =$trace item = 's'}
			<p>{$s.file} 在这个文件中  {$s.class}{$s.type}{$s.function}	&nbsp;	&nbsp;{$s.line}</p>
			{/foreach}
	</div>
</body>
</html>