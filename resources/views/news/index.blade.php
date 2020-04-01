<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>新闻列表</title>
	<link rel="stylesheet" href="{{asset('/static/admin/css/bootstrap.min.css')}}">  
	<script src="/static/admin/js/jquery.min.js"></script>
	<script src="/static/admin/js/bootstrap.min.js"></script>
</head>
<body>

<table class="table table-hover">
	<center><h2>新闻列表</h2></center>
	<thead>
		<tr>
			<th>id</th>
			<th>新闻名称</th>
			<th>新闻分类</th>
			<th>新闻图片</th>
			<th>作者</th>
			<th>添加时间</th>
			<th>内容</th>
			<th>简介</th>
			<th>操作</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach ($news as $k=>$v)
		<tr>
			<td>{{$v->news_id}}</td>
			<td>{{$v->news_name}}</td>
			<td>{{$v->n_name}}</td>
			<td><img src="{{env('UPLOADS_URL')}}{{$v->simg}}" height='40'  width='40' alt=""></td>
			<td>{{$v->news_man}}</td>
			<td>{{date('Y-m-d H:i:s',$v->news_time)}}</td>
			<td>{{$v->news_tex}}</td>
			<td>{{$v->news_desc}}</td>
			<td>
				<a href="{{url('/news/edit/'.$v->brand_id)}}" type="button" class="btn btn-warning">编辑</a>
				<a href="{{url('/news/destroy/'.$v->brand_id)}}" type="button" class="btn btn-danger">删除</a>
				<a href="{{url('/news/edit/'.$v->news_id)}}" class="btn btn-primary">新闻详情</a>

			</td>
		</tr>
		@endforeach
			<tr><td colspan="8">{{$news->links()}}</td></tr>
	
	
	</tbody>

</table>

</body>
</html>
<script>
	$(document).on('click','.pagination a',function(){
		//alert('s');
		var url=$(this).attr('href');
		$.get(url,function(result){
			//alert(result);
			$('tbody').html(result);
		})
		return false;
	});
</script>