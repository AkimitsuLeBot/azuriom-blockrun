@auth
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5 text-center">
                    <a href="{{ route('forum.users.show', $user) }}">
                        <img src="{{ $user->getAvatar() }}" class="rounded img-fluid" alt="{{ $user->name }}">
                    </a>
                </div>

                <div class="col-md-7 ps-md-0">
                    <h5 class="mb-1">
                        <a href="{{ route('forum.users.show', $user) }}">{{ $user->name }}</a>
                    </h5>

                    <span class="badge" style="{{ $user->role->getBadgeStyle() }}; vertical-align: middle">
                                        {{ $user->role->name }}
                                    </span>
                </div>
            </div>
        </div>
    </div>
@endauth
