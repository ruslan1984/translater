<?php


namespace Lara\MyTranslater\Http;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Lara\MyTranslater\Contract\ITranslate;

class TranslaterController extends Controller
{
    public function index(){
        return View::make('translater::index');
    }
    public function pronoun(Request $request, ITranslate $translate){
        $word = $request->input('word');
        $result = $translate->translate($word);
        return View::make('translater::result', compact('result'));
    }
}
