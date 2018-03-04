@extends('container')

@section('title', 'Home')

@section('content')
    <div class="text--body">
        <p>{{ env('APP_NAME') }} is a software platform designed to change our regional economies by
            extension
            of changing the way we grow, market, &amp; distribute our local food &amp; goods.</p>
        <div class="row">
            <div class="eight columns">
                <p>Our vision was inspired by the Community Shared Agriculture business model and the Slow Food
                    movement; and
                    is executed by our talented technical people &mdash; with a signature toughness.</p>

                <p>Everyone who has helped us &mdash; in any way at all &mdash; was located in Nova Scotia, Canada. We
                    know our community,
                    and the power of our unified front in facing our larger, global competitors.</p>

                <p>We want to unleash this power in every community across the globe.</p>
            </div>
            <div class="four columns">
                <img class="responsive-image" src="/img/female-farmer.jpeg" border="0" alt="Null"/>
            </div>
        </div>
        <hr>
        <h4>We Support</h4>
        <ul>
            <li>CSA Farms</li>
            <li>Small Restaurant Chains</li>
            <li>Local Delivery Services</li>
            <li>General Retail &amp; e-Commerce</li>
        </ul>

        <h4>With</h4>
        <ul>
            <li>e-Commerce Websites
                <ul>
                    <li>Global &amp; Local Marketplaces</li>
                    <li>Scheduled Product Releases</li>
                    <li>Distribution Center &amp; Inventory Management
                        <ul>
                            <li>Distribution Center Inventory</li>
                            <li>Cost-per-unit Insight &amp; Cost Analytics</li>
                        </ul>
                    </li>
                    <li>Deliveries &amp; Drop-off Locations
                        <ul>
                            <li>Driver On-boarding &amp; Traceability</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Content Management &amp; Marketing
                <ul>
                    <li>Event Scheduling</li>
                    <li>Blogging</li>
                    <li>Newsletters &amp; Archives</li>
                </ul>
            </li>
        </ul>
        <hr>
        <h2>The Team</h2>
    </div>
@endsection
