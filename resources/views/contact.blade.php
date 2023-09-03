@extends('template')

@section('title') <title>Контакты</title> @endsection

@section('script') <script src="{{ asset('./js/contact.js') }}"></script> @endsection

@section('section')    
<section id="mainInfo" class="contact mainForm">

    <form action="{{ route('contact.store') }}" method="post" id="form" >
        @csrf
        {{-- ОСТОРОЖНО --}}
        @if(session('message'))
            <div class="areYouSureWindow" id="areYouSure">
            <p> {{ session('message') }} </p>
            
            <div id="OK" onclick="hideMessageBox()"> ОК </div>
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
        
    {{-- <form action="mailto:noidorga@gmail.com" method="post" id="form" > --}}
    <h2>Форма обратной связи</h2>
    
    <div class= "form-item">
        <label for="Name"> Ваше ФИО: </label>
        <input type="text" size="50" placeholder="Введите ФИО" id="Name" name="Name" tabindex="-1">
        @error('Name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- <div class= "form-item">
      <label for="name"> Ваше ФИО: </label>
      <input type="text" size="50" placeholder="Введите ФИО" id="Name" name="Name" tabindex="-1">
    </div> --}}
  
    <div class="form-item">
        <p>Укажите Ваш пол:</p>
        <p><input type="radio" name="Gender" value="male" tabindex="-1">Мужской</p>
        <p><input type="radio" name="Gender" value="female" tabindex="-1">Женский</p>
        <p><input type="radio" id="Gender" name="Gender" value="secret" checked="checked" tabindex="-1">Не выбран</p>
        @error('Gender')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    {{-- <div class= "form-item">
      <p>Укажите Ваш пол:</p>
      <p><input type="radio" name="Gender" value="male" tabindex="-1">Мужской</p>
      <p><input type="radio" name="Gender" value="female" tabindex="-1">Женский</p>
      <p><input type="radio" id="Gender" name="Gender" value="secret" checked="checked" tabindex="-1">Не выбран</p>
    </div> --}}
  
    <div class="form-item">
        <p>Укажите Ваш возраст:</p>
        <select id="Age" name="Age" tabindex="-1">
            <option value="" disabled selected>Укажите возраст:</option>
            <option value="under14">Меньше 14</option>
            <option value="14-17">14-17</option>
            <option value="18-24">18-24</option>
            <option value="25-35">25-35</option>
            <option value="over35">Больше 35</option>
        </select>
        @error('Age')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    

    {{-- <div class= "form-item">
      <p>Укажите Ваш возраст:</p>
      <select id="Age" name="Age" tabindex="-1">
        <option value="" disabled selected>Укажите возраст:</option>
        <option value="under14">Меньше 14</option>
        <option value="14-17">14-17</option>
        <option value="18-24">18-24</option>
        <option value="25-35">25-35</option>
        <option value="over35">Больше 35</option>
      </select>
    </div> --}}

    <label for="Birth-date" id="calendar"> Дата рождения:</label>
    <input type="text" placeholder="..." id="Birth-date" name="Birth-date">
    @error('Birth-date')
        <span class="text-danger">{{ $message }}</span>
    @enderror
        
    {{-- <label for="Birth-date" id="calendar"> Дата рождения:</label>
    <input type="text" placeholder="..." id="Birth-date" name="Birth-date"> --}}

    <div class="form-item">
        <p>Напишите сообщение: </p>
        <textarea id="Message" name="Message" cols="50" rows="5" placeholder="Напишите ваше сообщение"></textarea>
        @error('Message')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    {{-- <div class= "form-item">
      <p>Напишите сообщение: </p>
      <textarea id="Message" name="Message" cols="50" rows="5" placeholder="Напишите ваше сообщение"></textarea>
    </div> --}}

    <div class="form-item">
        <p>Укажите адрес электронной почты для обратной связи: </p>
        <input type="email" size="50" placeholder="johndoe@example.com" id="Mail" name="Mail" tabindex="-1">
        @error('Mail')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
{{-- 
    <div class= "form-item">
      <p>Укажите адрес электронной почты для обратной связи: </p>
      <input type="email" size="50" placeholder="johndoe@example.com" id="Mail" name="Mail" tabindex="-1">
    </div>
     --}}

     <div class="form-item">
        <p>Укажите номер телефона: </p>
        <input type="tel" size="20" placeholder="+79781234567" id="Phone-number" name="Phone-number" tabindex="-1">
        @error('Phone-number')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
     
    {{-- <div class= "form-item">
      <p>Укажите номер телефона: </p>
      <input type="tel" size="20" placeholder="+79781234567" id="Phone-number" name="Phone-number" tabindex="-1">
    </div> --}}

    <div class= "form-item">
      <input type="reset" value="Очистить форму" tabindex="-1" onclick="didTapResetButton()">
      <input type="button" id="submitButton" tabindex="-1" value = "Отправить">
    </div>
  </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
