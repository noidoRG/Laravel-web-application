@extends('template')

@section('title') <title>Учёба</title> @endsection

@section('script')
    <script src="{{ asset('js/study.js') }}"></script>
@endsection


@section('section')
<section class="study">
  <h2> Севастопольский государственный университет</h2>
  <h2> Кафедра "Информационные системы"</h2>
  <h3> Перечень изучаемых дисциплин с 1-го по 4-ый семестр</h3>

  <h1><a href="{{ route('study') }}"> Пройти тест по инженерной графике</a></h1>

  <table>
    <tr>
      <th colspan="9">ПЛАН УЧЕБНОГО ПРОЦЕССА</th>
    </tr>
    <tr>
      <th rowspan="2">№</th>
      <th rowspan="2">Дисциплина</th>
      <th rowspan="2">Кафедра</th>
      <th colspan="6">Всего часов</th>
    </tr>
    <tr>
      <th>Всего</th>
      <th>Ауд</th>
      <th>Лк</th>
      <th>Лб</th>
      <th>Пр</th>
      <th>СРС</th>
    </tr>
    <tbody>
      <tr>
        <th>1</th>
        <td class="justify italic">Экология</td>
        <td>БЖ</td>
        <td>54</td>
        <td>27</td>
        <td>18</td>
        <td>0</td>
        <td>9</td>
        <td>27</td>
      </tr>
      <tr>
        <th>2</th>
        <td class="justify italic">Высшая математика</td>
        <td>ВМ</td>
        <td>540</td>
        <td>282</td>
        <td>141</td>
        <td>0</td>
        <td>141</td>
        <td>258</td>
      </tr>
      <tr>
        <th>3</th>
        <td class="justify italic">Русский язык и культура речи</td>
        <td>НГиГ</td>
        <td>108</td>
        <td>54</td>
        <td>18</td>
        <td>0</td>
        <td>36</td>
        <td>54</td>
      </tr>
      <tr>
        <th>4</th>
        <td class="justify italic">Основы дискретной математики</td>
        <td>ИС</td>
        <td>216</td>
        <td>139</td>
        <td>87</td>
        <td>0</td>
        <td>52</td>
        <td>77</td>
      </tr>
      <tr>
        <th>5</th>
        <td class="justify italic">Основы программирования и алгоритмические языки</td>
        <td>ИС</td>
        <td>405</td>
        <td>210</td>
        <td>105</td>
        <td>87</td>
        <td>18</td>
        <td>195</td>
      </tr>
      <tr>
        <th>6</th>
        <td class="justify italic">Основы экологии</td>
        <td>ПЭОП</td>
        <td>54</td>
        <td>27</td>
        <td>18</td>
        <td>0</td>
        <td>9</td>
        <td>27</td>
      </tr>
      <tr>
        <th>7</th>
        <td class="justify italic">Теория вероятностей и математическая статистика</td>
        <td>ИС</td>
        <td>162</td>
        <td>72</td>
        <td>54</td>
        <td>18</td>
        <td>0</td>
        <td>90</td>
      </tr>
      <tr>
        <th>8</th>
        <td class="justify italic">Физика</td>
        <td>Физики</td>
        <td>324</td>
        <td>194</td>
        <td>106</td>
        <td>88</td>
        <td>0</td>
        <td>130</td>
      </tr>
      <tr>
        <th>9</th>
        <td class="justify italic">Основы электротехники и электроники</td>
        <td>ИС</td>
        <td>108</td>
        <td>72</td>
        <td>36</td>
        <td>18</td>
        <td>18</td>
        <td>36</td>
      </tr>
      <tr>
        <th>10</th>
        <td class="justify italic">Численные методы в информатике</td>
        <td>ИС</td>
        <td>189</td>
        <td>89</td>
        <td>36</td>
        <td>36</td>
        <td>17</td>
        <td>100</td>
      </tr>
      <tr>
        <th>11</th>
        <td class="justify italic">Методы исследования операций</td>
        <td>ИС</td>
        <td>216</td>
        <td>104</td>
        <td>52</td>
        <td>35</td>
        <td>17</td>
        <td>112</td>
      </tr>
    </tbody>
  </table>

</section>
@endsection
