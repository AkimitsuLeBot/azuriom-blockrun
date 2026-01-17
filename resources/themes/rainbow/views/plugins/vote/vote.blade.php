<div id="vote-alert"></div>
@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@endif

@if(plugins()->isEnabled('flyff'))
    @guest
        <div class="col-12" @include('elements.string-aos', ['pageAos' => 'vote', 'itemAos'=>'vote'])>
            <a href="/user/login">
                <div class="alert alert-warning">You need to login before you vote (click here)</div>
            </a>
        </div>
    @else
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                let form = document.querySelector('#vote-choose-characater')
                form.addEventListener('submit', function (ev) {
                    ev.preventDefault();

                    const loaderIcon = form.querySelector('.load-spinner');

                    if (loaderIcon) {
                        loaderIcon.classList.remove('d-none');
                    }

                    clearVoteAlert();

                    axios.post("{{ route('flyff.cart.update_character') }}", {
                        'character': document.querySelector('#inlineFormCustomSelectPref').value
                    })
                        .then(function () {
                            toggleStep(2);
                        })
                        .catch(function (error) {
                            displayVoteAlert(error.response.data.message, 'danger');
                        })
                        .finally(function () {
                            if (loaderIcon) {
                                loaderIcon.classList.add('d-none');
                            }
                        });
                });
            })
        </script>

        <div class="col-12" @include('elements.string-aos', ['pageAos' => 'vote', 'itemAos'=>'vote'])>
            <div class="card">
                <div class="card-body">
                    <div class="vote vote-now position-relative text-center" id="vote-card">
                        <div class="h-100" data-vote-step="1">
                            @php
                                $characters = flyff_user(auth()->user())->characters;
                            @endphp

                            @if($characters->count() > 0)
                                <form id="vote-choose-characater" method="POST" class="row align-items-end text-start">
                                    @csrf
                                    <div class="col-9">
                                        <label class="form-label" for="inlineFormCustomSelectPref">Choose
                                            character
                                            : </label>
                                        <select name="character" class="form-control"
                                                id="inlineFormCustomSelectPref">
                                            @foreach ($characters as $character)
                                                <option
                                                    @if((int)$character->m_idPlayer === session('m_idPlayer') ) selected
                                                    @endif value="{{$character->m_idPlayer}}_{{$character->serverindex}}">{{$character->m_szName}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <button type="submit" class="btn btn-warning btn-sm">
                                            {{ trans('messages.actions.update') }}
                                            <span class="d-none spinner-border spinner-border-sm load-spinner"
                                                  role="status"></span>
                                        </button>
                                    </div>
                                </form>
                            @else
                                <div class="alert alert-warning">You need to create a in-game character before
                                    you
                                    vote
                                </div>
                            @endif
                        </div>

                        <div class="h-100 d-none" data-vote-step="2">
                            <div id="vote-spinner" class="d-none h-100">
                                <div class="spinner-border" role="status"></div>
                            </div>

                            @forelse($sites as $site)
                                <a class="btn btn-primary mw-100 m-2" href="{{ $site->url }}" target="_blank"
                                   rel="noopener noreferrer"
                                   data-vote-id="{{ $site->id }}"
                                   data-vote-url="{{ route('vote.vote', $site) }}"
                                   @auth data-vote-time="{{ $site->getNextVoteTime($user, $request)?->valueOf() }}" @endauth>
                                    <span class="badge bg-secondary vote-timer"></span>
                                    @if(!theme_config('vote.items.vote.hidden'))
                                        <img
                                            src="https://www.google.com/s2/favicons?sz=16&domain_url={{ $site->url }}"
                                            alt="{{ $site->name }}" class="me-1">
                                    @endif
                                    {{ $site->name }}
                                </a>
                            @empty
                                <div class="alert alert-warning" role="alert">
                                    {{ trans('vote::messages.errors.site') }}
                                </div>
                            @endforelse
                        </div>
                        <div class="d-none" data-vote-step="3">
                            <p id="vote-result"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endguest
@else
    <div class="col-12" @include('elements.string-aos', ['pageAos' => 'vote', 'itemAos'=>'vote'])>
        <div class="card">
            <div class="card-body">
                <div class="card-body text-center position-relative" id="vote-card">
                    <div class="spinner-parent h-100">
                        <div class="spinner-border" role="status"></div>
                    </div>

                    <div class="@auth d-none @endauth" data-vote-step="1">
                        <form class="row justify-content-center"
                              action="{{ route('vote.verify-user', '') }}" id="voteNameForm">
                            <div class="col-md-6 col-lg-4">
                                <div class="mb-3">
                                    <input type="text" id="stepNameInput" name="name" class="form-control"
                                           @if(isset($getItem) && theme_config($getItem.'.plugin') ==='magrigry')
                                               value="{{ $request->input('user') }}"
                                           @else
                                               value="{{ $name }}"
                                           @endif
                                           placeholder="{{ trans('messages.fields.name') }}" required>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    {{ trans('messages.actions.continue') }}
                                    <span class="d-none spinner-border spinner-border-sm load-spinner"
                                          role="status"></span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="@guest d-none @endguest h-100" data-vote-step="2">
                        @if(isset($getItem) && theme_config($getItem.'.plugin') ==='magrigry')
                            @if (count($serversChoice) > 1)
                                <div class="w-75 mb-4 mx-auto text-start">
                                    <label for="stepServerIdInput" class="form-label"><strong>Sélectionnez votre serveur pour
                                            obtenir la récompense</strong></label>
                                    <select id="stepServerIdInput" class="form-control">
                                        <option>Sélectionnez un serveur</option>
                                        @foreach($serversChoice as $id => $name)
                                            <option value="{{ $id }}">{{ $name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                                <input type="hidden" id="stepServerIdInput"
                                       value="{{ array_key_first($serversChoice) }}">
                            @endif
                        @endif
                        @forelse($sites as $site)
                            <a class="btn btn-primary m-2" style="max-width: none;" href="{{ $site->url }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               data-vote-id="{{ $site->id }}"
                               data-vote-url="{{ route('vote.vote', $site) }}"
                               @if(isset($getItem) && theme_config($getItem.'.plugin') ==='magrigry')
                                   data-server-id='{{ $site->getPublicServerIds() }}'
                               @endif
                               @auth data-vote-time="{{ $site->getNextVoteTime($user, $request)?->valueOf() }}" @endauth>
                                <span class="badge bg-secondary vote-timer"></span>
                                @if(!theme_config('vote.items.vote.hidden'))
                                    <img
                                        src="https://www.google.com/s2/favicons?sz=16&domain_url={{ $site->url }}"
                                        alt="{{ $site->name }}" class="me-1">
                                @endif
                                {{ $site->name }}
                            </a>
                        @empty
                            <div class="alert alert-warning" role="alert">
                                {{ trans('vote::messages.errors.site') }}
                            </div>
                        @endforelse
                    </div>

                    <div class="d-none" data-vote-step="3">
                        <p id="vote-result"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
