@extends($viewPath.'.layout')

@section('content')
            <div class="section title-section">
                <div class="container">
                    <div class="w-row">
                        <div class="column w-col w-col-10">
                            <h1 class="page-title">A team with experience <em>&amp;</em> vision.</h1>
                            <h5 class="page-subtitle">Our diverse team is unified by their professional approach<br>and dedication to delivering excellence</h5>
                            <div class="separator"></div>
                        </div>
                        <div class="column w-col w-col-2"></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="w-dyn-list">
                        <div class="w-clearfix w-dyn-items w-row">
                            <div class="team-member w-col w-col-6 w-dyn-item">
                                <div class="team-member-inner"><img sizes="100vw" src="https://daks2k3a4ib2z.cloudfront.net/58f6a49cb45a921b9e5e8b57/590016bd042c175f2eb8363d_Team-John.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/58f6a49cb45a921b9e5e8b57/590016bd042c175f2eb8363d_Team-John-p-500.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/58f6a49cb45a921b9e5e8b57/590016bd042c175f2eb8363d_Team-John.jpg 570w">
                                    <div class="team-member-title">
                                        <h4 class="team-member-name">John Carpenter</h4>
                                        <div class="team-member-position">Partner, Intellectual Property Expert </div><a class="text-link-uppercase" data-ix="fade-content-out" href="/team/john-carpenter">read more</a></div>
                                </div>
                            </div>
                            <div class="team-member w-col w-col-6 w-dyn-item">
                                <div class="team-member-inner"><img sizes="100vw" src="https://daks2k3a4ib2z.cloudfront.net/58f6a49cb45a921b9e5e8b57/590016b0eeeee8691ce9ba7d_Team-Lucy.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/58f6a49cb45a921b9e5e8b57/590016b0eeeee8691ce9ba7d_Team-Lucy-p-500.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/58f6a49cb45a921b9e5e8b57/590016b0eeeee8691ce9ba7d_Team-Lucy.jpg 570w">
                                    <div class="team-member-title">
                                        <h4 class="team-member-name">Lucy Pemberton</h4>
                                        <div class="team-member-position">Partner, Public Relations Expert </div><a class="text-link-uppercase" data-ix="fade-content-out" href="/team/lucy-pemberton">read more</a></div>
                                </div>
                            </div>
                            <div class="team-member w-col w-col-6 w-dyn-item">
                                <div class="team-member-inner"><img sizes="100vw" src="https://daks2k3a4ib2z.cloudfront.net/58f6a49cb45a921b9e5e8b57/590016a466747c37cab41681_Team-Ursula.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/58f6a49cb45a921b9e5e8b57/590016a466747c37cab41681_Team-Ursula-p-500.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/58f6a49cb45a921b9e5e8b57/590016a466747c37cab41681_Team-Ursula.jpg 570w">
                                    <div class="team-member-title">
                                        <h4 class="team-member-name">Ursula Rucker</h4>
                                        <div class="team-member-position">Senior Advisor, Litigation Expert </div><a class="text-link-uppercase" data-ix="fade-content-out" href="/team/ursula-rucker">read more</a></div>
                                </div>
                            </div>
                            <div class="team-member w-col w-col-6 w-dyn-item">
                                <div class="team-member-inner"><img sizes="100vw" src="https://daks2k3a4ib2z.cloudfront.net/58f6a49cb45a921b9e5e8b57/5900168124b4577e0f17def9_Team-Ashley.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/58f6a49cb45a921b9e5e8b57/5900168124b4577e0f17def9_Team-Ashley-p-500.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/58f6a49cb45a921b9e5e8b57/5900168124b4577e0f17def9_Team-Ashley.jpg 570w">
                                    <div class="team-member-title">
                                        <h4 class="team-member-name">Ashley Bramiche</h4>
                                        <div class="team-member-position">Senior Advisor, Patent Law Expert</div><a class="text-link-uppercase" data-ix="fade-content-out" href="/team/ashley-bramiche">read more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include($viewPath.'.call-to-action')
@endsection