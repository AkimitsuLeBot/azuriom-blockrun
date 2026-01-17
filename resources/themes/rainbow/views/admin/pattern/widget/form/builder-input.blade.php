@php
    $arrayInputs = $field['inputs'];
    $countInput = count($arrayInputs)
@endphp
<div class="js-detect-create-builder-input">
    <div class="row ">
        @foreach($field['labels'] as $label)
            <div class="col-md-{{intdiv(10,$countInput)}}">
                <label>{{$label}}</label>
            </div>
        @endforeach
    </div>
    <div class="inputs_wrapper">
        @forelse(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.'index') ?? [] as $keyInput => $inputs)
            @if(is_int($keyInput))
                <div class="row form-row mb-2">
                    @foreach($inputs ?? [] as $keyI => $valueI)
                        <div class="col-md-{{intdiv(10,$countInput)}}">
                            @foreach($arrayInputs as $f)
                                @if($f['value'] === $keyI)
                                    @include('admin.pattern.widget.form.input-text',['field' => $f, 'keyInput' => $keyInput])
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                    <div class="col-md-2">
                        <button class="btn btn-outline-danger link-remove" type="button">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                </div>
            @endif
        @empty
            <div class="row form-row mb-2">
                @foreach($arrayInputs as $field)
                    <div class="col-md-{{intdiv(10,$countInput)}}">
                        @include('admin.pattern.widget.form.input-text', ['field' => $field, 'keyInput' => false])
                    </div>
                @endforeach
                <div class="col-md-2">
                    <button class="btn btn-outline-danger link-remove" type="button">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
            </div>
        @endforelse
    </div>
    <div class="d-none js-detect-create-builder-copy">
        <div class="row form-row mb-2">
            @foreach($arrayInputs as $field)
                <div class="col-md-{{intdiv(10,$countInput)}}">
                    @include('admin.pattern.widget.form.input-text', ['field' => $field, 'keyInput' => false])
                </div>
            @endforeach
            <div class="col-md-2">
                <button class="btn btn-outline-danger link-remove" type="button">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="mb-2">
        <button type="button" class="js-detect-create-builder-input-add btn btn-sm btn-success">
            <i class="fas fa-plus"></i> {{ trans('messages.actions.add') }}
        </button>
    </div>
</div>