const colorAccept= '#66FFA5';
const colorDeny = '#E6B3B3';
const primaryColor = '#004640';
const secondaryColor = '#e8ecec';
const hoverColor = '#D2DADA';

const Months = { "Jan":0, "Feb":1, "Mar":2, "Apr":3, "May":4, "Jun":5, "Jul":6, "Aug":7, "Sep":8, "Oct":9, "Nov":10, "Dec":11 };
const weekDayNames0 = ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"];
const weekDayNames1 = ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"];
const weekDayNames2 = ["Tu", "We", "Th", "Fr", "Sa", "Su", "Mo"];
const weekDayNames3 = ["We", "Th", "Fr", "Sa", "Su", "Mo", "Tu"];
const weekDayNames4 = ["Th", "Fr", "Sa", "Su", "Mo", "Tu", "We"];
const weekDayNames5 = ["Fr", "Sa", "Su", "Mo", "Tu", "We", "Th"];
const weekDayNames6 = ["Sa", "Su", "Mo", "Tu", "We", "Th", "Fr"];
let weekDayNames = weekDayNames1;

let defaultDate = new Date();

main();

function main() {
    setupOnSubmitValidation(); //
    setupFormFocusoutValidation(); //
    setupCalendar(); //
    setupPopovers(); //
    setupAreYouSureWindow();

    $('#OK').click(function() {
        // $('#form').submit();
        $('#areYouSure').fadeOut('fast');
        $('body').css({'visibility': 'visible'});
        // alert("Форма успешно отправлена!!!");
        return true;
    });

    $('#YES').click(function() {
        $('#form').submit();
        $('#areYouSure').fadeOut('fast');
        $('body').css({'visibility': 'visible'});
        // alert("Форма успешно отправлена!!!");
        return true;
    });

    $('#NO').click(function() {
        $('#areYouSure').fadeOut('fast');
        $('body').css({'visibility': 'visible'});
        return false;
    });

}

function setupOnSubmitValidation() {
    $('#submitButton').click(function() {
        let result = true;
        const formElements = ["Gender", "Age", "Birth-date", "Message", "Mail"];

        formElements.forEach(element => {
            if (!validateEmptyInput($('#'+ element))) result = false;
        });

        if (!validateName($('#Name'))) result = false;

        if (!validatePhoneNumber($('#Phone-number'))) result = false;

        if(!validateMail($("#Mail"))) result = false;
        if (result) {
            $('body').css({'visibility': 'hidden'});
            $('#areYouSure').css({'visibility': 'visible'});
            $('#areYouSure').fadeIn('fast');
        }
    });
}



function setupFormFocusoutValidation() {
    const formElements = ["Gender", "Age", "Birth-date", "Message", "Mail"];

    formElements.forEach(element => {
        $('#'+ element).focusout(function() {
            validateEmptyInput($(this));
        });
    });

    $('#Name').focusout(function() {
        validateName($(this))
    });

    $('#Phone-number').focusout(function() {
        validatePhoneNumber($(this))
    });
}

function validateEmptyInput(element) {    
    if (element.val() == "" || element.val() == null) {
        element.attr('placeholder','Заполните поле ');
        element.css('backgroundColor',colorDeny);
        return false;
    } else {
        element.attr('placeholder','...');
        element.css('backgroundColor',colorAccept);
        return true;
    }
}

function validateName(element) {
    let result = true;
    let regName = /^[A-Za-zА-яЁё]+ [A-Za-zА-яЁё]+ [A-Za-zА-яЁё]+$/;
    result = regName.test(element.val());
    if (!result) {
        element.val("");
        element.attr('placeholder','Некорректные данные');
        element.css('backgroundColor',colorDeny);
    } else {
        element.attr('placeholder','...');
        element.css('backgroundColor',colorAccept);
    }
    return result;
}

function validatePhoneNumber(element) {
    let result = true;
    let regPhoneNumber = /^[\+][7|3][\d]{7,9}[\d]$/;
    result = regPhoneNumber.test(element.val());
    if (!result) {
        element.val("");
        element.attr('placeholder','Некорректные данные');
        element.css('backgroundColor',colorDeny);
    } else {
        element.attr('placeholder','...');
        element.css('backgroundColor',colorAccept);
    }
    return result;
}

function validateMail(element) {
    let result = true;
    let regvalidateMail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
    result = regvalidateMail.test(element.val());
    if (!result) {
        element.val("");
        element.attr("placeholder","Некорректные данные");
        element.css(`backgroundColor`,colorDeny);
    } else {
        // element.attr("placeholder","...");
        element.css(`backgroundColor`,colorAccept);
    }
    return result;
}

function didTapResetButton() {
    const formElements = ["Name", "Gender", "Age", "Birth-date", "Message", "Mail", "Phone-number"];

    $("#calendar").children().eq(0).hide("fast");
    formElements.forEach(elementName => {
        $('#' + elementName)
            .attr('placeholder', '...')
            .css(`backgroundColor`, 'white');
    });
}


