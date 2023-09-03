@extends('template')

@section('title') <title>История просмотра</title> @endsection

@section('script') <script src="{{ asset('./js/history.js') }}"></script> @endsection


@section('section')
<section class="history">
    <h2> История за всё время </h2>
    <table id="tableCurrentSession">
      <thead>
        <tr>
          <th></th>
          <th>Главная</th>
          <th>Обо мне</th>
          <th>Мои интересы</th>
          <th>Учёба</th>
          <th>Фотоальбом</th>
          <th>Контакты</th>
          <th>Тест по инженерной графике</th>
          <th>История просмотра</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th> Кол-во <br> посещений </th>
          <td> 0 </td>
          <td> 0 </td>
          <td> 0 </td>
          <td> 0 </td>
          <td> 0 </td>
          <td> 0 </td>
          <td> 0 </td>
          <td> 0 </td>
        </tr>
      </tbody>
    </table>

    <br><br>
    <h2> История текущего сеанса </h2>
    <table id="tableAllSessions">
      <thead>
        <tr>
          <th></th>
          <th>Главная</th>
          <th>Обо мне</th>
          <th>Мои интересы</th>
          <th>Учёба</th>
          <th>Фотоальбом</th>
          <th>Контакты</th>
          <th>Тест по инженерной графике</th>
          <th>История просмотра</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th> Кол-во <br> посещений </th>
          <td> 0 </td>
          <td> 0 </td>
          <td> 0 </td>
          <td> 0 </td>
          <td> 0 </td>
          <td> 0 </td>
          <td> 0 </td>
          <td> 0 </td>
        </tr>
      </tbody>
    </table>
    {{-- <script>
      // Parse the JSON-encoded headers data from PHP
      const headers = @json($headersData);
      const cellsCurrentSession = document.getElementById("tableCurrentSession").rows[1].cells;
      const cellsAllSessions = document.getElementById("tableAllSessions").rows[1].cells;

      updateAllSessionsCells(cellsAllSessions);
      updateCurrentSessionCells(cellsCurrentSession);

      function updateAllSessionsCells(cells) {
          for (let i = 1; i < cells.length; i++) {
              const headerText = headers[i];
              cells[i].textContent = localStorage.getItem(headerText);
          }
      }

      function updateCurrentSessionCells(cells) {
          for (let i = 1; i < cells.length; i++) {
              const headerText = headers[i];
              cells[i].textContent = ('; ' + document.cookie).split(`; ` + headerText + `=`).pop().split(';')[0];
          }
      }
    </script> --}}

{{-- <script>
  // Parse the JSON-encoded headers data from PHP
  const headers = @json($headersData);
  const cellsCurrentSession = document.getElementById("tableCurrentSession").rows[1].cells;
  const cellsAllSessions = document.getElementById("tableAllSessions").rows[1].cells;

  updateAllSessionsCells(cellsAllSessions);
  updateCurrentSessionCells(cellsCurrentSession);

  function updateAllSessionsCells(cells) {
      for (let i = 1; i < cells.length; i++) {
          cells[i].textContent = localStorage.getItem(headers[i]);
      }
  }

  function updateCurrentSessionCells(cells) {
      for (let i = 1; i < cells.length; i++) {
          cells[i].textContent = ('; ' + document.cookie).split(`; ` + headers[i] + `=`).pop().split(';')[0];
      }
  }
</script> --}}

<script>
    // Parse the JSON-encoded headers data from PHP
    const headers = @json($headersData);
    const cellsCurrentSession = document.getElementById("tableCurrentSession").rows[1].cells;
    const cellsAllSessions = document.getElementById("tableAllSessions").rows[1].cells;

    updateAllSessionsCells(cellsAllSessions);
    updateCurrentSessionCells(cellsCurrentSession);

    function updateAllSessionsCells(cells) {
        for (let i = 1; i < cells.length; i++) {
            cells[i].textContent = localStorage.getItem(headers[i]);
        }
    }

    function updateCurrentSessionCells(cells) {
        for (let i = 1; i < cells.length; i++) {
            cells[i].textContent = ('; ' + document.cookie).split(`; ` + headers[i] + `=`).pop().split(';')[0];
        }
    }

    // Your localStorageAndCookies function content goes here
    function updateLocalStorageAndCookies() {
        let title = document.title;
        if (title === "Главная") {
            const pages = ["Главная", "Обо мне", "Мои интересы", "Учёба", "Фотоальбом", "Контакты", "Тест по инженерной графике", "История просмотра"];
            if (localStorage.getItem("init") !== "YES") {
                localStorage.setItem("init", "YES");
                pages.forEach(element => {
                    localStorage.setItem(element, 0);
                });
            }
        }

        // Update Local Storage
        let visits = parseInt(localStorage.getItem(title)) || 0;
        localStorage.setItem(title, ++visits);

        // Update Cookies
        let cookiesArray = document.cookie.split("; ");
        let cookieValue = null;
        cookiesArray.forEach(cookie => {
            let [cookieName, value] = cookie.split("=");
            if (cookieName === title) {
                cookieValue = value;
            }
        });
        visits = parseInt(cookieValue) || 0;
        document.cookie = `${title}=${++visits}; path=/`;
    }

    // Call the function when needed, such as when a page loads
    updateLocalStorageAndCookies();
</script>




</section>
@endsection
