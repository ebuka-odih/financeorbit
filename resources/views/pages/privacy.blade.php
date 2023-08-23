@extends('pages.layout.app')
@section('content')

<main>
    <!-- section content begin -->

    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-5@m">
                    <div class="uk-card uk-card-large uk-card-default in-card-paper">
                        <div class="uk-card-body">
                            <h2>Privacy Policy</h2>

                            <p>The privacy of our website visitors and clients, both existing and former, is very important to us. {{ env('APP_NAME') }} is committed to safeguarding any information we collect, use and hold about you.</p>

                            <p>
                                When you register for either a demo or a live account with {{ env('APP_NAME') }}, it is necessary that we collect some personal data from you for business purposes. By understanding your financial needs, we can treat you fairly as a client; we can provide you with the most suitable products and services, give you the appropriate information on investment strategies, process your requests and transactions and offer you both sales and post-sales services.</p>

                            <p>We request the following Personal Data from you:
                                <br>
                                Personal and financial information needed during the online registration applications/forms;
                                Documents needed as proof of your identity and residency such as an International Passport, National ID, utility bills or bank statements;
                                Please note that if and when you choose to end your working relationship with {{ env('APP_NAME') }}, we must keep your Personal Data on record for a further seven years.</p>

                            <hr class="uk-margin-medium-top uk-margin-small-bottom">
                            <ul class="in-faq-5 uk-accordion" data-uk-accordion="collapsible: true">
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#">Personal Data:</a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list uk-list-bullet">
                                            To verify your identity
                                            To ensure that you meet the suitability requirements needed to use our products and services
                                            <li>To verify your identity.</li>
                                            <li>To ensure that you meet the suitability requirements needed to use our products and services.</li>To manage the account, you have with us and To process your transactions
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                            <ul class="in-faq-6 uk-accordion" data-uk-accordion="collapsible: true">
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#">Cookies</a>
                                    <div class="uk-accordion-content text-capitalize">
                                        Cookies are small bits of data stored on a web browser when you visit a website for the first time. If you visit that website again in the future, the storage of cookies on your browser enables the website to remember how you browsed through it the first time. For example, it can remember your username and password. Cookies are used on this website in order to offer our users a more customized browsing experience.
                                        <p>
                                            If you do not agree to our Cookie Policy you can disable Cookies and still access our website normally.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="in-faq-7 uk-accordion" data-uk-accordion="collapsible: true">
                                <li>
                                    <a class="uk-accordion-title" href="#">Security &amp; Protection</a>
                                    <div class="uk-accordion-content" hidden="">
                                        {{ env('APP_NAME') }} is committed to safeguarding your Personal Data by adhering to strict security standards and using the most up to date security technologies.
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body uk-border-rounded uk-margin-medium-top">
                            <p class="uk-text-small text-capitalize">For General Inquiries Please Contact <a class="uk-text-lowercase uk-link" href="mailto:support@tokendirecthub.com">support@tokendirecthub.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>

@endsection
