<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>详情页</title>
	<link rel="stylesheet" href="{{asset('/static/admin/css/bootstrap.min.css')}}">  
	<script src="/static/admin/js/jquery.min.js"></script>
	<script src="/static/admin/js/bootstrap.min.js"></script>
</head>
<body>
<h3>当前访问量:{{$count}}</h3>
<h3><a href="{{url('news/index')}}">展示</a></h3>
<table class="table table-hover">
	<center><h2>详情页</h2></center>
	<thead>
		<tr>
			<th>新闻标题</th>
			<th>作者</th>
			<th>主体内容</th>
			<th>添加时间</th>
		
			
		</tr>
		<tr>
			<td>{{$news->news_name}}</td>
			<td>{{$news->news_man}}</td>
			<td>{{$news->news_tex}}</td>
			<td>{{date('Y-m-d H:i:s',$news->news_time)}}</td>
	</thead>
	
</table>

</body>
</html>
