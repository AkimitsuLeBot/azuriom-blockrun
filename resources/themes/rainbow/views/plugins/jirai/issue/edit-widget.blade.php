<div class="card shadow mb-4" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'issues-edit'])>
    <div class="card-body">
        <form action="{{ route('jirai.issues.update', $issue) }}" method="POST">
            @method('PUT')

            <div class="form-group form-check form-switch">
                <input type="checkbox" class="form-check-input" id="closed" name="closed"
                       @if($issue->closed ?? true) checked @endif>
                <label class="form-check-label" for="closed">Fermer de ticket</label>
            </div>


            @include('jirai::issue._form')

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
            </button>
            <a href="{{ route('jirai.issues.destroy', ['issue' => $issue->id]) }}" class="btn btn-danger"
               data-confirm="delete">
                <i class="bi bi-trash-fill"></i> {{ trans('messages.actions.delete') }}
            </a>
        </form>
    </div>
</div>
</div>
