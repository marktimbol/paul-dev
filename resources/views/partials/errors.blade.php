@if (count($errors) > 0)
    <div class="card-panel errors">
        <ul class="white-text">
            @foreach ($errors->all() as $error)
                <li class="red-text">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif	