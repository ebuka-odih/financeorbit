@extends('pages.layout.app')
@section('content')

<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="uk-width-3-5@m">
                        <h1 class="uk-margin-small-bottom">Putting our clients first since<span class="in-highlight">2009</span></h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove-top text-capitalize">For more than 11 years, we’ve been empowering clients by helping them take control of their financial lives.</p>
                    </div>
                </div>
                <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid="">
                    <div class="uk-flex uk-flex-left uk-first-column">
                        <div class="uk-margin-right">
                            <i class="fas fa-leaf fa-lg in-icon-wrap primary-color"></i>
                        </div>
                        <div>
                            <h3>Philosophy</h3>
                            <p class="text-capitalize">{{ env('APP_NAME') }} ideology is fighting financial problems by creating a market where the experienced and inexperienced can benefit from online investment .</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <i class="fas fa-hourglass-end fa-lg in-icon-wrap primary-color"></i>
                        </div>
                        <div>
                            <h3>History</h3>
                            <p class="text-capitalize">established since 11 years ago we have moved from one stage to another and hope to keep growing.</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <i class="fas fa-flag fa-lg in-icon-wrap primary-color"></i>
                        </div>
                        <div>
                            <h3>Vision &amp; Mission</h3>
                            <p class="text-capitalize">Wealth creation for all nations. strategic planning for profitable trading</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m">
                    <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid="">
                        <div class="uk-width-1-2@m uk-first-column">
                            <h4 class="uk-text-muted text-capitalize">Numbers Speak</h4>
                            <h1 class="uk-margin-medium-bottom text-capitalize">We always ready<br>for a <span class="in-highlight">challenge.</span></h1>
                            <a href="register.html" class="uk-button uk-button-primary uk-border-rounded">Create Account<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="uk-margin-large uk-grid" data-uk-grid="">
                                <div class="uk-width-1-3@m uk-first-column">
                                    <h1 class="uk-text-primary uk-text-right@m">
                                        <span class="count" data-counter-end="150">0 </span>+
                                    </h1>
                                    <hr class="uk-divider-small uk-text-right@m">
                                </div>
                                <div class="uk-width-expand@m">
                                    <h4 class="text-capitalize">Trading instruments</h4>
                                    <p class="text-capitalize">Various currency pairs and market commodities coupled with modern trading instruments. your money is secured</p>
                                </div>
                            </div>
                            <div class="uk-margin-large uk-grid" data-uk-grid="">
                                <div class="uk-width-1-3@m uk-first-column">
                                    <h1 class="uk-text-primary uk-text-right@m">
                                        <span class="count" data-counter-end="136">0</span>+
                                    </h1>
                                    <hr class="uk-divider-small uk-text-right@m">
                                </div>
                                <div class="uk-width-expand@m">
                                    <h4>Countries Covered</h4>
                                    <p class="text-capitalize">Our Offices is located in over 36 countries but our services is offered worldwide.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>

@endsection
