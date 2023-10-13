<?php

use Carbon\Carbon;

$today = Carbon::now(); 
$dayName = $today->format('l'); // Используем 'l' для получения названия дня недели
echo "Сегодня " . $dayName;

echo "<br>";
$daysOfWeek = [];

for ($day = 0; $day < 7; $day++) {
    $date = Carbon::now()->startOfWeek()->addDays($day);
    $dayName = $date->format('D'); // Используем 'D' для получения трех букв названия дня
    $daysOfWeek[] = $dayName;
}

echo "Дни недели: " . implode(', ', $daysOfWeek);
/* --------------------------------- */
$mon = true;

function index() {
    // Определяем текущий день недели (0 - воскресенье, 1 - понедельник, и так далее)
    $currentDayOfWeek = date('N');

    // Проверяем, что сегодня понедельник и переменная $mon равна true
    if ($currentDayOfWeek === 1 && $GLOBALS['mon']) {
        echo "today is Monday";
    }
}

// Вызываем функцию index
index();
echo "<br>";

?>

@foreach ($weekdays as $weekday)
    @if ($weekday->id == 1)
        @foreach ($weekday->getAttributes() as $key => $value)
            @if ($key == 'пн')
                @php
                    $keyValue = $key;
                    $valueValue = $value;
                @endphp

                День недели: {{ $keyValue }}, Значение: {{ $valueValue }} <br>

                @if ($valueValue === 1)
                    @php
                        echo "today is Monday";
                    @endphp
                @else
                    @php
                        echo "today is NOT Monday";
                    @endphp
                @endif
            @endif
        @endforeach
    @endif
@endforeach

<?php
echo "<br>";
?>

@if ($weekday)
    @php
        $keyVariable = '1';
        $valueVariable = $weekday->id;
    @endphp

    День недели : ключ {{ $keyVariable }}, Значение: {{ $valueVariable }}
@else
    Запись с id {{ $id }} не найдена.
@endif