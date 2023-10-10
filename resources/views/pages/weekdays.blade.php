@extends('dashboard')


@section('content1')
    <h1>Заполните таблицу "Weekdays"</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('weekdays.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="пн">Понедельник</label>
            <input type="checkbox" name="пн" id="пн" value="1">
        </div>

        <div class="form-group">
            <label for="вт">Вторник</label>
            <input type="checkbox" name="вт" id="вт" value="1">
        </div>

        <div class="form-group">
            <label for="ср">Среда</label>
            <input type="checkbox" name="ср" id="ср" value="1">
        </div>

        <div class="form-group">
            <label for="чт">Четверг</label>
            <input type="checkbox" name="чт" id="чт" value="1">
        </div>

        <div class="form-group">
            <label for="пт">Пятница</label>
            <input type="checkbox" name="пт" id="пт" value="1">
        </div>

        <div class="form-group">
            <label for="сб">Суббота</label>
            <input type="checkbox" name="сб" id="сб" value="1">
        </div>

        <div class="form-group">
            <label for="вс">Воскресенье</label>
            <input type="checkbox" name="вс" id="вс" value="1">
        </div>

        <button type="submit" class="btn btn-primary text-dark">Сохранить</button>
    </form>

    
@endsection

