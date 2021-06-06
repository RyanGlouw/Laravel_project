@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto at atque consequuntur dicta dolorum
        ducimus eos fuga illo iure maxime necessitatibus numquam, odio placeat provident quibusdam quisquam ratione
        sequi unde voluptas. Cupiditate deleniti harum hic magnam nostrum quae sequi! Blanditiis error iste laudantium,
        magni nostrum optio similique sit temporibus.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
