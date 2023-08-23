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
                                <h2>Company Faq</h2>
                                <p>Please Contact Support For Any Other Question</p>
                                <hr class="uk-margin-medium-top uk-margin-small-bottom">
                                <ul class="in-faq-5 uk-accordion" data-uk-accordion="collapsible: false">
                                    <li class="uk-open">
                                        <a class="uk-accordion-title" href="#">WHY CHOOSE US?</a>
                                        <div class="uk-accordion-content">

                                            {{ env('APP_NAME') }} Incoporated An Impressive Records Of Successful Trades, High Revenue Margin, Trained Experts, {{ env('APP_NAME') }} Limited Is Regulated By Various Securities And Exchange Commission , Licensed By The Liabilities Trade Security (LTS) Of South Africa In Africa And London In The United Kingdom, With LTS No. LTS-010839223. The Company Is Also Registered With The Financial Conduct Authority Of The UK All Its Trading Is Conducted Under Strict Regulatory Supervision

                                            <ul class="uk-list uk-list-bullet">
                                                <li>Follow the Company Brand Guides</li>
                                                <li>Never use Company in the plural or possessive form</li>
                                                <li>Never use Company trademark generically in referring to the product</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">HOW DO I EARN THROUGH {{ env('APP_NAME') }}?</a>
                                        <div class="uk-accordion-content" hidden="">
                                            First Of All, Register Yourself At {{ env('APP_NAME') }} . We Offer A High Profit Trading Plan To Our Clients - Users Earn 25% Daily Profits (Excluding Saturdays And Sundays) From Weekly, Monthly, Quaterly And Yearly Plans On Any Capital Investment Equivalent To $500 And Above. You Can Subscribe To More Than One Active Plan At A Time.

                                            Now On Behalf Of You, Our Company Specialists Invests Your Fund In Our Trading Firm. We Have Specialized Artificial Intelligence Bots Extensively Built By Experts With Cognitive Knowledge In Different Financial Markets For Profitable Trading. You Do Not Have To Worry About Trading On Your Own And Software Setup Or Any Maintenance Cost. We Do It For You.

                                            We Are Committed To Return Your Investments As Per Numbers Of Trading Plan Purchased By You, 25% Daily Profit (Excluding Saturdays And Sundays) As Per The Selected Investement Plan. {{ env('APP_NAME') }} Accepts And Returns Payments In Bank Transfer, Perfect Money, Bitcoin, Etheruem Etc And With The Returns You Can Subscribe To More Trading Plans Or Withdraw And Sell Your Bitcoins To Enjoy Your Profit.
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">WHERE WILL I RECIEVE THE INTEREST OF MY ACTIVE DEPOSITS?</a>
                                        <div class="uk-accordion-content" hidden="">
                                            All Users Operating A Trade Account, Get Profits Instantly As Our AI Processes Trade The Outcome Of The Trade Is Shown In Your Trade Account. Additional Profits Maybe Earn At The End Of A Users Trading Period, All Users Are Expected To Stay Online As Much As They Can To Watch Their Trade And Also Make Changes When Neccessary.
                                        </div>
                                    </li>






                                    <li>
                                        <a class="uk-accordion-title" href="#">HOW LONG DOES IT TAKES FOR MY DEPOSIT TO REFLECT IN MY ACCOUNTS</a>
                                        <div class="uk-accordion-content" hidden="">
                                            {{ env('APP_NAME') }} Offers Multiple Deposit Methods And Their Processing Times Differ. Bitcoin Funding Reflects Within An Hour, Bank Wire May Extend More Than A Day Depending On The Country. After Funding Your Account, Please Contact Our Agents Via Our The Whatsapp Button Or Our Live Chat App Or Send A Mail To SUPPORT@{{ env('APP_NAME') }}
                                        </div>
                                    </li>


                                    <li>
                                        <a class="uk-accordion-title" href="#">HOW DO I REGISTER WITH {{ env('APP_NAME') }}</a>
                                        <div class="uk-accordion-content" hidden="">
                                            Opening An Account With Us Is Very Easy, Just Fill-In The Registration Form With Your Correct Details And Submit To Create An Account. You Can Register By Clicking <a class="register" href="#">REGISTER NOW</a>
                                            If You Encounter Any Problems While Opening An Account, Please Contact Our Support Team At Support@{{ env('APP_NAME') }} Or Open A Conversation Via The Chat Medium Found On Our Website
                                        </div>
                                    </li>

                                    <li>
                                        <a class="uk-accordion-title" href="#">HOW LONG DOES IT TAKES FOR MY TRADING TO START AFTER MAKING DEPOSIT?</a>
                                        <div class="uk-accordion-content" hidden="">
                                            Your Trade Account Will Start Trading Immediately After Your Deposit Is Confirmed And Approved.
                                        </div>
                                    </li>




                                </ul>
                                <div class="uk-card uk-card-default uk-card-small uk-card-body uk-border-rounded uk-margin-medium-top">
                                    <p class="uk-text-small text-capitalize">For General Inquiries Please Contact <a class="uk-text-lowercase uk-link" href="mailto:">support@{{ env('APP_NAME') }}</a></p>
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
