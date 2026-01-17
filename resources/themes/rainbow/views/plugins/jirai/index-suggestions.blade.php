@include('widget.banner.banner-widget')
<div
    class="card shadow-sm mb-4" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'suggestions'])>
    <div class="card-body">
        @foreach($suggestions as $suggestion)
            <div class="card m-2 p-2 text-decoration-none">
                <div>
                    @if ($suggestion->closed)
                        <button
                            class="btn btn-danger btn-sm fw--bold">{{ trans('jirai::messages.closed') }}</button>
                    @else
                        <button
                            class="btn btn-success btn-sm rounded-pill fw--bold">{{ trans('jirai::messages.open') }}</button>
                    @endif

                    @foreach($suggestion->jiraiTags as $tag)
                        <button
                            class="btn {{ $tag->color }} rounded-pill fw--bold btn-sm">{{ $tag->name }}</button>
                    @endforeach
                </div>
                <hr>
                <div class="row">
                    <h5 class="col-10">
                        <a href="{{ route('jirai.issues.show', ['issue' => $suggestion->id]) }}">
                            {{ $suggestion->title }}
                        </a>
                    </h5>
                    <a href="{{ route('jirai.issues.show', ['issue' => $suggestion->id]) }}">
                                        <span class="col-2">{{ $suggestion->messages->count() }} <i
                                                class="bi bi-chat-fill"></i></span>
                    </a>
                </div>
                <small style="color: grey">
                    #{{ $suggestion->id }} @lang('messages.posts.posted', ['user' => e($suggestion->user->name), 'date' => format_date($suggestion->created_at, true)])
                </small>
            </div>
        @endforeach
        {{ $suggestions->withQueryString()->links() }}
    </div>
</div>
