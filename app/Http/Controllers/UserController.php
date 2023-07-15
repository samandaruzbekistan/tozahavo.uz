<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\News;
use App\Models\Photo;
use App\Models\Text;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        $texts = Text::all();
        $photos = Photo::all();
        $news = News::latest()->paginate(6);
        $partners = DB::table('partners')->get(['*']);
        if (session()->has('lang')){
            $lang = session('lang');
            switch (session('lang')){
                case 'uz':
                    $title_lang = 'title';
                    $body_lang = 'body';
                    break;
                case 'ru':
                    $title_lang = 'title_ru';
                    $body_lang = 'body_ru';
                    break;
                case 'en':
                    $title_lang = 'title_en';
                    $body_lang = 'body_en';
                    break;
            }
        }
        else{
            session()->put('lang', 'uz');
            $lang = 'uz';
            $title_lang = 'title';
            $body_lang = 'body';
        }

        return view('user.index',['texts' => $texts, 'lang' => $lang, 'photos' => $photos, 'news' => $news, 'title_lang' => $title_lang, 'body_lang' => $body_lang,'partners' => $partners]);
    }

    public function set_lang($lang){
        session()->put('lang', $lang);
        return back();
    }

    public function read_news($id){
        $texts = Text::all();
        if (session()->has('lang')){
            $lang = session('lang');
            switch ($lang){
                case 'uz':
                    $title_lang = 'title';
                    $body_lang = 'body';
                    break;
                case 'ru':
                    $title_lang = 'title_ru';
                    $body_lang = 'body_ru';
                    break;
                case 'en':
                    $title_lang = 'title_en';
                    $body_lang = 'body_en';
                    break;
            }
        }
        else{
            $lang = 'uz';
            $title_lang = 'title';
            $body_lang = 'body';
            session()->put('lang', 'uz');
        }
        $news = News::find($id);
        return view('user.read_news', ['texts' => $texts, 'lang' => $lang, 'news' => $news,'title_lang' => $title_lang, 'body_lang' => $body_lang]);
    }
}
