<div class="table-responsive">
    <ul class="table--custom mt-5">
        <li class="table-header">
            <div class="col px-3 col-4">Account Name</div>
            <div class="col px-3 col-3">Role</div>
            <div class="col px-3 col-3"># of characters</div>
            <div class="col px-3 col-2">{{ trans('messages.fields.action') }}</div>
        </li>
        @foreach ($user->accounts as $item)
            <li class="table-row">
                <div class="col px-3 col-4">{{$item->account}}</div>
                <div class="col px-3 col-3">{{$item->member}}</div>
                <div class="col px-3 col-3">{{$item->characters()->count()}}</div>
                <div class="col px-3 col-2">
                    <a href="{{route('flyff.accounts.edit', $item)}}" class="mx-1"
                       title="{{ trans('messages.actions.edit') }}" data-bs-toggle="tooltip"><i
                            class="bi bi-pencil-square"></i></a>
                </div>
            </li>
        @endforeach
    </ul>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card shadow-sm mb-4">
            <div class="card-header">Create a game account</div>
            <div class="card-body">
                <form action="{{route('flyff.accounts.store')}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label" for="exampleInputEmail1">Account Name</label>
                        <input type="text" name="account"
                               class="form-control @error('account') is-invalid @enderror"
                               id="exampleInputEmail1">
                        @error('account')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="exampleInputPassword1">{{trans('auth.password')}}</label>
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword1">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="password-confirm">{{ trans('auth.confirm_password') }}</label>
                        <input id="password-confirm" type="password"
                               class="form-control @error('password_confirmation') is-invalid @enderror"
                               name="password_confirmation" required autocomplete="new-password">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm mb-4">
            <div class="card-header">Link an old account</div>
            <div class="card-body">
                <form action="{{route('flyff.accounts.link')}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label" for="exampleInputEmail1">Account Name</label>
                        <input type="text" name="account"
                               class="form-control @error('account') is-invalid @enderror"
                               id="exampleInputEmail1">
                        @error('account')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="exampleInputPassword1">{{trans('auth.password')}}</label>
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword1">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
