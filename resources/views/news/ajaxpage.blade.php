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
				<a href="{{url('/brand/edit/'.$v->brand_id)}}" type="button" class="btn btn-warning">编辑</a>
				<a href="{{url('/brand/destroy/'.$v->brand_id)}}" type="button" class="btn btn-danger">删除</a>
				<a href="{{url('/news/edit/'.$v->news_id)}}" class="btn btn-primary">新闻详情</a>
			</td>
		</tr>
		@endforeach
			<tr><td colspan="8">{{$news->links()}}</td></tr>
	