function setupPopovers() {
    $('#Phone-number')
        .attr('data-toggle', 'popover')
        .attr('data-placement', 'bottom')
        .attr('data-content', 'Номер должен начинаться на +7 или +3 и содержать от 9 до 11 цифр')
        .attr('data-trigger', 'hover')
        .popover({
            delay: 1000
        });
    $('#Name')
        .attr('data-toggle', 'popover')
        .attr('data-placement', 'bottom')
        .attr('data-trigger', 'hover')
        .attr('data-content', 'ФИО должно состоять из трёх слов, разделённых пробелом')
        .popover({
            delay: 1000
        });
}

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

function setupCalendar() {
    let birthDateInput = $("#Birth-date");
    let monthYear = $("<div class='divMonthYear'></div>");
    let dates = $("<div class='divDates'></div>");
    let monthSelect = $("<select id='monthSelect'></select>");
    let yearSelect = $("<select id='yearSelect'></select>");
    let defaultMonthOption = $("<option selected='selected' value='Jan'>Jan</option>");
    
    monthSelect.append(defaultMonthOption);
    
    const monthNames = ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    monthNames.forEach(element => {
        let option = $(`<option value=${element}>${element}</option>`);
        monthSelect.append(option);
    });
    
    defaultYearOption = $(`<option selected='selected' value='2007'>2007</option>`);
    yearSelect.append(defaultYearOption);
    for (let index = 2006; index >= 1950; index--) {
        let option = $(`<option value='${index}'>${index}</option>`);
        yearSelect.append(option);
    }
    
    weekDayNames.forEach(element => {
        let date = $(`<div class='divWeekDay'>${element}</div>`);
        dates.append(date);
    });
    
    for (let i = 1; i <= 31; i++) {
        let date = $(`<div id='${i}' class='divDate'>${i}</div>`);
        date.mouseenter(function() {$(this).css(`backgroundColor`,`${hoverColor}`)});
        date.mouseleave(function() {$(this).css(`backgroundColor`,`${secondaryColor}`)});
        date.click(function() {
            // Construct the birth date string with the padded day
            let birthDay = (i < 10) ? `0${i}` : i;
            birthDateInput.val($("#monthSelect").val() + "/" + birthDay + "/" + $("#yearSelect").val());
            validateEmptyInput(birthDateInput.eq(0));
        });
        dates.append(date);
    }
    
    
    monthYear.append(monthSelect);
    monthYear.append(yearSelect);
    
    
    let calendar = $('<div class="divCalendar"></div>');
    calendar.hide();
    calendar
    .append(monthYear)
    .append(dates);
    
    let birthDate = $('#calendar');
    birthDate.append(calendar);


    birthDateInput.add(calendar).click(function() {
        if (!(monthSelect.is(":focus") || yearSelect.is(":focus"))) {
            calendar.toggle();
        }
    });

    const month30days = ["Apr", "Jun", "Sep", "Nov"];
    const month31days = ["Jan", "Mar", "May", "Jul", "Aug", "Oct", "Dec"];
    monthSelect.click(function(event) {
        if (month31days.includes($(this).val())) {
            [29, 30, 31].forEach( element => {
                $('#' + element).show();
            });
         } else if (month30days.includes($(this).val())){
            [29, 30, 31].forEach( element => {
                $('#' + element).show();
            });
            $('#31').hide();
         } else {
            [29, 30, 31].forEach( element => {
                $('#' + element).hide();
            });
         }
         updateWeekDaysAndLeapYear();
    });

    yearSelect.click(() => updateWeekDaysAndLeapYear());
}


    function updateWeekDaysAndLeapYear() {
        if ($("#monthSelect") != null || $("#yearSelect") != null) {
            let month =$("#monthSelect").val();
            let year =$("#yearSelect").val();
            defaultDate.setFullYear(parseInt(year));
            defaultDate.setMonth(Months[`${month}`]);
            defaultDate.setDate(1);
            switch(parseInt(defaultDate.getDay())) {
                case 0: weekDayNames = weekDayNames0; break;
                case 1: weekDayNames = weekDayNames1; break;
                case 2: weekDayNames = weekDayNames2; break;
                case 3: weekDayNames = weekDayNames3; break;
                case 4: weekDayNames = weekDayNames4; break;
                case 5: weekDayNames = weekDayNames5; break;
                case 6: weekDayNames = weekDayNames6; break;
            }
            for (let i = 0; i < 7; i++) {
                $(".divWeekDay").eq(i).text(weekDayNames[i]);
            }
            
            const isLeapYear = new Date(year, 1, 29).getDate() === 29;
            (isLeapYear)? $("#29").removeClass("hide") 
                        : $("#29").addClass("hide"); 
        }
    }
    function hideMessageBox() {
        var messageBox = document.getElementById('areYouSure');
        messageBox.style.display = 'none';
        location.reload();
    }
</script>
</body>
</html>
@endsection
