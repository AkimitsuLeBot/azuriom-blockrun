@php
    isset($randJs) ? $randID = '{rand_id}' : $randID = random_int(1,999);
	$page_current = $page ?? '{page}';
	$row = $row ?? '{row}';
@endphp
<div class="row m-0 justify-content-between align-items-center builder-row w-100">
    <div class="col-auto px-0 position-relative">
        <button type="button" class="btn btn-outline-info m-1" data-bs-toggle="collapse"
                href="#collapse{{$randID}}"
                role="button"
                aria-expanded="false"
                aria-controls="collapse{{$randID}}">
            <i class="bi bi-gear-fill"></i> Section
        </button>

        <div class="accordion-collapse collapse collapse--setting-section" id="collapse{{$randID}}">
            <div class="rounded bg-gray-900 border p-2">
                <div class="w-100">
                    <label class="visually-hidden" for="inlineFormInputGroup">Col</label>
                    <div class="input-group mb-2">
                        <div class="input-group-text">{{trans('theme::lang.panel.label.size')}}</div>
                        <select class="form-control js-select-col js-detect-row" data-col="lg"
                                name="{page}[row][{row}][col-lg]">
                            @if(isset($value))
                                @for($i=2; $i <= 12 ; $i++)
                                    <option
                                        value="col-lg-{{$i}}" {{$value['col-lg'] === 'col-lg-'.$i ?'selected' :''}}>{{$i}}</option>
                                @endfor
                            @endif
                        </select>
                    </div>
                </div>
                <div class="w-100">
                    <label class="visually-hidden" for="inlineFormInputGroup">Alignement</label>
                    <div class="input-group mb-2">
                        <div class="input-group-text">Alignement</div>
                        <select class="form-control js-select-justifyContent js-detect-row"
                                name="{page}[row][{row}][justify-content]">
                            @foreach($justifyContent as $key => $va)
                                <option
                                    value="{{$key}}" {{isset($value['justify-content']) && $value['justify-content'] === $key ?'selected' :''}}>{{$va}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-auto px-0  text-center">
        <button type="button" class="btn btn-outline-warning sortable-row-handle m-1">
            <i class="bi bi-arrows-move"></i>
        </button>
    </div>
    <div class="col-auto px-0">
        <button type="button" class="btn btn-outline-danger js-row-close m-1">
            <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
        </button>
    </div>
</div>
