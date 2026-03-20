@extends('layouts.app')

@section('title', 'About Us | Elite Auditors')

@section('content')


<section class="hero">
  <div class="hero-image-container">
    <img 
      src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
      alt="Professional financial consultants team in modern office" 
      class="hero-portrait"
    >
  </div>
  <h1>Strategic Financial & Audit Solutions for Your Success</h1>
  <p class="tagline">INTEGRITY | COMPETENCE | EFFICIENCY</p>
  <p>Expert audit, tax advisory, bookkeeping, and compliance services — tailored for businesses across Kenya and beyond.</p>
  <a href="{{ route('contact') }}" class="btn">Schedule a Free Consultation</a>
</section>

<!-- About Us Section -->
<section id="about" class="about-section">
  <div class="container">
    <h2>About Elite Auditors</h2>
    
    <div class="about-content">
      <div class="about-text">
        <p>Elite Auditors is a dynamic, client-focused firm of Certified Public Accountants (CPA-K) based in Nairobi, Kenya. Led by <strong>CPA Dr. K. Mutuku</strong>, our Managing Consultant, we combine deep local expertise with global best practices to deliver exceptional financial and audit solutions.</p>
        
        <p>With years of experience serving diverse businesses — from SMEs to established enterprises — we help our clients navigate complex regulatory environments, optimize tax positions, strengthen financial controls, and achieve sustainable growth. Our commitment to excellence is rooted in three core values:</p>
        
        <p class="core-values"><strong>INTEGRITY | COMPETENCE | EFFICIENCY</strong></p>
        
        <p>We pride ourselves on building long-term partnerships based on trust, transparency, and measurable results. Whether you're seeking reliable bookkeeping, comprehensive audits, strategic tax planning, or support for ISO certification, our team provides practical, compliant, and value-driven advice tailored to the Kenyan market and KRA regulations.</p>
        
        <p>At Elite Auditors, your financial success and peace of mind are our top priorities.</p>
      </div>
      
      <div class="about-leader">
        <img src="https://via.placeholder.com/300x400?text=CPA+Dr.+K.+Mutuku" alt="CPA Dr. K. Mutuku - Managing Consultant" class="leader-photo">
        <h3>CPA Dr. K. Mutuku</h3>
        <p class="title">Managing Consultant</p>
        <p class="contact">+254 700 117806<br>
          <a href="mailto:info@eliemutukuassociates.co.ke">info@eliemutukuassociates.co.ke</a><br>
          <a href="mailto:kisavumutuku@gmail.com">kisavumutuku@gmail.com</a>
        </p>
      </div>
    </div>
    
    <div class="services-teaser">
      <h3>We Deliver With Excellence In:</h3>
      <ul class="services-list">
        <li>Bookkeeping</li>
        <li>Audit & Assurance</li>
        <li>Tax Advisory</li>
        <li>Tax Planning</li>
        <li>ISO Certification Support</li>
        <li>Independent Review of Objections</li>
      </ul>
    </div>
  </div>
</section>

<section id="services">
  <h2>Our Core Services</h2>
  <div class="services-grid">
    <div class="service-card">
      <h3>Bookkeeping</h3>
      <p>Accurate, timely record-keeping tailored to your business operations and compliance needs.</p>
    </div>
    <div class="service-card">
      <h3>Audit & Assurance</h3>
      <p>Independent, high-quality audits that enhance credibility and meet statutory requirements.</p>
    </div>
    <div class="service-card">
      <h3>Tax Advisory & Compliance</h3>
      <p>Expert guidance on KRA regulations, ensuring full compliance while minimizing liabilities.</p>
    </div>
    <div class="service-card">
      <h3>Tax Planning</h3>
      <p>Strategic, forward-looking planning to optimize your tax position legally and efficiently.</p>
    </div>
    <div class="service-card">
      <h3>ISO Certification</h3>
      <p>Professional support to achieve and maintain internationally recognized ISO standards.</p>
    </div>
    <div class="service-card">
      <h3>Independent Review of Objections</h3>
      <p>Thorough, objective reviews and resolution support for tax disputes and objections.</p>
    </div>
  </div>
</section>

<section id="testimonials">
  <h2>What Our Clients Say</h2>
  <div class="testimonials-grid">
    <div class="testimonial-card">
      <div class="client-info">
        <img src="https://thumbs.dreamstime.com/b/portrait-business-black-man-red-wall-smile-confident-insurance-agent-us-person-happy-professional-broker-coverage-442031794.jpg" alt="John Kamau" class="client-photo">
        <div>
          <h4>John Kamau</h4>
          <p class="client-title">CEO, Kamau Agro-Enterprises Ltd</p>
        </div>
      </div>
      <p class="testimonial-text">"Elite Auditors transformed our financial strategy. Their tax advisory saved us over KSh 2.8 million in the last filing year while keeping us fully compliant with KRA. Professional, responsive, and truly invested in our growth."</p>
      <div class="stars">★★★★★</div>
    </div>

    <div class="testimonial-card">
      <div class="client-info">
        <img src="https://thumbs.dreamstime.com/b/portrait-smile-african-woman-office-face-professional-confident-entrepreneurship-happy-business-person-403917811.jpg" alt="Sarah Wanjiku" class="client-photo">
        <div>
          <h4>Sarah Wanjiku</h4>
          <p class="client-title">Founder, Wanjiku Tech Solutions</p>
        </div>
      </div>
      <p class="testimonial-text">"The audit and assurance services gave us the credibility we needed to secure major funding. Their team explained complex issues in simple terms and delivered ahead of schedule. Highly recommended for any growing business in Kenya."</p>
      <div class="stars">★★★★★</div>
    </div>

    <div class="testimonial-card">
      <div class="client-info">
        <img src="https://thumbs.dreamstime.com/b/portrait-successful-african-american-mature-businessman-senior-man-business-suit-smiling-looking-camera-showing-happy-264996422.jpg" alt="David Omondi" class="client-photo">
        <div>
          <h4>David Omondi</h4>
          <p class="client-title">Managing Director, Omondi Imports & Exports</p>
        </div>
      </div>
      <p class="testimonial-text">"Their investment guidance and business valuation helped us make informed decisions during expansion. The insights were spot-on and the process was seamless. Elite Auditors is now our trusted long-term partner."</p>
      <div class="stars">★★★★★</div>
    </div>
  </div>
</section>

@endsection