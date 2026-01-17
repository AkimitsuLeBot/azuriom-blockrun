@if(isset($getBanner))
@include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'faq', 'value' => 'faq'])
@endif

@if($questions->isEmpty())
    <div class="alert alert-info" role="alert">
        {{ trans('faq::messages.empty') }}
    </div>
@else
    <div class="accordion" id="faq" @include('elements.string-aos', ['pageAos' => 'faq', 'itemAos'=>'faq'])>
        @foreach($questions as $id => $question)
            <div class="card" id="{{ Str::slug($question->name) }}">
                <div class="card-header px-3" id="question-{{ $question->id }}">
                    <button class="accordion-button bg-transparent shadow-none @if(!($show = ($id === 0))) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#answer{{ $question->id }}" aria-expanded="false" aria-controls="answer{{ $question->id }}">
                        {{ $question->name }}
                    </button>
                </div>

                <div id="answer{{ $question->id }}" class="accordion-collapse collapse @if($show) show @endif" aria-labelledby="{{ Str::slug($question->name) }}" data-bs-parent="#faq">
                    <div class="card-body user-html-content">
                        {!! $question->answer !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
