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
                                <h2>Terms &amp; Conditions</h2>
                                <p>The Website and content is available in English Language. The English version is the original version and the only one binding on {{ env('APP_NAME') }} Shall prevail on any other version in case of discrepancy. {{ env('APP_NAME') }} shall not be responsible for any erroneous, inadequate, or misleading translations from the original version into other languages.</p><p>
                                </p><p>
                                    {{ env('APP_NAME') }} as the company with registration number 010839223, having its registered office at 4th Floor, Mokway Parkins, Red Hills Pkwy - Utah, USA, which operates on behalf of FGC, holding financial services license, offers access to its web page and use related services by any individual or corporate entity (hereinafter referred to as the Client) according to the procedure and on the terms and conditions described in this Agreement.</p>

                                <p>The Agreement becomes effective as of the date when the Client opened a trading investment account and transferred funds to the Company account(s) to ensure minimum trading deposit.</p>
                                <hr class="uk-margin-medium-top uk-margin-small-bottom">
                                <ul class="in-faq-5 uk-accordion" data-uk-accordion="collapsible: false">
                                    <li class="uk-open">
                                        <a class="uk-accordion-title" href="#">PAYMENT PROCEDURES:</a>
                                        <div class="uk-accordion-content">
                                            <ul class="uk-list uk-list-bullet">
                                                <li>Client shall fund his trading account within 90 calendar days from the date of its opening in an amount not less than define terms for the type of account (minimum initial deposit).</li>
                                                <li>
                                                    The Company has the right to close/cancel an account with the balance less than 1 cent (one-hundredth of a US dollar), if the above account balance existed for more than 90 calendar days.</li>
                                                <li>Client may request withdrawal of funds from his trading account in the amount not used to cover the margin, but not more than current balance. The minimal allowed withdrawal amount is 500 USD for compounding acccounts.</li>
                                                <li>Client places a funds withdrawal order using the Company website interface. Company is not responsible for any third party access to the Client personal information and withdrawal orders. Once an order has been received, the withdrawal amount may be deducted from the Client trading account.</li>
                                                <li>
                                                    In some cases deposits may take up to 24hours after receiving client order. The security service of the company has the right to hold the order up to 24 hours, previously having notified the client.</li>
                                                <li>
                                                    The client will be given the Company bitcoin wallet address to make his deposit to his trading account via the Company website.
                                                    When funding his account, the Client shall use the Company crypto wallet details, received at the Company website only and effective on the payment date. The Company cannot be held responsible for the funds which the Client transferred using crypto wallet address different from current, and does not offer investigation and refund of Client payment and cannot credit these funds to Client trading balance.</li>
                                                <li>
                                                    Company reserves the right to reject a request for withdrawal in case of an explicit intention to exchange customer funds from one payment system to another.</li>

                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                                <div class="uk-card uk-card-default uk-card-small uk-card-body uk-border-rounded uk-margin-medium-top">
                                    <p class="uk-text-small text-capitalize">For General Inquiries Please Contact <a class="uk-text-lowercase uk-link" href="mailto:">support@{{ env('APP_NAME') }}.live</a></p>
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
