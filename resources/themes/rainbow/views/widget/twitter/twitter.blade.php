@include('widget.banner.banner-widget')
<div class="mb-3" @include('elements.string-aos')>
    <div class="twitter-feed">
        <a class="twitter-timeline" id="widget_twitter" data-dnt="true"
           href="{{theme_config($getItem.'.urlTwitter')}}"></a>
    </div>
</div>
@push('footer-scripts')
    <script defer data-cfasync="false" omit_script=true>
        window.addEventListener("DOMContentLoaded", (event) => {
            let maxTwitter = parseInt('{{theme_config($getItem.'.maxTwitter') ?? 999}}');
            window.twttr = (function (d, s, id) {
                var t, js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "https://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);
                return window.twttr || (t = {
                    _e: [], ready: function (f) {
                        t._e.push(f)
                    }
                });
            }(document, "script", "twitter-wjs"));
            twttr.ready(
                function (twttr) {
                    // bind events here
                    twttr.events.bind(
                        'loaded',
                        function (event) {
                            event.widgets.forEach(function (widget) {
                                let iframe = widget.contentDocument
                                let color = document.querySelector('#style-color');
                                if (color) {
                                    let colorCopy = color.cloneNode(true);
                                    iframe.querySelector('html head').parentNode.appendChild(colorCopy);
                                }
                                iframe.querySelector('.timeline-Widget').style.background = 'var(--color-contrast-lower)';
                                iframe.querySelector('.timeline-Widget').style.borderRadius = '10px';
                                iframe.querySelector('.timeline-Widget').style.boxShadow = '0 0px 6px rgba(0, 0, 0, 0.2)';

                                // iframe.find('.timeline-TweetList-tweet').style.display =  'none';
                                iframe.querySelector('.timeline-LoadMore').style.display = 'none';
                                iframe.querySelector('.timeline-Footer .u-floatLeft').style.display = 'none';

                                let countTwitter = 1;
                                iframe.querySelectorAll('.timeline-TweetList-tweet').forEach(function (event) {
                                        event.style.color = 'var(--color-contrast-higher)';
                                        let countTweet = iframe.querySelectorAll('.timeline-TweetList-tweet').length
                                        if (countTweet === 1 || countTwitter <= maxTwitter) {
                                            event.style.display = 'block'
                                        } else {
                                            event.style.display = 'none'
                                        }
                                        countTwitter++
                                    }
                                )


                                iframe.querySelectorAll('.timeline-Tweet').forEach(function (e) {
                                    e.addEventListener('mouseenter', function (event) {
                                        event.target.style.background = 'var(--color-contrast-low)';
                                    })
                                    e.addEventListener('mouseleave', function (event) {
                                        event.target.style.background = 'var(--color-contrast-lower)';
                                    })
                                })
                                iframe.querySelector('.timeline-Header-title').style.color = 'var(--color-contrast-higher)';
                                iframe.querySelector('.timeline-Header-byline').style.color = 'var(--color-contrast-higher)';
                            });
                        }
                    );
                }
            );
            // Twitter Overrides -----------------------------------------------------------------------------
        })
    </script>
@endpush
