@extends('portfolio.app')

@section('content')
@include('portfolio.includes.header', [
    'title' => 'Contact Us'
])
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">

                <form method="POST" action="{{ route('contactSubmit') }}">
                    @csrf
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" name="full_name" placeholder="Enter your name..."/>
                        <label for="name">Full name</label>
                        <div class="invalid-feedback">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com"/>
                        <label for="email">Email address</label>
                        <div class="invalid-feedback">An email is required.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" name="phone" placeholder="(123) 456-7890" />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback">A phone number is required.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" name="message" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback">A message is required.</div>
                    </div>

                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>
@stop
