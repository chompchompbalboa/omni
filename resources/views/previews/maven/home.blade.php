@extends($viewPath.'.layout')

@section('content')
            <div class="section title-section">
                <div class="container">
                    <div class="w-row">
                        <div class="column w-col w-col-10">
                            <h1 class="page-title">A team with experience <em>&amp;</em> vision.</h1>
                            <h5 class="page-subtitle">Providing stellar legal counsel and representation<br>
to Australian Businesses for over 40 years.</h5>
                            <div class="separator"></div>
                        </div>
                        <div class="column w-col w-col-2"></div>
                    </div>
                </div>
            </div>
            <div class="section service-section">
                <div class="container">
                    <div class="w-row">
                        <div class="column w-col w-col-5">
                            <h6>representing clients in:</h6>
                            <ul class="link-list services-list">
                                <li class="link-list-item"><a class="text-link-large" data-ix="fade-content-out" href="/services">Procurement,</a></li>
                                <li class="link-list-item"><a class="text-link-large" data-ix="fade-content-out" href="/services">Civil Litigation,</a></li>
                                <li class="link-list-item"><a class="text-link-large" data-ix="fade-content-out" href="/services">Patent Law,</a></li>
                                <li class="link-list-item"><a class="text-link-large" data-ix="fade-content-out" href="/services">Public Relations,</a></li>
                                <li class="link-list-item"><a class="text-link-large" data-ix="fade-content-out" href="/services">Intellectual Property</a></li>
                            </ul>
                        </div>
                        <div class="column w-col w-col-7"></div>
                    </div>
                </div>
            </div>
            <div class="inner-section section">
                <div class="container">
                    <div class="column-fullwidth">
                        <div class="about-feature image-feature">
                            <div class="image-feature-panel">
                                <h4>Raising the bar</h4>
                                <p>We've been providing expert legal counsel
                                    <br>to Melbourne since 1978</p><a class="text-link-uppercase" data-ix="fade-content-out" href="/company-profile">Read our profile</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner-section section">
                <div class="container">
                    <div class="column-fullwidth">
                        <div class="testimonial-slider w-slider" data-animation="slide" data-duration="500" data-infinite="1">
                            <div class="w-slider-mask">
                                <div class="w-slide">
                                    <div class="testimonial-slide">
                                        <blockquote class="blockquote-large">“We’ve relied on them on several occasions where client discretion was of the utmost importance”</blockquote>
                                        <div class="blockquote-author">Joe Thompson — IP Client</div>
                                    </div>
                                </div>
                                <div class="w-slide">
                                    <div class="testimonial-slide">
                                        <blockquote class="blockquote-large">“We wouldn't feel comfortable trusting anyone else to represent our company in legal matters”</blockquote>
                                        <div class="blockquote-author">Helen McNaught — Patent Law Client</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-slider-arrow-left">
                                <div class="slider-arrow w-icon-slider-left"></div>
                            </div>
                            <div class="w-slider-arrow-right">
                                <div class="slider-arrow w-icon-slider-right"></div>
                            </div>
                            <div class="slider-paging w-round w-slider-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner-section section">
                <div class="container">
                    <div class="column-fullwidth">
                        <div class="image-feature team-feature">
                            <div class="image-feature-panel image-feature-panel-left">
                                <h4>Dedicated Expertise</h4>
                                <p>Our legal advisors bring over 100 years of combined experience to every case.</p><a class="text-link-uppercase" data-ix="fade-content-out" href="/team">Meet our team</a></div>
                        </div>
                    </div>
                </div>
            </div>
            @include($viewPath.'.call-to-action')
            <div class="background-white section">
                <div class="container">
                    <div class="column-fullwidth">
                        <h4 class="section-heading">Recent News Stories</h4>
                        <div class="w-dyn-list">
                            <div class="w-clearfix w-dyn-items w-row">
                                <div class="blog-post-snippet w-col w-col-4 w-dyn-item">
                                    <h6>April 26, 2017</h6><a class="blog-post-snippet-heading" data-ix="fade-content-out" href="/post/re-capping-q1-2017">Re-capping Q1 2017</a>
                                    <p class="blog-post-snippet-excerpt">A most productive start to the year saw many changes for us.</p><a class="text-link-uppercase" data-ix="fade-content-out" href="/post/re-capping-q1-2017">Read story</a></div>
                                <div class="blog-post-snippet w-col w-col-4 w-dyn-item">
                                    <h6>April 26, 2017</h6><a class="blog-post-snippet-heading" data-ix="fade-content-out" href="/post/the-nature-of-efficacy-in-a-modern-legal-practice">The Nature of Efficacy In A Modern Legal Practice</a>
                                    <p class="blog-post-snippet-excerpt">Working together to achieve actionable, just-in-time results</p><a class="text-link-uppercase" data-ix="fade-content-out" href="/post/the-nature-of-efficacy-in-a-modern-legal-practice">Read story</a></div>
                                <div class="blog-post-snippet w-col w-col-4 w-dyn-item">
                                    <h6>April 21, 2017</h6><a class="blog-post-snippet-heading" data-ix="fade-content-out" href="/post/transforming-lgeal-team-communication-in-2017">Transforming Legal Team Communication in 2017</a>
                                    <p class="blog-post-snippet-excerpt">Strategies for managing multiple stakeholders in an online environment</p><a class="text-link-uppercase" data-ix="fade-content-out" href="/post/transforming-lgeal-team-communication-in-2017">Read story</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection