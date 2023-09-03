@extends('template')

@section('title') <title>Мои интересы</title> @endsection

@section('section')
  <main class="hobbies">
    <aside>
      <!-- <ol>
        <li> <h3> <a href=#hobby> Любимое хобби </a> </h3> </li>
        <li> <h3> <a href=#music> Любимая музыка </a> </h3> </li>
        <li> <h3> <a href=#videogames> Любимые видеоигры </a> </h3> </li>
      </ol> -->
    </aside>

    <section class="hobbies">
      <h1 id="hobby"> Любимое хобби </h1>
      <p> Без сомнений, моё самое любимое увлечение - это изучение всевозможных способов передачи информации, в
        частности - иностранные языки и языкознание. Я люблю смотреть видео на канале Ecolinguist, где люди пытаются
        друг друга понять, разговаривая на разных языках из одной языковой группы. Я довольно часто открываю для себя
        новые области знаний к которым я испытываю неподдельный интерес, и порой такие увлечения занимают очень много
        времени. Внизу я оставил картинки с языками, которые я изучал. </p>
      <div id="grid1">
        <img src="{{asset('img/hobbies/hobby/Russian.svg.webp')}}" alt="Русский язык">
        <img src="{{asset('img/hobbies/hobby/Ukrainian.webp')}}" alt="Украинский язык">
        <img src="{{asset('img/hobbies/hobby/Polish.svg.png')}}" alt="Польский язык">
        <img src="{{asset('img/hobbies/hobby/English.svg.png')}}" alt="Английский язык">
        <img src="{{asset('img/hobbies/hobby/Japanese.svg.webp')}}" alt="Японский язык">
        <img src="{{asset('img/hobbies/hobby/French.webp')}}" alt="Французский язык">
      </div>

      <h1 id="music"> Любимая музыка </h1>
      <p> Я люблю слушать музыку разных жанров. Зачастую именно моё настроение задаёт жанр музыки, которую я собираюсь
        слушать. Поэтому довольно непросто выделить что-то одно. На картинках ниже я приведу обложки работ авторов,
        которые мне интересны.</p>
      <div id="grid2">
        <img src="{{asset('img/hobbies/music/Lady_Gaga.png')}}" alt="Lady Gaga">
        <img src="{{asset('img/hobbies/music/Rihanna.png')}}" alt="Rihanna">
        <img src="{{asset('img/hobbies/music/Dua_Lipa.png')}}" alt="Dua Lipa">
      </div>

      <h1 id="videogames"> Любимые видеоигры </h1>
      <p> Мне нравится множество различных игр, но, увы, мне нечасто удаётся найти свободную минуту для них. Ниже
        приведены мои любимые игры на игровой площадке Steam. </p>
      <div id="grid3">
        <img src="{{asset('img/hobbies/videogames/DarkSouls1.jpg')}}" alt="Dark Souls 1">
        <img src="{{asset('img/hobbies/videogames/DarkSouls2.jpg')}}" alt="Dark Souls 2">
        <img src="{{asset('img/hobbies/videogames/DarkSouls3.jpg')}}" alt="Dark Souls 3">
        <img src="{{asset('img/hobbies/videogames/EldenRing.jpg')}}" alt="Elden Ring">
        <img src="{{asset('img/hobbies/videogames/HollowKnight.jpg')}}" alt="Hollow Knight">
        <img src="{{asset('img/hobbies/videogames/GeometryDash.jpg')}}" alt="Geometry Dash">
        <img src="{{asset('img/hobbies/videogames/Celeste.jpg')}}" alt="Celeste">
        <img src="{{asset('img/hobbies/videogames/DiscoElysium.jpg')}}" alt="Disco Elysium">
        <img src="{{asset('img/hobbies/videogames/Batman.jpg')}}" alt="Batman: Arkham Knight">
        <img src="{{asset('img/hobbies/videogames/Portal2.jpg')}}" alt="Portal 2">
        <img src="{{asset('img/hobbies/videogames/LegoBatman3.jpg')}}" alt="LEGO Batman 3">
        <img src="{{asset('img/hobbies/videogames/DeadByDaylight.jpg')}}" alt="Dead by Daylight">
      </div>
    </section>
  </main>
    
@endsection