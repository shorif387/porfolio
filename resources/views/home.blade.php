<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name | YouTube SEO Expert</title>
    <style>
        /* Base Styles */
        :root {
            --primary: #ff5757;
            --secondary: #4a4a4a;
            --light: #f8f8f8;
            --dark: #222222;
            --accent: #3a86ff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        
        body {
            line-height: 1.6;
            color: var(--dark);
            background-color: #ffffff;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        a {
            text-decoration: none;
            color: var(--primary);
            transition: 0.3s;
        }
        
        a:hover {
            color: var(--accent);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .section {
            padding: 5rem 0;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: var(--secondary);
            margin-bottom: 3rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary);
            color: white;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            background-color: var(--accent);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1.5rem 0;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark);
        }
        
        .logo span {
            color: var(--primary);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 2rem;
        }
        
        .nav-links a {
            color: var(--dark);
            font-weight: 500;
        }
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark);
        }
        
        /* Hero Section */
        .hero {
            padding: 10rem 0 5rem;
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('/api/placeholder/1200/800') no-repeat center center;
            background-size: cover;
            text-align: center;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: var(--secondary);
        }
        
        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 4rem;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            font-size: 1rem;
            color: var(--secondary);
        }
        
        /* About Section */
        .about {
            background-color: var(--light);
        }
        
        .about-content {
            display: flex;
            align-items: center;
            gap: 4rem;
        }
        
        .about-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h3 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }
        
        .about-text p {
            margin-bottom: 1.5rem;
            color: var(--secondary);
        }
        
        .expertise-list {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .expertise-item {
            background-color: white;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }
        
        /* Work Section */
        .work-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .work-item {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .work-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .work-image {
            height: 200px;
            background: var(--light);
            overflow: hidden;
        }
        
        .work-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .work-item:hover .work-image img {
            transform: scale(1.1);
        }
        
        .work-content {
            padding: 1.5rem;
            background-color: white;
        }
        
        .work-title {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }
        
        .work-description {
            color: var(--secondary);
            margin-bottom: 1rem;
        }
        
        .work-stats {
            display: flex;
            justify-content: space-between;
            color: var(--primary);
            font-weight: 600;
        }
        
        /* Pricing Section */
        .pricing {
            background-color: var(--light);
        }
        
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .pricing-card {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .pricing-card.featured {
            border: 2px solid var(--primary);
        }
        
        .pricing-card.featured::before {
            content: "Popular";
            position: absolute;
            top: 0;
            right: 0;
            background-color: var(--primary);
            color: white;
            padding: 0.5rem 1rem;
            font-size: 0.8rem;
            border-bottom-left-radius: 10px;
        }
        
        .pricing-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .pricing-price {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1.5rem;
        }
        
        .pricing-price span {
            font-size: 1rem;
            color: var(--secondary);
        }
        
        .pricing-features {
            margin-bottom: 2rem;
        }
        
        .pricing-feature {
            margin-bottom: 0.5rem;
            color: var(--secondary);
        }
        
        /* Reviews Section */
        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .review-card {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .review-text {
            color: var(--secondary);
            margin-bottom: 1.5rem;
            font-style: italic;
        }
        
        .review-author {
            display: flex;
            align-items: center;
        }
        
        .review-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 1rem;
        }
        
        .review-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .review-info h4 {
            margin-bottom: 0.2rem;
        }
        
        .review-info p {
            color: var(--secondary);
            font-size: 0.9rem;
        }
        
        .review-stars {
            color: gold;
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }
        
        /* FAQ Section */
        .faq {
            background-color: var(--light);
        }
        
        .faq-item {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
            cursor: pointer;
        }
        
        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
        }
        
        .faq-question::after {
            content: "+";
            font-size: 1.5rem;
            color: var(--primary);
        }
        
        .faq-answer {
            color: var(--secondary);
            margin-top: 1rem;
            display: none;
        }
        
        .faq-item.active .faq-question::after {
            content: "-";
        }
        
        .faq-item.active .faq-answer {
            display: block;
        }
        
        /* Contact Section */
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .form-textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            min-height: 150px;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 4rem 0 2rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-column h3 {
            margin-bottom: 1.5rem;
            color: white;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: #ccc;
        }
        
        .footer-links a:hover {
            color: var(--primary);
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #333;
            color: white;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid #444;
            color: #888;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-content {
                flex-direction: column;
                gap: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .stats {
                flex-direction: column;
                gap: 1.5rem;
            }
            
            .hero-btns {
                flex-direction: column;
                align-items: center;
            }
            
            .hero-btns .btn {
                width: 100%;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-content">
            <div class="logo">
                <a href="#">Your<span>Name</span></a>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
    
            <div class="auth-buttons">
                @auth
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn" style="margin-right: 10px;">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn" style="margin-right: 10px;">Login</a>
                    <a href="{{ route('register') }}" class="btn">Register</a>
                @endauth
            </div>
    
            <button class="mobile-menu-btn">&#9776;</button>
        </div>
    </header>
    

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container hero-content">
            <h1 class="hero-title">Boost Your YouTube Channel with Expert SEO</h1>
            <p class="hero-subtitle">I help creators grow their audience and maximize revenue through data-driven YouTube SEO strategies</p>
            <div class="hero-btns">
                <a href="#work" class="btn">See My Work</a>
                <a href="#contact" class="btn" style="background-color: transparent; color: var(--dark); border: 2px solid var(--primary);">Free Consultation</a>
            </div>
            <div class="stats">
                <div class="stat-item">
                    <div class="stat-number">200+</div>
                    <div class="stat-label">Channels Optimized</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">10M+</div>
                    <div class="stat-label">Additional Views Generated</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Client Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

<!-- About Section -->
<section id="about" class="section about">
    <div class="container">
        <h2 class="section-title">About Me</h2>
        <div class="about-content">
            <div class="about-image">
                <img src="{{ asset('image/image1.jpeg') }}" alt="YouTube SEO Expert Portrait">
            </div>
            <div class="about-text">
                <h3>I'm Your YouTube Growth Specialist</h3>
                <p>With over 6 years of experience in YouTube SEO optimization, I've helped creators across diverse niches achieve exponential growth in views, subscribers, and revenue.</p>
                <p>My data-driven approach combines technical expertise with creative strategies to ensure your content reaches its target audience and stands out from the competition.</p>
                <p>I've worked with channels ranging from zero subscribers to those with millions, providing customized solutions that deliver measurable results.</p>
                <div class="expertise-list">
                    <div class="expertise-item">Keyword Research</div>
                    <div class="expertise-item">Title & Description Optimization</div>
                    <div class="expertise-item">Thumbnail Design Strategy</div>
                    <div class="expertise-item">Content Planning</div>
                    <div class="expertise-item">Algorithm Analysis</div>
                    <div class="expertise-item">Performance Tracking</div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Work Section -->
    <section id="work" class="section">
        <div class="container">
            <h2 class="section-title">My Work</h2>
            <p class="section-subtitle">Here are some channels I've helped grow through strategic YouTube SEO optimization</p>
            <div class="work-grid">
                <div class="work-item">
                    <div class="work-image">
                        <img src="{{ asset('image/image2.jpeg') }}" alt="Client Work Example 1">
                    </div>
                    <div class="work-content">
                        <h3 class="work-title">Tech Review Channel</h3>
                        <p class="work-description">Implemented keyword strategy and content plan that boosted visibility.</p>
                        <div class="work-stats">
                            <span>+247% Views</span>
                            <span>+183% Subscribers</span>
                        </div>
                    </div>
                </div>
                <div class="work-item">
                    <div class="work-image">
                        <img src="{{ asset('image/image3.png') }}" alt="Client Work Example 2">
                    </div>
                    <div class="work-content">
                        <h3 class="work-title">Cooking Tutorial Channel</h3>
                        <p class="work-description">Optimized metadata and improved CTR with strategic thumbnails.</p>
                        <div class="work-stats">
                            <span>+387% Views</span>
                            <span>+215% Subscribers</span>
                        </div>
                    </div>
                </div>
                <div class="work-item">
                    <div class="work-image">
                        <img src="{{ asset('image/image4.jpeg') }}" alt="Client Work Example 3">
                    </div>
                    <div class="work-content">
                        <h3 class="work-title">Fitness Channel</h3>
                        <p class="work-description">Created niche-specific content strategy focusing on high-value keywords.</p>
                        <div class="work-stats">
                            <span>+425% Views</span>
                            <span>+310% Subscribers</span>
                        </div>
                    </div>
                </div>
                <div class="work-item">
                    <div class="work-image">
                        <img src="{{ asset('image/image5.png') }}" alt="Client Work Example 4">
                    </div>
                    <div class="work-content">
                        <h3 class="work-title">Gaming Channel</h3>
                        <p class="work-description">Implemented trend analysis and algorithm-friendly content structure.</p>
                        <div class="work-stats">
                            <span>+198% Views</span>
                            <span>+145% Subscribers</span>
                        </div>
                    </div>
                </div>
                <div class="work-item">
                    <div class="work-image">
                        <img src="{{ asset('image/image2.jpeg') }}" alt="Client Work Example 5">
                    </div>
                    <div class="work-content">
                        <h3 class="work-title">Educational Channel</h3>
                        <p class="work-description">Developed comprehensive SEO plan focusing on valuable search queries.</p>
                        <div class="work-stats">
                            <span>+267% Views</span>
                            <span>+189% Subscribers</span>
                        </div>
                    </div>
                </div>
                <div class="work-item">
                    <div class="work-image">
                        <img src="{{ asset('image/image3.png') }}" alt="Client Work Example 6">
                    </div>
                    <div class="work-content">
                        <h3 class="work-title">Travel Vlog Channel</h3>
                        <p class="work-description">Created strategic tagging system and engagement-focused metadata.</p>
                        <div class="work-stats">
                            <span>+356% Views</span>
                            <span>+234% Subscribers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Pricing Section -->
<section id="pricing" class="section pricing">
    <div class="container">
        <h2 class="section-title">Pricing Plans</h2>
        <p class="section-subtitle">Choose the right YouTube SEO package for your channel's growth goals</p>

        <div class="pricing-grid">
            @foreach ($pricingPlans as $index => $plan)
                <div class="pricing-card {{ $index == 1 ? 'featured' : '' }}">
                    <h3 class="pricing-title">{{ $plan->name }}</h3>
                    <div class="pricing-price">${{ number_format($plan->price, 0) }}<span>/month</span></div>
                    <div class="pricing-features">
                        @foreach(explode("\n", $plan->features) as $feature)
                            <div class="pricing-feature">{{ trim($feature) }}</div>
                        @endforeach
                    </div>
                    <a href="#contact" class="btn">Get Started</a>
                </div>
            @endforeach
        </div>
    </div>
</section>




    <!-- Reviews Section -->
    <section id="reviews" class="section">
        <div class="container">
            <h2 class="section-title">Client Reviews</h2>
            <p class="section-subtitle">Here's what channel owners are saying about my YouTube SEO services</p>
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">"Working with this YouTube SEO expert transformed my channel completely. I went from struggling to get views to having multiple videos recommended by the algorithm. The ROI has been incredible!"</p>
                    <div class="review-author">
                        <div class="review-avatar">
                            <img src="/api/placeholder/100/100" alt="Client Avatar">
                        </div>
                        <div class="review-info">
                            <h4>Alex Johnson</h4>
                            <p>Tech Review Channel (250K subscribers)</p>
                        </div>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">"I was skeptical about hiring a YouTube SEO specialist, but this was the best decision for my channel. The data-driven approach and attention to detail really made the difference. My subscriber growth is now exponential!"</p>
                    <div class="review-author">
                        <div class="review-avatar">
                            <img src="/api/placeholder/100/100" alt="Client Avatar">
                        </div>
                        <div class="review-info">
                            <h4>Sarah Williams</h4>
                            <p>Cooking Channel (125K subscribers)</p>
                        </div>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">"The keyword research and content strategy provided were game-changers for my educational channel. After implementing the recommendations, my videos started ranking for competitive terms I never thought possible."</p>
                    <div class="review-author">
                        <div class="review-avatar">
                            <img src="/api/placeholder/100/100" alt="Client Avatar">
                        </div>
                        <div class="review-info">
                            <h4>Michael Chen</h4>
                            <p>Educational Channel (500K subscribers)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- Footer Section -->
<footer style="background-color: var(--dark); color: white; padding: 3rem 0;">
  <div class="container" style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 2rem;">
    
    <div style="flex: 1; min-width: 250px;">
      <h3 style="font-size: 1.5rem; color: var(--primary); margin-bottom: 1rem;">Your Name</h3>
      <p style="color: #ccc;">Helping creators grow their audience with strategic YouTube SEO. Let's boost your visibility and ranking together.</p>
    </div>

    <div style="flex: 1; min-width: 250px;">
      <h4 style="margin-bottom: 1rem;">Quick Links</h4>
      <ul style="list-style: none; padding: 0; color: #ccc;">
        <li><a href="#about" style="color: #ccc;">About</a></li>
        <li><a href="#services" style="color: #ccc;">Services</a></li>
        <li><a href="#portfolio" style="color: #ccc;">Portfolio</a></li>
        <li><a href="#contact" style="color: #ccc;">Contact</a></li>
      </ul>
    </div>

    <div style="flex: 1; min-width: 250px;">
      <h4 style="margin-bottom: 1rem;">Follow Me</h4>
      <div style="display: flex; gap: 1rem;">
        <a href="#" style="color: white;"><i class="fab fa-facebook-f"></i></a>
        <a href="#" style="color: white;"><i class="fab fa-twitter"></i></a>
        <a href="#" style="color: white;"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" style="color: white;"><i class="fab fa-youtube"></i></a>
      </div>
    </div>

  </div>

  <div style="text-align: center; color: #aaa; margin-top: 2rem; font-size: 0.9rem;">
    &copy; 2025 Your Name. All rights reserved.
  </div>
</footer>
