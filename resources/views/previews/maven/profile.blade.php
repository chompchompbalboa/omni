@extends($viewPath.'.layout')

@section('content')
            <div class="section title-section">
                <div class="container">
                    <div class="w-row">
                        <div class="column w-col w-col-10">
                            <h1 class="page-title">Building Enduring Partnerships</h1>
                            <h5 class="page-subtitle">Providing stellar legal counsel and representation<br>
to Melbourne for over 70 years.</h5>
                            <div class="separator"></div>
                        </div>
                        <div class="column w-col w-col-2"></div>
                    </div>
                </div>
            </div>
            <div class="no-space-top section">
                <div class="container">
                    <div class="w-row">
                        <div class="column w-col w-col-10">
                            <blockquote class="block-quote blockquote-large">“Over the past 40 years, our company has become renowned for passionate and effective legal representation and valued leadership in the wider legal community”</blockquote>
                            <div class="blockquote-author">John Carpenter — Partner</div>
                        </div>
                        <div class="column w-col w-col-2"></div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="column-fullwidth">
                        <div class="image-slider w-slider" data-animation="slide" data-duration="500" data-infinite="1">
                            <div class="w-slider-mask">
                                <div class="w-slide"><img sizes="(max-width: 479px) 90vw, (max-width: 767px) 88vw, (max-width: 991px) 90vw, 95vw" src="http://uploads.webflow.com/58f556b54513f478483fb655/58faa1bbc114b30fc76a633f_Feature-2.jpg" srcset="http://uploads.webflow.com/58f556b54513f478483fb655/58faa1bbc114b30fc76a633f_Feature-2-p-500.jpeg 500w, http://uploads.webflow.com/58f556b54513f478483fb655/58faa1bbc114b30fc76a633f_Feature-2-p-1080.jpeg 1080w, http://uploads.webflow.com/58f556b54513f478483fb655/58faa1bbc114b30fc76a633f_Feature-2.jpg 1600w"></div>
                                <div class="w-slide"><img sizes="(max-width: 479px) 90vw, (max-width: 767px) 88vw, (max-width: 991px) 90vw, 95vw" src="http://uploads.webflow.com/58f556b54513f478483fb655/58f6a138aa1ab6491f478c73_Feature-3.jpg" srcset="http://uploads.webflow.com/58f556b54513f478483fb655/58f6a138aa1ab6491f478c73_Feature-3-p-500.jpeg 500w, http://uploads.webflow.com/58f556b54513f478483fb655/58f6a138aa1ab6491f478c73_Feature-3-p-1080.jpeg 1080w, http://uploads.webflow.com/58f556b54513f478483fb655/58f6a138aa1ab6491f478c73_Feature-3.jpg 1600w"></div>
                            </div>
                            <div class="w-slider-arrow-left">
                                <div class="slider-arrow slider-arrow-white w-icon-slider-left"></div>
                            </div>
                            <div class="w-slider-arrow-right">
                                <div class="slider-arrow slider-arrow-white w-icon-slider-right"></div>
                            </div>
                            <div class="slider-paging w-round w-slider-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="w-row">
                        <div class="column w-col w-col-6">
                            <h3 class="profile-heading">A Unique, Client-Centered Approach to Law</h3>
                            <div class="separator"></div>
                            <p>How does your web copy stack up against your competitors’? Entrepreneurs and marketing executives will sometimes decide to take on the copywriting themselves to save cost on the total project. Most people have at least basic writing skills, and it’s not like you need specialized technological skills or software to do it.
                                <br>
                                <br> It can be tempting, after a survey of products that are out there, to develop an exhaustive backlog of must-have features for your product and to set out designing a slicker version of the status quo.
                                <br>
                                <br>A paragraph (from the Greek paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.</p>
                        </div>
                        <div class="column w-col w-col-1"></div>
                        <div class="w-col w-col-5">
                            <div class="metrics">
                                <ul class="metrics-list">
                                    <li class="metrics-list-item w-clearfix">
                                        <div class="metric-title">1978</div>
                                        <div class="metric-description">The year our firm was founded by Jonathan Clarke</div>
                                    </li>
                                    <li class="metrics-list-item w-clearfix">
                                        <div class="metric-title">3,000+</div>
                                        <div class="metric-description">Clients we've assisted in proceedings</div>
                                    </li>
                                    <li class="metrics-list-item w-clearfix">
                                        <div class="metric-title">18</div>
                                        <div class="metric-description">Awards for Customer Service Excellence</div>
                                    </li>
                                    <li class="metrics-list-item w-clearfix">
                                        <div class="metric-title">4</div>
                                        <div class="metric-description">Passionate Legal Professionals</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include($viewPath.'.call-to-action')
@endsection