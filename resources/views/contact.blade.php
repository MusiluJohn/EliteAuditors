@extends('layouts.app')

@section('title', 'Contact Us | Elite Auditors')

@section('content')

<!-- <header>
  <nav>
    <div class="logo">
      <a href="{{ route('home') }}">
        <img src="{{ asset('images/elite logo.png') }}" class="site-logo" alt="Elite Auditors Logo">
        <span>Elite <strong>Auditors</strong></span>
      </a>
    </div>
    
    <ul class="nav-links">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('about') }}">About</a></li>
      <li><a href="{{ route('services') }}">Services</a></li>
      <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
  </nav>
</header> -->

<section class="hero">
  <h1>Get in Touch</h1>
  <p class="tagline">INTEGRITY | COMPETENCE | EFFICIENCY</p>
  <p>We'd love to hear from you. Reach out for consultations, inquiries, or partnership opportunities.</p>
</section>

<section id="contact" class="contact">
  <div class="contact-container">
    <div class="contact-info-section">
      <h2>Contact Information</h2>
      <div class="consultant-profile">
        <h3>CPA Dr. K. Mutuku</h3>
        <p class="title">Managing Consultant</p>
        <p><i class="fas fa-phone"></i> +254 700 117806</p>
        <p><i class="fas fa-envelope"></i> info@eliemutukuassociates.co.ke</p>
        <p><i class="fas fa-envelope"></i> kisavumutuku@gmail.com</p>
        <p><i class="fas fa-map-marker-alt"></i> P.O. Box 72014 – 00200, Nairobi, Kenya</p>
      </div>

      <h3>We Deal With:</h3>
      <ul class="services-list">
        <li>Bookkeeping</li>
        <li>Audit & Assurance</li>
        <li>Tax Advisory</li>
        <li>Tax Planning</li>
        <li>ISO Certification</li>
        <li>Independent Review of Objections</li>
      </ul>
    </div>

    <div class="contact-form-section">
      <h2>Send Us a Message</h2>

      @if (session('success'))
        <p style="color: green; font-weight: bold; text-align: center;">
          {{ session('success') }}
        </p>
      @endif

      @if ($errors->any())
        <p style="color: red; text-align: center;">
          {{ $errors->first() }}
        </p>
      @endif

      <form method="POST" action="{{ route('contact.send') }}">
        @csrf
        <input type="text" name="name" placeholder="Your Name *" required>
        <input type="email" name="email" placeholder="Your Email *" required>
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" rows="6" placeholder="Your Message *" required></textarea>
        <button type="submit" class="btn">Send Message</button>
      </form>
    </div>
  </div>
</section>

@endsection