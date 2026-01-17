<div
    class="card shadow mb-4" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'issues-create'])>
    <div class="card-body">
        <form action="{{ route('jirai.issues.store') }}" method="POST">

            @include('jirai::issue._form')

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
            </button>
        </form>
    </div>
</div>
