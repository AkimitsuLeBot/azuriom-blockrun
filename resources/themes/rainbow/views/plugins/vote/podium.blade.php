@if(count($votes) >= 1)
    @if(!theme_config('vote.items.podium.hidden') && game()->name() == "Minecraft")
        <div class="podium" @include('elements.string-aos')>
            @foreach($votes as $id => $vote)
                @if($id == 2)
                    <div class="player second-player">
                        <h1 class="pseudo">{{ $vote->user->name }}
                            <br><span
                                style="color: {{isset($getItem) && theme_config($getItem.'.color_top_2')  ?  theme_config($getItem.'.color_top_2'): ''}}">{{ $vote->votes }}</span>
                            votes</h1>

                        @if(!plugins()->isEnabled('flyff'))
                            <img
                                src="https://minotar.net/armor/body/{{ $vote->user->name }}/200.png"
                                alt="{{ $vote->user->name }} Skin">
                        @endif
                        <p class="step"><i class="bi bi-trophy-fill" style="color: {{isset($getItem) && theme_config($getItem.'.color_top_2')  ?  theme_config($getItem.'.color_top_2'): ''}}"></i> #2</p>
                    </div>
                @endif
            @endforeach
            @foreach($votes as $id => $vote)
                @if($id == 1)
                    <div class="player first-player">
                        <h1 class="pseudo">{{ $vote->user->name }}
                            <br><span style="color: {{isset($getItem) && theme_config($getItem.'.color_top_1')  ?  theme_config($getItem.'.color_top_1'): ''}}">{{ $vote->votes }}</span>
                            votes</h1>
                        @if(!plugins()->isEnabled('flyff'))
                            <img
                                src="https://minotar.net/armor/body/{{ $vote->user->name }}/200.png"
                                alt="{{ $vote->user->name }} Skin">
                        @endif
                        <p class="step"><i class="bi bi-trophy-fill" style="color: {{isset($getItem) && theme_config($getItem.'.color_top_1')  ?  theme_config($getItem.'.color_top_1'): ''}}"></i> #1</p>
                    </div>
                @endif
            @endforeach
            @foreach($votes as $id => $vote)
                @if($id == 3)
                    <div class="player third-player">
                        <h1 class="pseudo">{{ $vote->user->name }}
                            <br><span style="color: {{isset($getItem) && theme_config($getItem.'.color_top_3')  ?  theme_config($getItem.'.color_top_3'): ''}}">{{ $vote->votes }}</span>
                            votes</h1>
                        @if(!plugins()->isEnabled('flyff'))
                            <img
                                src="https://minotar.net/armor/body/{{ $vote->user->name }}/200.png"
                                alt="{{ $vote->user->name }} Skin">
                        @endif
                        <p class="step"><i class="bi bi-trophy-fill" style="color: {{isset($getItem) && theme_config($getItem.'.color_top_3')  ?  theme_config($getItem.'.color_top_3'): ''}}"></i> #3</p>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
@endif
