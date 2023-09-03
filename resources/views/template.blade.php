<!DOCTYPE html>
<html lang="ru">
<head>
  @yield('title')
  @yield('script')
  <script src="{{ asset('js/jquery-3.6.2.min.js') }}"></script>
  <script defer src="{{ asset('js/localStorageAndCookies.js') }}"></script>
  <script defer src="{{ asset('js/menu.js') }}"></script>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/passport.ico') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <nav id="navHeader">
    <ul id="navList">
      <li> <h1> <a href="{{ route('main') }}"> Главная </a> </h1> </li>
      <li> <h1> <a href="{{ route('about_me') }}"> Обо мне </a> </h1> </li>
      {{-- <li> <h1> <a href="{{ route('hobbies') }}" id="hobbiesDropdownMenu"> Мои интересы </a> </h1> </li> --}}
      <li> 
        <h1> 
          <a href="#" id="hobbiesDropdownMenu">
            Мои интересы
            <ul style="cursor:default" class="dropdownMenu">
              @foreach ($hobbiesData as $index => $hobbiesList)
              <li> <h5> <a style="color:var(--primaryColor)" title="{{$hobbiesList['caption']}}" href="{{$hobbiesList['reference']}}"> {{$hobbiesList['hobbyName']}} </a> </h5> </li> <br>
              @endforeach
                {{-- <li> <h5> <a style="color:var(--primaryColor)" href="hobbies#hobby"> Любимое хобби </a> </h5> </li> <br>
                <li> <h5> <a style="color:var(--primaryColor)" href="hobbies#music"> Любимая музыка </a> </h5> </li> <br>
                <li> <h5> <a style="color:var(--primaryColor)" href="hobbies#videogames"> Любимые видеоигры </a> </h5> </li> <br> --}}
            </ul>
          </a> 
        </h1> 
      </li>
      <li> <h1> <a href="{{ route('study') }}"> Учёба </a> </h1> </li>
      <li> <h1> <a href="{{ route('album') }}"> Фотоальбом </a> </h1> </li>
      <li> <h1> <a href="{{ route('contact') }}"> Контакты </a> </h1> </li>
      <li> <h1> <a href="{{ route('test') }}"> Тест по инженерной графике </a> </h1> </li>
      <li> <h1> <a href="{{ route('history') }}"> История просмотра </a> </h1> </li>
    </ul>
  </nav>
  @yield('section')
  <script>
    // Call the function when the page is fully loaded
    window.onload = function () {
      updateLocalStorageAndCookies();
    };
  </script>
</body>
</html>
