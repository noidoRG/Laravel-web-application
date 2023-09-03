@extends('template')
@section('title') <title>Тест по инженерной графике</title> @endsection

@section('script')
    <script src="{{ asset('./js/test.js') }}"></script>
@endsection


@section('section')    
<section class="test">
  <form method="post" onsubmit="return validateForm()" action="{{ route('test.store') }}">
    @csrf

    @if(session('message'))
      <div class="areYouSureWindow" id="areYouSure">
        <p> {{ session('message') }} </p>
        <div id="OK" onclick="hideMessageBox()" style="display: flex; justify-content: center;"> ОК </div>
      </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    {{-- @if($errors->any())
      <div class="areYouSureWindow" id="areYouSure">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
        <div id="NO" onclick="hideOK()"> ОК </div>
      </div>
    @endif --}}

    <h2>Тест по инженерной графике</h2>

    <div class="form-item">
      <label for="ФИО">Ваше ФИО:</label>
      <input type="text" size="50" placeholder="Введите ФИО" id="ФИО" name="name" title="Фамилия, имя и отчество на русском языке, без знаков препинания">
    </div>

    <div class="form-item">
      <p>Выберите Вашу группу:</p>
      <select id="Группа" name="group">
          <option value="" disabled selected>Укажите Вашу группу:</option>
        <optgroup label="1 курс">
          <option value="1">ИТ/б-22-1-о </option>
          <option value="2">ИТ/б-22-2-о </option>
          <option value="3">ИТ/б-22-3-о </option>
          <option value="4">ИТ/б-22-4-о </option>
          <option value="5">ИТ/б-22-5-о </option>
          <option value="6">ИТ/б-22-6-о </option>
          <option value="7">ИТ/б-22-7-о </option>
        </optgroup>
        <optgroup label="2 курс">
          <option value="8">ИС/б-21-1-о</option>
          <option value="9">ИС/б-21-2-о</option>
          <option value="10">ИС/б-21-3-о</option>
          <option value="11">ПИ/б-21-1-о</option>
        </optgroup>
        <optgroup label="3 курс">
          <option value="12">ИС/б-20-1-о</option>
          <option value="13">ИС/б-20-2-о</option>
          <option value="14">ПИ/б-20-1-о</option>
        </optgroup>
        <optgroup label="4 курс">
          <option value="15">ИС/б-18-1-о</option>
          <option value="16">ИС/б-18-2-о</option>
          <option value="17">ПИ/б-18-1-о</option>
        </optgroup>
      </select>
    </div>

    <div class= "form-item">
      <p>1&rpar; Кто считается основателем начертательной геометрии?</p>
      <p><input type="radio" name="question1" value="Gaspar">Гаспар Монж</p>
      <p><input type="radio" name="question1" value="Gerard">Жерар Дезарг</p>
      <p><input type="radio" name="question1" id="Вопрос№1" value="Dubois">Гарри Дюбуа</p>
    </div>
    
    <div class= "form-item">
      <p>2&rpar; Какой из этих видов чертежей определяет геометрическую форму (контур) изделия и координаты расположения составных частей?</p>
      <select id="Вопрос№2" name="question2">
        <option value="" disabled selected>Выберите ответ:</option>
        <option value="assembly_drawing">Сборочный чертеж</option>
        <option value="theoretical_drawing">Теоретический чертеж</option>
        <option value="montage_drawing">Монтажный чертеж</option>
        <option value="packaging_drawing">Упаковочный чертеж</option>
      </select>
    </div>

    <div class= "form-item">
      <p>3&rpar; Определение черчения: </p>
      <textarea id="Вопрос№3" name="question3" cols="50"  placeholder="Черчение - это ..." title="Введите не более тридцати слов"></textarea>
    </div>

    <div class= "form-item">
      <input type="reset" value="Очистить форму">
      <input type="submit" value="Отправить">
    </div>

  </form>
  <script>

const colorAccept= '#66FFA5';
const colorDeny = '#E6B3B3';
const primaryColor = '#004640';
const secondaryColor = '#e8ecec';
const hoverColor = '#D2DADA';

  setupAreYouSureWindow();

  function setupAreYouSureWindow() {
    let areYouSureWindow = $('<div style="z-index:200;color:white;" class="areYouSureWindow" id="areYouSure"><p> Вы уверены? </p> <div id="YES"> ДА </div> <div id="NO"> НЕТ </div></div>').hide();
    $('#form').append(areYouSureWindow);

    $('#YES').add('#OK').mouseenter(function() {
        $(this).css('backgroundColor', colorAccept).css('color',primaryColor);
    });
    
    $('#NO').mouseenter(function() {
        $(this).css('backgroundColor', colorDeny).css('color',primaryColor);
    });
    $('#YES').add('#NO').add('#OK').mouseleave(function() {
        $(this).css('backgroundColor', primaryColor).css('color','white');
    });
  }
    function validateForm() {
    const mapForm = new Map([
        ["ФИО", $("[name=name]").prop("value")],
        ["Группа", $("[name=group]").prop("value")],
        ["Вопрос№1", $("input[name=question1]:checked").val()],
        ["Вопрос№2", $("[name=question2]").val()],
        ["Вопрос№3", $("[name=question3]").val()]
    ]);

    if (!validateEmptyInputs(mapForm)) return false;
    if (!validateName(mapForm.get("ФИО"))) return false;
    if (!validateTextArea(mapForm.get("Вопрос№3"))) return false;

    // alert("Форма успешно отправлена!");
    return true;
  }


    function validateEmptyInputs(mapForm) {
        let isFilled = true;
        let formElement; // Текущий проверяемый элемент
        mapForm.forEach((value, key) => { // Сначала значение, потом ключ
            if (!isFilled) {
                return false;
            }
            if (value == "" || value == null) {
                formElement = key;
                isFilled = false;
            }
        });
        if (!isFilled) {
            alert("Пожалуйста, заполните поле " + formElement);
            $('#'+formElement).focus();
        }
        return isFilled;
    }

    function validateName(name) {
    let isValid = true;
    let regName = /^[\p{L}\s]+$/u; // Use \p{L} for Unicode letters and /u flag
    isValid = regName.test(name) && !/\d/.test(name); // Add check for digits
    if (!isValid) {
        alert("Неверное значение поля ФИО");
        $("#ФИО").focus();
    }
    return isValid;
}

function validateTextArea(textarea) {
    let isValid = true;
    let wordCount = textarea.trim().split(/\s+/).length; // Count words using spaces as separators
    
    if (wordCount > 30) {
        isValid = false;
    }

    if (!isValid) {
        alert("Требуется ввести не более 30 слов");
        $("#Вопрос№3").focus();
    }
    
    return isValid;
}
    
    function hideMessageBox() {
        var messageBox = document.getElementById('areYouSure');
        messageBox.style.display = 'none';
        location.reload();
    }
  </script>
</section>
@endsection
