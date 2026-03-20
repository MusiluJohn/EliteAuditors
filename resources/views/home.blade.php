@extends('layouts.app')

@section('title', 'Elite Auditors | Financial Consulting')

@section('content')

<section class="hero">
  <div class="hero-image-container">
    <img 
      src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
      alt="Professional financial consultants team smiling in office" 
      class="hero-portrait"
    >
  </div>
  <h1>Strategic Financial Solutions for Your Success</h1>
  <p>Expert consulting in financial planning, tax advisory, audits & investment strategies — tailored for businesses in Kenya and beyond.</p>
  <br><a href="{{ route('contact') }}" class="btn">Schedule a Free Consultation</a>
</section>

<section id="services">
  <h2>Our Core Services</h2>
  <div class="services-grid">
    <div class="service-card">
      <h3>Financial Planning & Advisory</h3>
      <p>Comprehensive strategies to achieve your long-term financial goals.</p>
    </div>
    <div class="service-card">
      <h3>Tax Consulting & Compliance</h3>
      <p>Optimize your tax position while ensuring full KRA compliance.</p>
    </div>
    <div class="service-card">
      <h3>Audit & Assurance</h3>
      <p>Independent audits that build trust and meet regulatory needs.</p>
    </div>
    <div class="service-card">
      <h3>Business Valuation & Investment</h3>
      <p>Accurate valuations and smart investment guidance.</p>
    </div>
  </div>
</section>

<section id="testimonials">
  <h2>What Our Clients Say</h2>
  <div class="testimonials-grid">
    <div class="testimonial-card">
      <div class="client-info">
        <img 
          src="https://thumbs.dreamstime.com/b/portrait-business-black-man-red-wall-smile-confident-insurance-agent-us-person-happy-professional-broker-coverage-442031794.jpg" 
          alt="John Kamau" 
          class="client-photo"
        >
        <div>
          <h4>John Kamau</h4>
          <p class="client-title">CEO, Kamau Agro-Enterprises Ltd</p>
        </div>
      </div>
      <p class="testimonial-text">
        "Elite Auditors transformed our financial strategy. Their tax advisory saved us over KSh 2.8 million in the last filing year while keeping us fully compliant with KRA. Professional, responsive, and truly invested in our growth."
      </p>
      <div class="stars">★★★★★</div>
    </div>

    <div class="testimonial-card">
      <div class="client-info">
        <img 
          src="https://thumbs.dreamstime.com/b/portrait-smile-african-woman-office-face-professional-confident-entrepreneurship-happy-business-person-403917811.jpg" 
          alt="Sarah Wanjiku" 
          class="client-photo"
        >
        <div>
          <h4>Sarah Wanjiku</h4>
          <p class="client-title">Founder, Wanjiku Tech Solutions</p>
        </div>
      </div>
      <p class="testimonial-text">
        "The audit and assurance services gave us the credibility we needed to secure major funding. Their team explained complex issues in simple terms and delivered ahead of schedule. Highly recommended for any growing business in Kenya."
      </p>
      <div class="stars">★★★★★</div>
    </div>

    <div class="testimonial-card">
      <div class="client-info">
        <img 
          src="https://thumbs.dreamstime.com/b/portrait-successful-african-american-mature-businessman-senior-man-business-suit-smiling-looking-camera-showing-happy-264996422.jpg" 
          alt="David Omondi" 
          class="client-photo"
        >
        <div>
          <h4>David Omondi</h4>
          <p class="client-title">Managing Director, Omondi Imports & Exports</p>
        </div>
      </div>
      <p class="testimonial-text">
        "Their investment guidance and business valuation helped us make informed decisions during expansion. The insights were spot-on and the process was seamless. Elite Auditors is now our trusted long-term partner."
      </p>
      <div class="stars">★★★★★</div>
    </div>
  </div>
</section>

@endsection