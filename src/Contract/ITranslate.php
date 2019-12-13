<?php
namespace Lara\MyTranslater\Contract;


use Lara\MyTranslater\Operation\Translation;

interface ITranslate
{
public function translate(string $word): string;
}
