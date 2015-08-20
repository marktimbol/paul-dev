@if (count($errors) > 0)
    <div class="card-panel red">
        <ul class="white-text">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif	