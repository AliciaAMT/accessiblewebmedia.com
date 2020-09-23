@extends('layouts.app')

@section('content')

<div class="text-center">
        <h1 class="font-italic font-weight-light">We Make Your Website Accessible To Everyone</h1>
        </div>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                   
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">We improve your established website or we design a new one from scratch. Your choice!</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-dark"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse" style="color: #37fbe7"></i>
                        </span>
                        <h4 class="my-3">Customer Retention Optimization</h4>
                        <p class="text-muted">If your website is not user friendly you will lose customers. We optimize customer retention by creating a beautiful, user friendly interface that keeps them coming back for more!</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-dark"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse" style="color: #37fbe7"></i>
                        </span>
                        <h4 class="my-3">Responsive and Accessible Website and App Design</h4>
                        <p class="text-muted">With today's technologies, it is imperative that websites be accessible by a variety of devices and by a variety of users with different abilities. There is no need to have a different website for mobile devices or disabled users. We accomplish it all in one website.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-dark"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse" style="color: #37fbe7"></i>
                        </span>
                        <h4 class="my-3">Web Security<br />Optimization</h4>
                        <p class="text-muted">Rest assured that your data and your customer's data is safe and secure from breaches. We improve previously overlooked vulnerabilities and update outdated packages. We can also back up your website in case of catastrophic loss.</p>
                    </div>
                </div>
            </div>
        </section>

           <!-- Contact-->
           <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Request a quote here:</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group text-left">
                                <label for="name" style="font-size: 1.5rem; font-weight: bold;">Name</label>
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group text-left">
                                <label for="email" style="font-size: 1.5rem; font-weight: bold;">Email</label>
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group text-left mb-md-0">
                                <label for="phone" style="font-size: 1.5rem; font-weight: bold;">Phone Number</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-left form-group-textarea mb-md-0">
                                <label for="message" style="font-size: 1.5rem; font-weight: bold;">Message</label>
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <br /><br />
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>

@endsection
