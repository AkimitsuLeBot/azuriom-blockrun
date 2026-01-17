<div class="card shadow mb-4" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'changelogs-create'])>
    <div class="card-body">
        <form action="{{ route('jirai.changelogs.store') }}" method="POST">

            @include('jirai::changelog._form')

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
            </button>
        </form>
    </div>
</div>
