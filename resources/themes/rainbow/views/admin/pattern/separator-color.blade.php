@php
    isset($randJs) ? $randID = '{rand_id}' : $randID = random_int(1,999);
	$page_current = $page ?? '{page}';
	$row = $row ?? '{row}';
@endphp
<div class="row m-0 justify-content-between align-items-center builder-row w-100">
    <div class="col-auto px-0">
        <h4 class="fw-bold">Séparateur color</h4>
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
<div class="js-background-color"
     style="background-color: {{ old($page_current.'[row]['.$row.'][background-color]', theme_config($page_current.'.row.'.$row.'.background-color')) ?? 'transparent' }}"></div>
<div class="section-background-color">
    <input type="color"
           class="form-control form-control-color color-picker js-color-picker js-detect-row js-detect-page"
           id="colorInput" name="{page}[row][{row}][background-color]"
           value="{{ old($page_current.'[row]['.$row.'][background-color]', theme_config($page_current.'.row.'.$row.'.background-color')) }}">
</div>
