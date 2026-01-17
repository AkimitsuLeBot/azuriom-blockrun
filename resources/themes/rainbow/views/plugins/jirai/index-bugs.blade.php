@include('widget.banner.banner-widget')
<div
    class="card shadow-sm mb-4" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'bugs'])>
    <div class="card-body">
        @foreach($bugs as $bug)
            <div class="card m-2 p-2 text-decoration-none">
                <div>
                    @if ($bug->closed)
                        <button
                            class="btn btn-danger btn-sm fw--bold">{{ trans('jirai::messages.closed') }}</button>
                    @else
                        <button
                            class="btn btn-success btn-sm rounded-pill fw--bold">{{ trans('jirai::messages.open') }}</button>
                    @endif

                    @foreach($bug->jiraiTags as $tag)
                        <button
                            class="btn {{ $tag->color }} rounded-pill fw--bold btn-sm">{{ $tag->name }}</button>
                    @endforeach
                </div>
                <hr>
                <div class="row">
                    <h5 class="col-10">
                        <a href="{{ route('jirai.issues.show', ['issue' => $bug->id]) }}">
                            {{ $bug->title }}
                        </a>
                    </h5>
                    <a href="{{ route('jirai.issues.show', ['issue' => $bug->id]) }}">
                                            <span class="col-2">{{ $bug->messages->count() }} <i
                                                    class="bi bi-chat-fill"></i></span>
                    </a>
                </div>
                <small style="color: grey">
                    #{{ $bug->id }} @lang('messages.posts.posted', ['user' => e($bug->user->name), 'date' => format_date($bug->created_at, true)])
                </small>
            </div>
        @endforeach
        {{ $bugs->withQueryString()->links() }}
    </div>
</div>
