<!DOCTYPE html>
<html lang="en">
<head>
  <title>Charles Zingalaoa | Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #e63946;
      --primary-dark: #c1121f;
      --primary-light: #f28482;
      --dark: #0b090a;
      --dark-gray: #161a1d;
      --medium-gray: #2b2d42;
      --light: #f5f3f4;
      --accent: #d90429;
      --gradient: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--dark);
      color: var(--light);
      overflow-x: hidden;
      min-height: 100vh;
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      background: var(--dark-gray);
    }

    ::-webkit-scrollbar-thumb {
      background: var(--primary);
      border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: var(--primary-dark);
    }

    /* Navigation */
    .navbar-custom {
      background-color: rgba(11, 9, 10, 0.95);
      backdrop-filter: blur(15px);
      padding: 1.2rem 0;
      transition: all 0.4s ease;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
      border-bottom: 1px solid rgba(230, 57, 70, 0.1);
    }

    .navbar-custom.scrolled {
      padding: 0.8rem 0;
    }

    .navbar-brand {
      font-weight: 800;
      font-size: 1.8rem;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      position: relative;
    }

    .navbar-brand::after {
      content: '';
      position: absolute;
      width: 8px;
      height: 8px;
      background: var(--primary);
      border-radius: 50%;
      bottom: 5px;
      right: -12px;
    }

    .nav-link {
      color: var(--light) !important;
      font-weight: 500;
      margin: 0 0.8rem;
      position: relative;
      transition: all 0.3s ease;
      padding: 0.5rem 0 !important;
    }

    .nav-link:hover {
      color: var(--primary) !important;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 3px;
      bottom: 0;
      left: 0;
      background: var(--gradient);
      transition: width 0.4s ease;
      border-radius: 10px;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .navbar-toggler {
      border: none;
      padding: 4px 8px;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28230, 57, 70, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Hero Section */
    .hero-section {
      min-height: 100vh;
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
      padding-top: 5rem;
    }

    .hero-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: radial-gradient(circle at 20% 80%, rgba(230, 57, 70, 0.1) 0%, transparent 50%),
                  radial-gradient(circle at 80% 20%, rgba(201, 18, 31, 0.1) 0%, transparent 50%),
                  radial-gradient(circle at 40% 40%, rgba(11, 9, 10, 0.8) 0%, transparent 50%);
      z-index: -1;
    }

    .hero-content h1 {
      font-size: 4rem;
      font-weight: 800;
      margin-bottom: 1.5rem;
      line-height: 1.1;
    }

    .hero-content .gradient-text {
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      display: block;
    }

    .hero-content p {
      font-size: 1.3rem;
      line-height: 1.8;
      margin-bottom: 2.5rem;
      color: #ccc;
      max-width: 600px;
    }

    .profile-img-container {
      position: relative;
      display: inline-block;
    }

    .profile-img {
      width: 380px;
      height: 380px;
      border-radius: 50%;
      object-fit: cover;
      border: 8px solid transparent;
      background: var(--gradient) border-box;
      -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
      webkit-mask-composite: xor;
      mask-composite: exclude;
      box-shadow: 0 15px 40px rgba(230, 57, 70, 0.3);
      transition: all 0.5s ease;
      position: relative;
      z-index: 2;
    }

    .profile-img:hover {
      transform: scale(1.03);
      box-shadow: 0 20px 50px rgba(230, 57, 70, 0.4);
    }

    .floating-elements {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 1;
    }

    .floating-element {
      position: absolute;
      width: 60px;
      height: 60px;
      background: var(--gradient);
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.5rem;
      box-shadow: 0 5px 15px rgba(230, 57, 70, 0.4);
      animation: float 6s ease-in-out infinite;
    }

    .floating-element:nth-child(1) {
      top: 10%;
      left: 5%;
      animation-delay: 0s;
    }

    .floating-element:nth-child(2) {
      top: 70%;
      left: 80%;
      animation-delay: 2s;
    }

    .floating-element:nth-child(3) {
      top: 40%;
      left: 85%;
      animation-delay: 4s;
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0) rotate(0deg);
      }
      50% {
        transform: translateY(-20px) rotate(10deg);
      }
    }

    .btn-primary-custom {
      background: var(--gradient);
      border: none;
      padding: 0.9rem 2.5rem;
      border-radius: 50px;
      font-weight: 600;
      transition: all 0.4s ease;
      box-shadow: 0 8px 20px rgba(230, 57, 70, 0.4);
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .btn-primary-custom::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 0%;
      height: 100%;
      background: linear-gradient(135deg, var(--primary-dark) 0%, var(--accent) 100%);
      transition: all 0.4s ease;
      z-index: -1;
    }

    .btn-primary-custom:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(230, 57, 70, 0.6);
    }

    .btn-primary-custom:hover::before {
      width: 100%;
    }

    .btn-outline-custom {
      border: 2px solid var(--primary);
      color: var(--primary);
      background: transparent;
      padding: 0.9rem 2.5rem;
      border-radius: 50px;
      font-weight: 600;
      transition: all 0.4s ease;
    }

    .btn-outline-custom:hover {
      background: var(--primary);
      color: white;
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(230, 57, 70, 0.4);
    }

    /* Section Titles */
    .section-title {
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 4rem;
      text-align: center;
      position: relative;
    }

    .section-title::after {
      content: '';
      position: absolute;
      width: 100px;
      height: 5px;
      background: var(--gradient);
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      border-radius: 5px;
    }

    /* About Section */
    .about-section {
      padding: 8rem 0;
      background-color: var(--dark-gray);
      position: relative;
    }

    .about-content {
      background: rgba(22, 26, 29, 0.8);
      border-radius: 20px;
      padding: 3rem;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(230, 57, 70, 0.1);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
      transition: all 0.4s ease;
    }

    .about-content:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
      border-color: rgba(230, 57, 70, 0.2);
    }

    .about-img {
      border-radius: 15px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      transition: all 0.5s ease;
    }

    .about-img:hover {
      transform: scale(1.03);
    }

    .skill-badge {
      display: inline-block;
      background: rgba(230, 57, 70, 0.1);
      color: var(--primary-light);
      padding: 0.5rem 1.2rem;
      border-radius: 50px;
      margin: 0.5rem 0.5rem 0.5rem 0;
      font-size: 0.9rem;
      border: 1px solid rgba(230, 57, 70, 0.2);
      transition: all 0.3s ease;
    }

    .skill-badge:hover {
      background: rgba(230, 57, 70, 0.2);
      transform: translateY(-3px);
    }

    /* Projects Section */
    .projects-section {
      padding: 8rem 0;
      position: relative;
    }

    .project-card {
      background: rgba(22, 26, 29, 0.8);
      border-radius: 20px;
      overflow: hidden;
      transition: all 0.4s ease;
      height: 100%;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.05);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .project-card:hover {
      transform: translateY(-15px);
      box-shadow: 0 20px 40px rgba(230, 57, 70, 0.2);
      border-color: rgba(230, 57, 70, 0.3);
    }

    .project-img {
      height: 220px;
      object-fit: cover;
      transition: transform 0.5s ease;
      position: relative;
    }

    .project-card:hover .project-img {
      transform: scale(1.08);
    }

    .project-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(11, 9, 10, 0.8);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: all 0.4s ease;
    }

    .project-card:hover .project-overlay {
      opacity: 1;
    }

    .project-content {
      padding: 1.8rem;
    }

    .project-tech {
      display: flex;
      flex-wrap: wrap;
      margin-top: 1rem;
    }

    .tech-tag {
      background: rgba(230, 57, 70, 0.15);
      color: var(--primary-light);
      padding: 0.3rem 0.8rem;
      border-radius: 20px;
      font-size: 0.8rem;
      margin-right: 0.5rem;
      margin-bottom: 0.5rem;
    }

    /* Skills Section */
    .skills-section {
      padding: 8rem 0;
      background-color: var(--dark-gray);
    }

    .skill-category {
      margin-bottom: 3rem;
    }

    .skill-item {
      margin-bottom: 1.5rem;
    }

    .skill-info {
      display: flex;
      justify-content: between;
      margin-bottom: 0.5rem;
    }

    .skill-name {
      font-weight: 600;
    }

    .skill-percent {
      color: var(--primary);
      font-weight: 600;
    }

    .skill-bar {
      height: 10px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }

    .skill-progress {
      height: 100%;
      background: var(--gradient);
      border-radius: 10px;
      width: 0;
      transition: width 1.5s ease;
    }

    /* Contact Section */
    .contact-section {
      padding: 8rem 0;
      position: relative;
    }

    .contact-form {
      background: rgba(22, 26, 29, 0.8);
      border-radius: 20px;
      padding: 3rem;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.05);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    .form-control {
      background: rgba(43, 45, 66, 0.5);
      border: 1px solid rgba(255, 255, 255, 0.1);
      color: var(--light);
      border-radius: 10px;
      padding: 0.9rem 1.2rem;
      margin-bottom: 1.5rem;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      background: rgba(43, 45, 66, 0.7);
      border-color: var(--primary);
      box-shadow: 0 0 0 0.25rem rgba(230, 57, 70, 0.25);
      color: var(--light);
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.5);
    }

    .contact-info {
      padding-left: 2rem;
    }

    .contact-item {
      display: flex;
      align-items: center;
      margin-bottom: 2rem;
    }

    .contact-icon {
      width: 60px;
      height: 60px;
      background: var(--gradient);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin-right: 1.5rem;
      flex-shrink: 0;
    }

    .social-links {
      display: flex;
      margin-top: 2rem;
    }

    .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      background: rgba(43, 45, 66, 0.5);
      border-radius: 50%;
      color: var(--light);
      font-size: 1.2rem;
      transition: all 0.3s ease;
      margin-right: 15px;
    }

    .social-links a:hover {
      background: var(--gradient);
      transform: translateY(-5px);
      box-shadow: 0 8px 15px rgba(230, 57, 70, 0.4);
    }

    /* Footer */
    footer {
      background: rgba(11, 9, 10, 0.95);
      padding: 3rem 0;
      text-align: center;
      border-top: 1px solid rgba(230, 57, 70, 0.1);
    }

    /* Back to Top Button */
    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      background: var(--gradient);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      text-decoration: none;
      opacity: 0;
      transition: all 0.4s ease;
      z-index: 1000;
      box-shadow: 0 5px 15px rgba(230, 57, 70, 0.4);
    }

    .back-to-top.show {
      opacity: 1;
    }

    .back-to-top:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(230, 57, 70, 0.6);
    }

    /* Animations */
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.6s ease;
    }

    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Particle Background */
    .particles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .particle {
      position: absolute;
      background: var(--primary);
      border-radius: 50%;
      opacity: 0.3;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
      .hero-content h1 {
        font-size: 3rem;
      }
      
      .profile-img {
        width: 300px;
        height: 300px;
      }
      
      .section-title {
        font-size: 2.5rem;
      }
      
      .contact-info {
        padding-left: 0;
        margin-top: 3rem;
      }
    }

    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2.5rem;
      }
      
      .profile-img {
        width: 250px;
        height: 250px;
      }
      
      .section-title {
        font-size: 2rem;
      }
      
      .about-content, .contact-form {
        padding: 2rem;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">CHARLES Z.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero-section">
    <div class="hero-bg"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="hero-content">
            <h1>
              <span class="gradient-text">Charles Zingalaoa</span>
              <span style="font-size: 1.8rem; display: block; margin-top: 0.5rem;">Computer Science Student & Developer</span>
            </h1>
            <p>Passionate about creating innovative digital solutions. Specializing in web development, AI, and software engineering with a focus on user-centered design.</p>
            <div class="mt-4">
              <a href="#projects" class="btn btn-primary-custom me-3">View My Work</a>
              <a href="#contact" class="btn btn-outline-custom">Get In Touch</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <div class="profile-img-container">
         
            <img class="about-img img-fluid" src="{{ asset('IMG/charles.jpeg') }}" alt="Charles Zingalaoa Avatar">
            <div class="floating-elements">
              <div class="floating-element">
                <i class="fas fa-code"></i>
              </div>
              <div class="floating-element">
                <i class="fas fa-laptop-code"></i>
              </div>
              <div class="floating-element">
                <i class="fas fa-brain"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about-section">
    <div class="container">
      <h2 class="section-title">About Me</h2>
      
      <div class="about-content fade-in">
        <div class="row align-items-center">
          <div class="col-md-5 text-center mb-4 mb-md-0">
            <img class="about-img img-fluid" src="IMG/profile.jpg" alt="Charles Zingalaoa Avatar">

          </div>
          <div class="col-md-7">
            <h3 class="mb-3">Hi, I'm Sir Anthoine Charles G. Zingalaoa</h3>
            <p class="mb-4">I'm a passionate Computer Science student with a strong interest in web development, software engineering, and artificial intelligence. My goal is to become a skilled developer who can create efficient and innovative solutions to real-world problems.</p>
            
            <p class="mb-4">I'm especially fascinated by how AI can revolutionize industries, from healthcare to education, and I want to be part of that transformation. I make it a habit to read tech blogs and experiment with new frameworks in my free time.</p>
            
            <div class="mb-4">
              <h5 class="mb-3">Technical Skills</h5>
              <div>
                <span class="skill-badge">HTML/CSS</span>
                <span class="skill-badge">JavaScript</span>
                <span class="skill-badge">React</span>
                <span class="skill-badge">Python</span>
                <span class="skill-badge">Java</span>
                <span class="skill-badge">UI/UX Design</span>
                <span class="skill-badge">Machine Learning</span>
                <span class="skill-badge">Data Analysis</span>
              </div>
            </div>
            
            <a href="#contact" class="btn btn-primary-custom mt-2">Let's Connect</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section">
    <div class="container">
      <h2 class="section-title">My Projects</h2>
      
      <div class="row g-4">
        <div class="col-md-6 col-lg-4 fade-in">
          <div class="project-card">
            <div class="position-relative overflow-hidden">
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" class="project-img w-100" alt="Mix It Up">
              <div class="project-overlay">
                <a href="#" class="btn btn-primary-custom">View Project</a>
              </div>
            </div>
            <div class="project-content">
              <h4>Mix It Up</h4>
              <p>Your go-to app for creating fun, exciting, and delicious drinks for any party or social gathering.</p>
              <div class="project-tech">
                <span class="tech-tag">React</span>
                <span class="tech-tag">Node.js</span>
                <span class="tech-tag">MongoDB</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4 fade-in">
          <div class="project-card">
            <div class="position-relative overflow-hidden">
              <img src="https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1661&q=80" class="project-img w-100" alt="Brewtopia">
              <div class="project-overlay">
                <a href="#" class="btn btn-primary-custom">View Project</a>
              </div>
            </div>
            <div class="project-content">
              <h4>Brewtopia</h4>
              <p>Combining coffee culture with streetwear fashion in a unique brand experience.</p>
              <div class="project-tech">
                <span class="tech-tag">HTML/CSS</span>
                <span class="tech-tag">JavaScript</span>
                <span class="tech-tag">Bootstrap</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4 fade-in">
          <div class="project-card">
            <div class="position-relative overflow-hidden">
              <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" class="project-img w-100" alt="Academic Planner">
              <div class="project-overlay">
                <a href="#" class="btn btn-primary-custom">View Project</a>
              </div>
            </div>
            <div class="project-content">
              <h4>Academic Planner</h4>
              <p>A web application to help students organize their coursework and deadlines.</p>
              <div class="project-tech">
                <span class="tech-tag">Python</span>
                <span class="tech-tag">Django</span>
                <span class="tech-tag">PostgreSQL</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="skills-section">
    <div class="container">
      <h2 class="section-title">My Skills</h2>
      
      <div class="row">
        <div class="col-lg-6">
          <div class="skill-category">
            <h4 class="mb-4">Technical Skills</h4>
            
            <div class="skill-item">
              <div class="skill-info">
                <span class="skill-name">Web Development</span>
                <span class="skill-percent">90%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" data-width="90"></div>
              </div>
            </div>
            
            <div class="skill-item">
              <div class="skill-info">
                <span class="skill-name">JavaScript</span>
                <span class="skill-percent">85%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" data-width="85"></div>
              </div>
            </div>
            
            <div class="skill-item">
              <div class="skill-info">
                <span class="skill-name">Python</span>
                <span class="skill-percent">80%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" data-width="80"></div>
              </div>
            </div>
            
            <div class="skill-item">
              <div class="skill-info">
                <span class="skill-name">UI/UX Design</span>
                <span class="skill-percent">75%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" data-width="75"></div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="skill-category">
            <h4 class="mb-4">Professional Skills</h4>
            
            <div class="skill-item">
              <div class="skill-info">
                <span class="skill-name">Problem Solving</span>
                <span class="skill-percent">95%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" data-width="95"></div>
              </div>
            </div>
            
            <div class="skill-item">
              <div class="skill-info">
                <span class="skill-name">Teamwork</span>
                <span class="skill-percent">90%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" data-width="90"></div>
              </div>
            </div>
            
            <div class="skill-item">
              <div class="skill-info">
                <span class="skill-name">Communication</span>
                <span class="skill-percent">85%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" data-width="85"></div>
              </div>
            </div>
            
            <div class="skill-item">
              <div class="skill-info">
                <span class="skill-name">Project Management</span>
                <span class="skill-percent">80%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-progress" data-width="80"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact-section">
    <div class="container">
      <h2 class="section-title">Get In Touch</h2>
      
      <div class="row">
        <div class="col-lg-8">
          <div class="contact-form fade-in">
            <h4 class="mb-4">Send a Message</h4>
            <form>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
              </div>
              <input type="text" class="form-control" placeholder="Subject">
              <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
              <button type="submit" class="btn btn-primary-custom w-100">Send Message</button>
            </form>
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="contact-info">
            <h4 class="mb-4">Contact Details</h4>
            <p class="mb-4">Feel free to reach out to me through any of the following channels:</p>
            
            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-phone"></i>
              </div>
              <div>
                <h5>Phone</h5>
                <a href="tel:+369123456789" class="text-white text-decoration-none">+369 123 456 789</a>
              </div>
            </div>
            
            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div>
                <h5>Email</h5>
                <a href="mailto:CharlesZing@gmail.com" class="text-white text-decoration-none">CharlesZing@gmail.com</a>
              </div>
            </div>
            
            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div>
                <h5>Location</h5>
                <span>Angeles City, Philippines</span>
              </div>
            </div>
            
            <h5 class="mt-5 mb-3">Follow Me</h5>
            <div class="social-links">
              <a href="https://tiktok.com/Oinx.GG" target="_blank" rel="noopener">
                <i class="fab fa-tiktok"></i>
              </a>
              <a href="https://linkedin.com/in/Zingalaoa" target="_blank" rel="noopener">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://facebook.com/Zingalaoa" target="_blank" rel="noopener">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/Chrls.zing" target="_blank" rel="noopener">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://github.com" target="_blank" rel="noopener">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2025 Charles G. Zingalaoa | All Rights Reserved</p>
      <p class="text-secondary mt-2">charleszingalaoa@gmail.com</p>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <a href="#" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
  </a>

  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar-custom');
      const backToTop = document.querySelector('.back-to-top');
      
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
        backToTop.classList.add('show');
      } else {
        navbar.classList.remove('scrolled');
        backToTop.classList.remove('show');
      }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 80,
            behavior: 'smooth'
          });
        }
      });
    });

    // Fade-in animation on scroll
    const fadeElements = document.querySelectorAll('.fade-in');
    
    const fadeInOnScroll = function() {
      fadeElements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;
        
        if (elementTop < window.innerHeight - elementVisible) {
          element.classList.add('visible');
        }
      });
    };
    
    // Initialize fade elements
    fadeElements.forEach(element => {
      element.classList.add('fade-in');
    });
    
    window.addEventListener('scroll', fadeInOnScroll);
    // Initial check in case elements are already in view
    fadeInOnScroll();

    // Animate skill bars when they come into view
    const skillBars = document.querySelectorAll('.skill-progress');
    
    const animateSkillBars = function() {
      skillBars.forEach(bar => {
        const barTop = bar.getBoundingClientRect().top;
        const barVisible = 100;
        
        if (barTop < window.innerHeight - barVisible) {
          const width = bar.getAttribute('data-width');
          bar.style.width = width + '%';
        }
      });
    };
    
    window.addEventListener('scroll', animateSkillBars);
    // Initial check
    animateSkillBars();

    // Create floating particles
    function createParticles() {
      const particlesContainer = document.createElement('div');
      particlesContainer.className = 'particles';
      document.querySelector('.hero-section').appendChild(particlesContainer);
      
      for (let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        
        const size = Math.random() * 6 + 2;
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        const delay = Math.random() * 5;
        const duration = Math.random() * 10 + 10;
        
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${posX}%`;
        particle.style.top = `${posY}%`;
        particle.style.animation = `float ${duration}s ease-in-out ${delay}s infinite`;
        
        particlesContainer.appendChild(particle);
      }
    }
    
    createParticles();
  </script>
</body>
</html>