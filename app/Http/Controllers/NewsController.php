<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use App\News;
use App\NewsType;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $news=News::leftjoin('newstype','news.news_id','=','newstype.n_id')->paginate(2);
        //dd($news);
        //ajax分页
        if (request()->ajax()) {
            return view('news.ajaxpage',['news'=>$news]);
        }
        return view('news.index',['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newstype=NewsType::all();
        return view('news.create',['newstype'=>$newstype]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=$request->except('_token');
        $post['news_time']=time();
        //dd($post);
        if ($request->hasFile('simg')) {
            $post['simg']=$this->upload('simg');
            //dd($img);
        }
         $res=News::insert($post);
        //dd($res);
        if ($res) {
            return redirect('/news/index');
        }
    }
    public function upload($img){
        if (request()->file($img)->isValid()){
            $file = request()->$img;
            $store_result = $file->store('uploads');
            return $store_result;
        }
        exit('未获取到上传文件或上传过程出错');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news=News::find($id);
        $count=Redis::setnx('count'.$id,1)?
        Redis::get('count'.$id):Redis::incr('count'.$id);
        ;
        //dd($news);
        return view('news.edit',['news'=>$news,'count'=>$count]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
