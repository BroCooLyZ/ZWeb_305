<!DOCTYPE html>
<html lang="en">
<head>
  <title>Charles Zingalaoa | Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
 
  <style>
    :root {
      --primary: #6c63ff;
      --secondary: #4a44b5;
      --dark: #121212;
      --light: #f8f9fa;
      --gray: #858585;
      --accent: #ff6b6b;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, var(--dark) 0%, #1a1a2e 50%, var(--dark) 100%);
      color: var(--light);
      overflow-x: hidden;
      min-height: 100vh;
    }

    .navbar-custom {
      background-color: rgba(18, 18, 18, 0.95);
      backdrop-filter: blur(10px);
      padding: 1rem 0;
      transition: all 0.3s ease;
      box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
    }

    .navbar-custom.scrolled {
      padding: 0.5rem 0;
    }

    .nav-link {
      color: var(--light) !important;
      font-weight: 500;
      margin: 0 0.5rem;
      position: relative;
      transition: color 0.3s ease;
    }

    .nav-link:hover {
      color: var(--primary) !important;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: var(--primary);
      transition: width 0.3s ease;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .hero-section {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding-top: 5rem;
    }

    .profile-img {
      width: 350px;
      height: 350px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid var(--primary);
      box-shadow: 0 10px 30px rgba(108, 99, 255, 0.3);
      transition: transform 0.5s ease;
    }

    .profile-img:hover {
      transform: scale(1.05);
    }

    .hero-content h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hero-content p {
      font-size: 1.2rem;
      line-height: 1.8;
      margin-bottom: 2rem;
      color: #ccc;
    }

    .btn-primary-custom {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      border: none;
      padding: 0.8rem 2rem;
      border-radius: 50px;
      font-weight: 500;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(108, 99, 255, 0.4);
    }

    .btn-primary-custom:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(108, 99, 255, 0.6);
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 3rem;
      text-align: center;
      position: relative;
    }

    .section-title::after {
      content: '';
      position: absolute;
      width: 80px;
      height: 4px;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      border-radius: 2px;
    }

    .about-section, .projects-section, .skills-section, .contact-section {
      padding: 6rem 0;
    }

    .carousel-item {
      padding: 2rem;
    }

    .carousel-item img {
      max-height: 400px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .carousel-control-prev, .carousel-control-next {
      width: 50px;
      height: 50px;
      background-color: var(--primary);
      border-radius: 50%;
      top: 50%;
      transform: translateY(-50%);
      opacity: 0.8;
    }

    .carousel-control-prev {
      left: 20px;
    }

    .carousel-control-next {
      right: 20px;
    }

    .project-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.3s ease;
      height: 100%;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .project-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }

    .project-img {
      height: 200px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .project-card:hover .project-img {
      transform: scale(1.05);
    }

    .skill-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      padding: 2rem;
      text-align: center;
      transition: all 0.3s ease;
      height: 100%;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .skill-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .skill-icon {
      font-size: 3rem;
      color: var(--primary);
      margin-bottom: 1rem;
    }

    .contact-form {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      padding: 2rem;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .form-control {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: var(--light);
      border-radius: 10px;
      padding: 0.8rem 1rem;
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.15);
      border-color: var(--primary);
      box-shadow: 0 0 0 0.25rem rgba(108, 99, 255, 0.25);
      color: var(--light);
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }

    .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      color: var(--light);
      font-size: 1.2rem;
      transition: all 0.3s ease;
      margin-right: 10px;
    }

    .social-links a:hover {
      background: var(--primary);
      transform: translateY(-5px);
    }

    footer {
      background: rgba(0, 0, 0, 0.8);
      padding: 2rem 0;
      text-align: center;
    }

    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      background: var(--primary);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      text-decoration: none;
      opacity: 0;
      transition: all 0.3s ease;
      z-index: 1000;
    }

    .back-to-top.show {
      opacity: 1;
    }

    .back-to-top:hover {
      background: var(--secondary);
      transform: translateY(-5px);
    }

    /* Animation classes */
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.6s ease;
    }

    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Responsive adjustments */
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
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#" style="color: var(--primary);">Charles Z.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
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
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 text-center">
          <img src="https://via.placeholder.com/350" class="profile-img" alt="Charles Zingalaoa">
        </div>
        <div class="col-md-7">
          <div class="hero-content">
            <h1>Charles Zingalaoa</h1>
            <p class="fs-5">I'm a passionate Computer Science student with a strong interest in web development, software engineering, and artificial intelligence. Welcome to my portfolio where I showcase my journey through technology and design.</p>
            <div class="mt-4">
              <a href="#projects" class="btn btn-primary-custom me-3">View My Work</a>
              <a href="#contact" class="btn btn-outline-light">Get In Touch</a>
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
      
      <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row align-items-center">
              <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/300" class="img-fluid rounded mb-3" alt="About Me">
              </div>
              <div class="col-md-8">
                <h3>Hi, I'm Sir Anthoine Charles G. Zingalaoa</h3>
                <p>I have a strong interest in web development, software engineering, and artificial intelligence. My goal is to become a skilled developer who can create efficient and innovative solutions to real-world problems. I enjoy learning new technologies and applying them to both academic and personal projects.</p>
                <p>I'm especially fascinated by how AI can revolutionize industries, from healthcare to education, and I want to be part of that transformation. I make it a habit to read tech blogs and experiment with new frameworks in my free time.</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row align-items-center">
              <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/300" class="img-fluid rounded mb-3" alt="Education">
              </div>
              <div class="col-md-8">
                <h3>Education</h3>
                <p>I'm currently pursuing my Bachelor's degree in Computer Science at City College of Angeles. Through my studies, I've developed a solid foundation in programming, system design, and software development methodologies.</p>
                <p>I've worked on various academic projects that have challenged me to think critically and collaborate effectively with others. These experiences have also improved my time management and problem-solving abilities.</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row align-items-center">
              <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/300" class="img-fluid rounded mb-3" alt="Hobbies">
              </div>
              <div class="col-md-8">
                <h3>Hobbies & Interests</h3>
                <p>Beyond my passion for technology, I'm an avid gamer, basketball player, and aspiring cook. Gaming enhances my problem-solving skills, sharpens my reflexes, and encourages strategic thinking.</p>
                <p>Basketball teaches me discipline, teamwork, and how to stay focused under pressure — both on and off the court. Cooking, on the other hand, is a creative outlet where I can experiment with flavors and express myself.</p>
              </div>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section">
    <div class="container">
      <h2 class="section-title">My Projects</h2>
      
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="project-card">
            <img src="https://via.placeholder.com/300x200" class="project-img w-100" alt="Project 1">
            <div class="p-3">
              <h4>Mix It Up</h4>
              <p>Your go-to app for creating fun, exciting, and delicious drinks for any party or social gathering.</p>
              <a href="#" class="btn btn-sm btn-primary-custom">View Details</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3">
          <div class="project-card">
            <img src="https://via.placeholder.com/300x200" class="project-img w-100" alt="Project 2">
            <div class="p-3">
              <h4>Brewtopia</h4>
              <p>Combining coffee culture with streetwear fashion in a unique brand experience.</p>
              <a href="#" class="btn btn-sm btn-primary-custom">View Details</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3">
          <div class="project-card">
            <img src="https://via.placeholder.com/300x200" class="project-img w-100" alt="Project 3">
            <div class="p-3">
              <h4>Academic Planner</h4>
              <p>A web application to help students organize their coursework and deadlines.</p>
              <a href="#" class="btn btn-sm btn-primary-custom">View Details</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3">
          <div class="project-card">
            <img src="https://via.placeholder.com/300x200" class="project-img w-100" alt="Project 4">
            <div class="p-3">
              <h4>Fitness Tracker</h4>
              <p>Mobile app to track workouts, nutrition, and fitness progress.</p>
              <a href="#" class="btn btn-sm btn-primary-custom">View Details</a>
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
      
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="skill-card">
            <div class="skill-icon">
              <i class="fas fa-code"></i>
            </div>
            <h4>Web Development</h4>
            <p>HTML, CSS, JavaScript, Bootstrap, React</p>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3">
          <div class="skill-card">
            <div class="skill-icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <h4>Programming</h4>
            <p>Python, Java, C++, Problem Solving</p>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3">
          <div class="skill-card">
            <div class="skill-icon">
              <i class="fas fa-palette"></i>
            </div>
            <h4>Design</h4>
            <p>UI/UX, Graphic Design, Branding</p>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3">
          <div class="skill-card">
            <div class="skill-icon">
              <i class="fas fa-brain"></i>
            </div>
            <h4>AI & ML</h4>
            <p>Machine Learning, Neural Networks, Data Analysis</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact-section">
    <div class="container">
      <h2 class="section-title">Get In Touch</h2>
      
      <div class="row g-5">
        <div class="col-md-6">
          <div class="contact-form">
            <h4 class="mb-4">Send a Message</h4>
            <form>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Your Email" required>
              </div>
              <div class="mb-3">
                <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary-custom w-100">Send Message</button>
            </form>
          </div>
        </div>
        
        <div class="col-md-6">
          <h4>Contact Details</h4>
          <p class="mb-4">Feel free to reach out to me through any of the following channels:</p>
          
          <ul class="list-unstyled mb-4">
            <li class="mb-2">
              <i class="fas fa-phone me-2"></i>
              <a href="tel:+369123456789" class="text-white text-decoration-none">+369 123 456 789</a>
            </li>
            <li class="mb-2">
              <i class="fas fa-envelope me-2"></i>
              <a href="mailto:CharlesZing@gmail.com" class="text-white text-decoration-none">CharlesZing@gmail.com</a>
            </li>
            <li class="mb-2">
              <i class="fas fa-map-marker-alt me-2"></i>
              <span>Angeles City, Philippines</span>
            </li>
          </ul>
          
          <h5 class="mb-3">Follow Me</h5>
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
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2025 Charles G. Zingalaoa | All Rights Reserved</p>
      <p class="text-secondary">charleszingalaoa@gmail.com</p>
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
  </script>
</body>
</html>