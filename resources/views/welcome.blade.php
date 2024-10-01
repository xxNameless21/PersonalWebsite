@extends('main')

@section('content')
<!-- Link to your specific CSS files -->
<link rel="stylesheet" href="{{ asset('asset/css/welcome.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">

<header class="section__container header__container" id="home">
    <div class="header__content">
        <div>
            <h1>Rayya Fawuziyyah</h1>
            <h2>Hello there!</h2>
        </div>
        <p class="section__description">
            I am a teenager studying coding, I am currently in an industrial class. I want to create an interactive design that not only attracts attention but also makes a good impression on readers. Being part of an industry class makes me proud, as we continually strive to learn and improve our skills together.
        </p>
    </div>
    <div class="header__image">
        <img src="{{ asset('asset/img/me.jpg') }}" alt="header">
    </div>
</header>
@endsection
