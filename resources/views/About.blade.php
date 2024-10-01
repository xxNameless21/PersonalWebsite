@extends('main')

@section('content')
<!-- Link to your specific CSS files -->
<link rel="stylesheet" href="{{asset('asset/css/about.css')}}">
<title>About | Rayya Fawuziyyah</title>

<body>
<section class="section__container about__container" id="about">
    <div class="about__image">
        <img src="{{ asset('asset/img/bg.png') }}" alt="bg" class="about__bg-1" />
        <img src="{{ asset('asset/img/bg.png') }}" alt="bg" class="about__bg-2" />
        <img src="{{ asset('asset/img/about Ray2.jpg') }}" alt="about" class="about__img" />
    </div>
    <div class="about__content">
        <h2 class="section__header">Bit About Me</h2>
        <p class="section__description">
            As a teenager studying coding, specifically design, I combine creativity with functionality. Every line of code is a canvas for me to express and create memorable digital experiences. My focus is on creating intuitive interfaces that leave a long-lasting impact, shaping the digital world.
        </p>
        <div class="about__btn">
            <a href="https://drive.google.com/file/d/1ODJhZGCCdpmCQX4Jwh2RRevBz4aFjsgu/view?usp=drive_link" download>
                <button class="btn">View My CV</button>
            </a>
        </div>
    </div>
</section>
</body>

@endsection
