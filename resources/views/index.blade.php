<h1>Пререводчик арабских местоимений</h1>
<form action="{{ route('translate.pronoun') }}" method="post">
    @csrf
    <label for="">
        Введите любое местоимение
        <input name="word" type="text"/>
        <button>Перевести</button>
    </label>
</form>
