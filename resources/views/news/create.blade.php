<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>新闻添加</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
​<center><h2>新闻添加</h2></center>
<!-- @if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>@endforeach
</ul>
</div>
@endif -->
<form class="form-horizontal" role="form" action="{{url('/news/store')}}" method='post' enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">新闻标题</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="firstname" 
                   placeholder="请输入新闻标题" name='news_name'>
                   <b style='color:red'>{{$errors->first('name')}}</b>
        </div>
    </div>
      <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">新闻分类</label>
        <div class="col-sm-8">
            <select name="n_id" id="">
                <option value="">请选择</option>
                @foreach($newstype as $k=>$v)
               <option value="{{$v->n_id}}">{{$v->n_name}}</option>
                @endforeach
            </select>
         
        </div> 
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">新闻图片</label>
        <div class="col-sm-8">
            <input type="file" class="form-control" id="lastname" 
                   placeholder="请输入品牌logo" name='simg'>
        </div>
    </div>
      <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">新闻作者</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="lastname" 
                   placeholder="请输入品牌网址" name='news_man'>
                   <b style='color:red'>{{$errors->first('man')}}</b>
        </div>
    </div>
       <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">新闻简介</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="lastname" 
                   placeholder="请输入简介" name='news_desc'>
                   <b style='color:red'>{{$errors->first('man')}}</b>
        </div>
    </div>
       <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">新闻内容</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="lastname" 
                   placeholder="请输入新闻内容" name='news_tex'>
                   <b style='color:red'>{{$errors->first('man')}}</b>
        </div>
    </div>
 
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加</button>
        </div>
    </div>

