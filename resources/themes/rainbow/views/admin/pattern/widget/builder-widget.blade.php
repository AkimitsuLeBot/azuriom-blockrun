@php
    $randModalID = random_int(1,999);
    $nameWidget = '';
    if(isset($banner) && $banner){
        $nameWidget = $banner['key'];
    }elseif (isset($items['key']) && $items['key']){
		$nameWidget = $items['key'];
    } else{
		$nameWidget = $items[0]['key'];
	}

	$page_current = $page ?? '{page}';
	$row = $row ?? '{row}';
    if (isset($items['key'])){
    $image = $items['key'];
    }elseif (isset($items[0]['key'])){
    $image = $items[0]['key'];
    }elseif (isset($banner['key'])){
    $image = $banner['key'];
    }else{
    $image ='placeholder';
    }
@endphp
<div
    class="{{isset($widget['col-lg']) && $widget['col-lg'] ? $widget['col-lg']['default']  : $col ?? 'col-lg-6'}} js-detect-col h-auto mb-4 sortable-item builder-widget js-detect-widget"
    data-builder-name="widget_{{$nameWidget}}"
    data-builder-id="{{$id_widget_name}}"
    data-modal-id="{{$randModalID}}"
    data-builder-collg="{{$widget['col-lg']['default']}}">
    <div class="border border-secondary rounded h-100">
        <div class="row m-0 justify-content-between align-items-center builder-element">
            <div class="col-auto px-0 position-relative">
                <button type="button" class="btn btn-outline-info m-1" data-bs-toggle="collapse"
                        href="#collapse-{{$id_widget}}"
                        role="button"
                        aria-expanded="false"
                        aria-controls="collapse-{{$id_widget}}">
                    <i class="bi bi-gear-fill"></i> Block
                </button>
                <div class="accordion-collapse collapse collapse--setting-section" id="collapse-{{$id_widget}}">
                    <div class="rounded bg-gray-900 border p-2">
                        <div class="w-100">
                            <label class="visually-hidden" for="inlineFormInputGroup">Col</label>
                            <div class="input-group mb-2">
                                    <div class="input-group-text">{{trans('theme::lang.panel.label.size')}}</div>
                                <select
                                    class="form-control js-select-col js-detect-row js-detect-page js-detect-widget-id"
                                    data-col="lg"
                                    name="{page}[row][{row}][widget][{{$id_widget_name ?? '{widget_id}'}}][{{$nameWidget}}][col-lg]">
                                    @for($i=$widget['col-lg']['min']; $i <= $widget['col-lg']['max'] ; $i++)
                                        <option
                                            value="col-lg-{{$i}}" {{$widget['col-lg']['default'] === 'col-lg-'.$i ?'selected' :''}}>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto px-0  text-center">
                <button type="button" class="btn btn-outline-warning sortable-handle m-1">
                    <i class="bi bi-arrows-move"></i>
                </button>
            </div>
            <div class="col-auto px-0">
                <button type="button" class="btn btn-outline-danger m-1 js-widget-close">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
        </div>

        <button type="button" class="btn w-100 position-relative" data-bs-toggle="modal"
                data-bs-target="#block_{{$randModalID}}">
            <img class="w-100 img-fluid" src="{{theme_asset('image/admin/'.$image.'.jpg')}}"
                 alt="{{$randModalID}}">
            <a type="button" role="button" class="btn btn-success icon-button"><i class="bi bi-gear-fill pe-2"></i> Config</a>

            <h3 class="overlay-title">{{trans('theme::widget.'.$nameWidget.'.title')}}</h3>
        </button>


        <div class="modal fade" id="block_{{$randModalID}}" tabindex="-1" role="dialog"
             aria-labelledby="block_{{$randModalID}}Label"
             aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered  modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="block_{{$id_widget_name}}Label">{{trans('theme::lang.modal.block')}}</h4>
                        <button type="button" class="close btn btn-outline-danger mx-2" data-bs-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if(isset($messageFLash))
                            <div class="alert alert-info">
                                {!! nl2br($messageFLash) !!}
                            </div>
                        @endif
                        @if(isset($banner) && $banner)
                            @include('admin.pattern.widget.widget-banner',$banner)
                        @endif
                        @if(isset($items) && $items)
                            @if(array_key_exists(0,$items))
                                @foreach($items as $item)
                                    @include('admin.pattern.widget.widget',$item)
                                @endforeach
                            @else
                                @include('admin.pattern.widget.widget',$items)
                            @endif
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">Valider</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
