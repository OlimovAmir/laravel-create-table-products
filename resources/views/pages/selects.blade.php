@extends('dashboard')

@section('content1')
<select id="optionsSelect">
</select>

<script>
    
    fetch('/options')
    .then(response => response.json())
    .then(data => {
        const select = document.getElementById('optionsSelect');

        data.forEach(option => {
            const optionElement = document.createElement('option');
            optionElement.value = option.id;
            optionElement.textContent = option.day;

            select.appendChild(optionElement);
        });
    });
</script>
@endsection