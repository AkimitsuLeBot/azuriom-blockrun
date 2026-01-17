@php
    $choice = theme_config($getItem.'.name');
    $category = Azuriom\Plugin\Changelog\Models\Category::scopes('enabled')->pluck('name')->toArray();

    if($choice != null){
        $key = array_search($choice, $category);
        $updates = Azuriom\Plugin\Changelog\Models\Update::where('category_id', $key+1)->orderByDesc('id')->limit(theme_config($getItem.'.quantity') ? theme_config($getItem.'.quantity'):3)->get();
    }
    else {
      $updates = Azuriom\Plugin\Changelog\Models\Update::orderByDesc('id')->limit(theme_config($getItem.'.quantity') ? theme_config($getItem.'.quantity'):3)->get();
  }
@endphp
@include('widget.banner.banner-widget')
<article class="widget--changelog mb-5" @include('elements.string-aos')>

        @forelse($updates as $update)
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title mb-1" style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical; overflow: hidden;">{{ $update->name }}</h2>

                    <p>
                            <span class="badge me-1 small" style="background-color: var(--color-primary);">
                                <i class="bi bi-folder"></i> {{ $update->category->name }}
                            </span>
                        <span class="badge me-1 small" style="background-color: var(--color-primary);">
                                <i class="bi bi-calendar"></i> {{ format_date($update->created_at) }}
                            </span>
                    </p>
                    <div style="display: -webkit-box;-webkit-line-clamp: {{theme_config($getItem.'.clamp') ? theme_config($getItem.'.clamp'):4}};-webkit-box-orient: vertical; overflow: hidden;">
                        {!! $update->description !!}
                    </div>
                    <div class="text-end mt-3">
                        <a class="btn btn-primary"
                           href="{{ route('changelog.categories.show', $update->category->id) }}">{{ trans('theme::lang.show_more') }}</a>
                    </div>
                </div>
            </div>

        @empty
        <div class="card mb-3">
            <div class="card-body">
                <p>{{ trans('changelog::messages.categories.empty') }}</p>
            </div>
        </div>
        @endforelse

</article>
