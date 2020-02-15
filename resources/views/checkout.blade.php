@extends('layouts.app')

@section('content')

<h1 class="checkout-heading stylish-heading">Checkout</h1>
<div class="checkout-section">
    <div>
        <form action="" method="POST" id="payment-form">
            {{ csrf_field() }}
            <h2>Billing Details</h2>

            <div class="form-group">
                <label for="email">Email Address</label>
                @if (auth()->user())
                    <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                @else
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
            </div>

            <div class="half-form">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                </div>
                <div class="form-group">
                    <label for="province">Province</label>
                    <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                </div>
            </div> <!-- end half-form -->

            <div class="half-form">
                <div class="form-group">
                    <label for="postalcode">Postal Code</label>
                    <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                </div>
            </div> <!-- end half-form -->

            <div class="spacer"></div>

            <h2>Payment Details</h2>

            <div class="form-group">
                <label for="name_on_card">Name on Card</label>
                <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
            </div>

            <div class="form-group">
                <label for="card-element">
                  Credit or debit card
                </label>
                <div id="card-element">
                  <!-- a Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors -->
                <div id="card-errors" role="alert"></div>
            </div>
            <div class="spacer"></div>

            <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>


        </form>

        @if (1)
            <div class="mt-32">or</div>
            <div class="mt-32">
                <h2>Pay with PayPal</h2>

                <form method="post" id="paypal-payment-form" action="">
                    @csrf
                    <section>
                        <div class="bt-drop-in-wrapper">
                            <div id="bt-dropin"></div>
                        </div>
                    </section>

                    <input id="nonce" name="payment_method_nonce" type="hidden" />
                    <button class="button-primary" type="submit"><span>Pay with PayPal</span></button>
                </form>
            </div>
        @endif
    </div>
</div>

@endsection

