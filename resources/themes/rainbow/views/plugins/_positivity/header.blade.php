@push('styles')
    <link href="{{ plugin_asset('positivity', 'css/style.css') }} " rel="stylesheet">
@endpush

<div class="card card-body d-flex flex-wrap flex-row justify-content-start">
    <?php
    $features = array("accounts", "verifications");
    if (setting("positivity.has_bans")) {
        array_push($features, "bans", "oldbans");
    }
    ?>
    @foreach($features as $name)
        @can($name . ".show")
            <a class="btn btn-primary mx-3" href="{{ route('positivity.' . $name) }}">
                {{ trans('positivity::messages.' . $name . '.list') }}
            </a>
        @endcan
    @endforeach
    <div class="flex-grow-1 d-flex align-items-center mx-3">
        <label for="playername" class="visually-hidden">playername</label>
        <input type="text" class="form-control" id="playername" name="playername" required>
        <a type="submit" value="submit request" class="btn btn-primary mx-3"
           onclick="return checkValidation(document.getElementById('playername').value)">
            {{ trans('messages.actions.search') }}
            <span role="status"></span>
        </a>
    </div>
</div>

@push('scripts')
    <script>
        function checkValidation(name) {
            window.location.href = "{{ route('positivity.accounts.show', ['account' => 'UUID']) }}".replace('UUID', name);
            return false;
        }
    </script>
@endpush
