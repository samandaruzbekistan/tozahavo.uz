<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\News;
use App\Models\Photo;
use App\Models\Text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function auth(Request $request){
        $validated = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255'
        ]);
        $admin = Admin::where('username', $request->username)->first();
        if (empty($admin)){
            return back()->with('error','1');
        }
        if ($admin->password == md5(md5($request->password))){
            session()->put('admin','1');
            return redirect(route('admin_home'));
        }
    }

    public function home(){
        $texts = Text::all();
        return view('admin.index', ['texts' => $texts]);
    }

    public function logout(){
        session()->flush();
        return redirect(route('admin_login'));
    }

    public function new_text(Request $request){
        $text = new Text;
        $text->uz = $request->uz;
        $text->ru = $request->ru;
        $text->en = $request->en;
        $text->save();
        return back();
    }

    public function edit_text($id){
        $text = Text::where('id', $id)->first();
        return view('admin.edit', ['text' => $text]);
    }

    public function update_text(Request $request){
        $text = Text::find($request->id);
        $text->uz = $request->uz;
        $text->ru = $request->ru;
        $text->en = $request->en;
        $text->save();
        return redirect(route('admin_home'));
    }

    public function news(){
        $news = News::latest()->get();
        return view('admin.news')->with('news', $news);
    }

    public function add_news(Request $request){
        $file = $request->file('photo')->extension();
        $name = md5(microtime());
        $path = $request->file('photo')->move('images/',$name.".".$file);

        $news = new News;
        $news->photo = $name.".".$file;
        $news->title = $request->title;
        $news->title_en = $request->title_en;
        $news->title_ru = $request->title_ru;
        $news->body = $request->body;
        $news->body_en = $request->body_en;
        $news->body_ru = $request->body_ru;
        $news->save();
        return back();
    }


    public function news_edit($id){
        $news = News::find($id);
        return view('admin.news_edit', )->with('news', $news);
    }

    public function update_news(Request $request){
        if ($request->hasFile('photo')){
            $file = $request->file('photo')->extension();
            $name = md5(microtime());
            $path = $request->file('photo')->move('images/',$name.".".$file);

            $news = News::find($request->id);
            unlink('images/'.$news->photo);
            $news->title = $request->title;
            $news->title_en = $request->title_en;
            $news->title_ru = $request->title_ru;
            $news->body = $request->body;
            $news->body_en = $request->body_en;
            $news->body_ru = $request->body_ru;
            $news->photo = $name.".".$file;

            $news->save();
        }
        else{
            $news = News::find($request->id);
            $news->title = $request->title;
            $news->title_en = $request->title_en;
            $news->title_ru = $request->title_ru;
            $news->body = $request->body;
            $news->body_en = $request->body_en;
            $news->body_ru = $request->body_ru;
            $news->save();
        }

        return redirect(route('admin_news'));
    }

























    public function photos(){
        $photos = Photo::all();
        return view('admin.photos')->with('photos', $photos);
    }

    public function new_photo(Request $request){
        $file = $request->file('photo')->extension();
        $name = md5(microtime());
        $path = $request->file('photo')->move('images/',$name.".".$file);
        $photo = new Photo;
        $photo->name = $name.".".$file;
        $photo->save();
        return back();
    }

    public function update_photo(Request $request){
        $file = $request->file('photo')->extension();
        $name = md5(microtime());
        $path = $request->file('photo')->move('images/',$name.".".$file);
        $photo = Photo::find($request->photo_id);
        unlink('images/' . $photo->name);
        $photo->name = $name.".".$file;
        $photo->save();
        return back();
    }




    public function partners(){
        $photos = DB::table('partners')->get(['*']);
        return view('admin.partners')->with('photos', $photos);
    }

    public function new_partner(Request $request){
        $file = $request->file('photo')->extension();
        $name = md5(microtime());
        $path = $request->file('photo')->move('images/',$name.".".$file);
        DB::table('partners')->insert(['name' => $name.".".$file]);
        return back();
    }

    public function update_partner(Request $request){
        $file = $request->file('photo')->extension();
        $name = md5(microtime());
        $path = $request->file('photo')->move('images/',$name.".".$file);
        $photo = DB::table('partners')->where('id',$request->photo_id)->first();
        unlink('images/' . $photo->name);
        DB::table('partners')->where('id',$request->photo_id)->update(['name' => $name.".".$file]);
        return back();
    }
}
