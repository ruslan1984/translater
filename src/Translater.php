<?php


namespace Lara\MyTranslater;


use Lara\MyTranslater\Contract\ITranslate;

class Translater implements ITranslate
{
    public function translate(string $word): string
    { $w=strtolower($word);
        switch ($w){
            case 'я':
                return 'أَنَا';
            case 'ты':
                return ' (м.р.) أَنْتَ |  (ж.р.)   أَنْتِ';
            case 'он':
                return 'هُوَ';
            case 'она':
                return 'هِىَ';
            case 'мы':
                return 'نَحْنُ';
            case 'вы':
                return ' (м.р.) أَنْتُمْ  | (ж.р.)   أَنْـتُـنَّ';
            case 'они':
                return ' (м.р.) هُمْ |  (ж.р.)   هُنَّ';
            default:
                return 'это не местоимение!';
        }
    }
}
