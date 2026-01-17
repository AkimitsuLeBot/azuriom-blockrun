@if(!isset($accounts) || count($accounts) == 0)
    <p>{{ trans('positivity::messages.accounts.empty') }}</p>
@else

    <ul class="table--custom">
        <li class="table-header">
            <div class="col">{{ trans('messages.fields.name') }}</div>
            <div class="col">{{ trans('positivity::messages.accounts.lang') }}</div>
            <div class="col">{{ trans('positivity::messages.accounts.mined') }}</div>
            <div class="col">{{ trans('positivity::messages.accounts.most_clicks') }}</div>
            <div class="col">{{ trans('positivity::messages.accounts.violations') }}</div>
            <div class="col">{{ trans('positivity::messages.accounts.verifications') }}</div>
            <div class="col">{{ trans('positivity::messages.created_at') }}</div>
            @if(!isset($hideMore) || !$hideMore)
                <div class="col">{{ trans('positivity::messages.more') }}</div>
            @endif
        </li>
        <li class="w-100">
            <ul class="list-unstyled sortable w-100" >
                @foreach($accounts as $account)
                    <li class="table-row sortable-dropdown tag-parent"  data-account-id="{{ $account->id }}">
                        <div class="col" scope="row">{{ $account->playername }}</div>
                        <div class="col">{{ $account->language }}</div>
                        <div class="col">{{ $account->minerate_full_mined }}</div>
                        <div class="col">{{ $account->most_clicks_per_second }}</div>
                        <div class="col">{{ $account->countAllViolation() }}</div>
                        <div class="col">{{ $account->getVerifAmount() }}</div>
                        <div class="col">{{ $account->creation_time }}</div>
                        @if(!isset($hideMore) || !$hideMore)
                        <div class="col"> <a href="{{ route('positivity.accounts.show', $account->id) }}">{{ trans('positivity::messages.more') }}</a></div>
                        @endif
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>

    {{ $pagination->links() }}
@endif
