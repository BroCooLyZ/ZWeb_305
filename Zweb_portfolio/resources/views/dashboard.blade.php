<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard | Charles Zingalaoa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
      --glass: rgba(22, 26, 29, 0.7);
      --glass-border: rgba(255, 255, 255, 0.08);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, var(--dark) 0%, #1a1a2e 100%);
      color: var(--light);
      overflow-x: hidden;
      min-height: 100vh;
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-track {
      background: var(--dark-gray);
    }

    ::-webkit-scrollbar-thumb {
      background: var(--primary);
      border-radius: 4px;
    }

    /* Sidebar */
    .sidebar {
      background: var(--glass);
      backdrop-filter: blur(20px);
      width: 280px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      padding: 2rem 1.5rem;
      border-right: 1px solid var(--glass-border);
      z-index: 1000;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .sidebar-header {
      padding-bottom: 2rem;
      border-bottom: 1px solid var(--glass-border);
      margin-bottom: 2rem;
    }

    .sidebar-header h3 {
      font-weight: 900;
      font-size: 1.8rem;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      position: relative;
      display: inline-block;
    }

    .sidebar-header h3::after {
      content: '';
      position: absolute;
      width: 6px;
      height: 6px;
      background: var(--primary);
      border-radius: 50%;
      bottom: 8px;
      right: -12px;
    }

    .nav-link {
      color: var(--light);
      padding: 1rem 1.2rem;
      border-radius: 12px;
      margin-bottom: 0.5rem;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
    }

    .nav-link i {
      margin-right: 12px;
      width: 20px;
      text-align: center;
      font-size: 1.1rem;
      transition: transform 0.3s ease;
    }

    .nav-link:hover i, .nav-link.active i {
      transform: scale(1.1);
    }

    .nav-link:hover, .nav-link.active {
      background: var(--gradient);
      color: white;
      box-shadow: 0 8px 25px rgba(230, 57, 70, 0.3);
      transform: translateX(5px);
    }

    .nav-link::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 4px;
      background: var(--gradient);
      transform: scaleY(0);
      transition: transform 0.3s ease;
    }

    .nav-link.active::before {
      transform: scaleY(1);
    }

    .badge {
      padding: 0.4rem 0.8rem;
      border-radius: 20px;
      font-weight: 600;
      font-size: 0.75rem;
    }

    .badge-primary {
      background: rgba(255, 255, 255, 0.15);
      color: var(--primary-light);
    }

    /* Main Content */
    .main-content {
      margin-left: 280px;
      padding: 2rem;
      transition: all 0.4s ease;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2.5rem;
      padding: 1.5rem 0;
    }

    .header-content h1 {
      font-weight: 800;
      font-size: 2.2rem;
      margin-bottom: 0.5rem;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .header-content p {
      color: #aaa;
      margin-bottom: 0;
    }

    .user-info {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .user-avatar {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: var(--gradient);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      font-size: 1.2rem;
      box-shadow: 0 8px 20px rgba(230, 57, 70, 0.4);
      position: relative;
    }

    .user-avatar::after {
      content: '';
      position: absolute;
      width: 12px;
      height: 12px;
      background: #28a745;
      border: 2px solid var(--dark);
      border-radius: 50%;
      bottom: 2px;
      right: 2px;
    }

    /* Logout Button */
    .logout-btn {
      background: rgba(220, 53, 69, 0.2);
      color: #ff6b7a;
      border: 1px solid rgba(220, 53, 69, 0.3);
      padding: 10px 18px;
      border-radius: 12px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .logout-btn:hover {
      background: rgba(220, 53, 69, 0.3);
      color: #fff;
      border-color: #dc3545;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(220, 53, 69, 0.4);
    }

    .logout-btn-sidebar {
      width: 100%;
      justify-content: center;
      margin-top: 2rem;
      padding: 12px;
    }

    /* Cards */
    .card {
      background: var(--glass);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      border: 1px solid var(--glass-border);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
      margin-bottom: 2rem;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      overflow: hidden;
    }

    .card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: var(--gradient);
      opacity: 0;
      transition: opacity 0.3s ease;
      z-index: -1;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(230, 57, 70, 0.15);
      border-color: rgba(230, 57, 70, 0.2);
    }

    .card-header {
      background: rgba(43, 45, 66, 0.3);
      border-bottom: 1px solid var(--glass-border);
      padding: 1.5rem 2rem;
      border-radius: 20px 20px 0 0 !important;
    }

    .card-body {
      padding: 2rem;
    }

    /* Stats Cards */
    .stat-card {
      text-align: center;
      padding: 2rem 1.5rem;
      position: relative;
    }

    .stat-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: var(--gradient);
      transform: scaleX(0);
      transition: transform 0.4s ease;
    }

    .stat-card:hover::before {
      transform: scaleX(1);
    }

    .stat-icon {
      width: 70px;
      height: 70px;
      border-radius: 18px;
      background: var(--gradient);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
      font-size: 1.8rem;
      box-shadow: 0 8px 20px rgba(230, 57, 70, 0.3);
      transition: all 0.3s ease;
    }

    .stat-card:hover .stat-icon {
      transform: scale(1.1) rotate(5deg);
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 0.5rem;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .stat-label {
      color: #aaa;
      font-size: 0.95rem;
      font-weight: 500;
    }

    /* Post Management Styles */
    .post-card {
      background: rgba(43, 45, 66, 0.3);
      border-radius: 12px;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
      border: 1px solid var(--glass-border);
      transition: all 0.3s ease;
    }

    .post-card:hover {
      background: rgba(43, 45, 66, 0.5);
      transform: translateY(-5px);
    }

    .post-title {
      font-weight: 700;
      font-size: 1.25rem;
      margin-bottom: 0.5rem;
      color: white;
    }

    .post-date {
      font-size: 0.9rem;
      color: #aaa;
      margin-bottom: 0.5rem;
    }

    .post-content {
      color: #ccc;
      margin-bottom: 1rem;
      line-height: 1.5;
    }

    .post-actions {
      display: flex;
      gap: 0.75rem;
    }

    .action-btn {
      padding: 0.5rem 1rem;
      border-radius: 8px;
      font-weight: 600;
      font-size: 0.9rem;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
    }

    .edit-btn {
      background: rgba(32, 201, 151, 0.2);
      color: #20c997;
      border: 1px solid rgba(32, 201, 151, 0.3);
    }

    .edit-btn:hover {
      background: rgba(32, 201, 151, 0.3);
      color: white;
      border-color: #20c997;
    }

    .delete-btn {
      background: rgba(220, 53, 69, 0.2);
      color: #dc3545;
      border: 1px solid rgba(220, 53, 69, 0.3);
    }

    .delete-btn:hover {
      background: rgba(220, 53, 69, 0.3);
      color: white;
      border-color: #dc3545;
    }

    /* Alert */
    .alert {
      background: rgba(40, 167, 69, 0.15);
      border: 1px solid rgba(40, 167, 69, 0.3);
      color: #28a745;
      padding: 1rem 1.5rem;
      border-radius: 12px;
      margin-bottom: 2rem;
      display: flex;
      align-items: center;
      gap: 10px;
      animation: slideIn 0.3s ease;
    }

    .alert i {
      font-size: 1.2rem;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Checkbox */
    .form-check {
      margin-bottom: 1.5rem;
    }

    .form-check-input:checked {
      background-color: var(--primary);
      border-color: var(--primary);
    }

    /* Divider */
    .divider {
      height: 1px;
      background: var(--glass-border);
      margin: 2rem 0;
    }

    /* Buttons */
    .btn-primary-custom {
      background: var(--gradient);
      border: none;
      padding: 0.9rem 1.8rem;
      border-radius: 12px;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 8px 20px rgba(230, 57, 70, 0.3);
      position: relative;
      overflow: hidden;
    }

    .btn-primary-custom::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }

    .btn-primary-custom:hover::before {
      left: 100%;
    }

    .btn-primary-custom:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 25px rgba(230, 57, 70, 0.4);
    }

    .btn-outline-custom {
      border: 2px solid var(--primary);
      color: var(--primary);
      background: transparent;
      padding: 0.9rem 1.8rem;
      border-radius: 12px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-outline-custom:hover {
      background: var(--primary);
      color: white;
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(230, 57, 70, 0.3);
    }

    /* Toggle Sidebar */
    .sidebar-toggle {
      display: none;
      background: var(--gradient);
      border: none;
      width: 45px;
      height: 45px;
      border-radius: 12px;
      color: white;
      font-size: 1.2rem;
      box-shadow: 0 8px 20px rgba(230, 57, 70, 0.3);
      transition: all 0.3s ease;
    }

    .sidebar-toggle:hover {
      transform: scale(1.05);
    }

    /* Floating Background Elements */
    .floating-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      overflow: hidden;
    }

    .floating-element {
      position: absolute;
      border-radius: 50%;
      background: var(--gradient);
      opacity: 0.05;
      animation: float 20s infinite linear;
    }

    .floating-element:nth-child(1) {
      width: 300px;
      height: 300px;
      top: 10%;
      left: 5%;
      animation-delay: 0s;
    }

    .floating-element:nth-child(2) {
      width: 200px;
      height: 200px;
      top: 60%;
      left: 80%;
      animation-delay: 5s;
    }

    .floating-element:nth-child(3) {
      width: 150px;
      height: 150px;
      top: 20%;
      left: 85%;
      animation-delay: 10s;
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0) rotate(0deg);
      }
      33% {
        transform: translateY(-30px) rotate(120deg);
      }
      66% {
        transform: translateY(30px) rotate(240deg);
      }
    }

    /* Responsive */
    @media (max-width: 1200px) {
      .sidebar {
        width: 250px;
      }
      
      .main-content {
        margin-left: 250px;
      }
    }

    @media (max-width: 992px) {
      .sidebar {
        transform: translateX(-100%);
      }
      
      .sidebar.active {
        transform: translateX(0);
      }
      
      .main-content {
        margin-left: 0;
      }
      
      .sidebar-toggle {
        display: flex;
        align-items: center;
        justify-content: center;
      }
    }

    @media (max-width: 768px) {
      .main-content {
        padding: 1.5rem;
      }
      
      .header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
      }
      
      .user-info {
        width: 100%;
        justify-content: space-between;
      }
      
      .post-actions {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <!-- Floating Background Elements -->
  <div class="floating-bg">
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
  </div>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="sidebar-header">
      <h3>CHARLES Z.</h3>
      <p class="text-muted mb-0">Blog Dashboard</p>
    </div>
    
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <i class="fas fa-home"></i>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-user"></i>
          Profile
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-briefcase"></i>
          Projects
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-cog"></i>
          Settings
        </a>
      </li>
      <li class="nav-item mt-4">
        <a class="nav-link" href="portfolio.html">
          <i class="fas fa-external-link-alt"></i>
          View Portfolio
        </a>
      </li>
    </ul>

    <!-- Logout Button in Sidebar -->
    <form action="{{ route('logout') }}" method="POST" class="mt-auto">
      @csrf
      <button type="submit" class="logout-btn logout-btn-sidebar">
        <i class="fas fa-sign-out-alt"></i>
        Logout
      </button>
    </form>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header">
      <div class="d-flex align-items-center">
        <button class="sidebar-toggle me-3">
          <i class="fas fa-bars"></i>
        </button>
        <div class="header-content">
          <h1>Admin Dashboard</h1>
          <p>Manage your blog posts and content</p>
        </div>
      </div>
      
      <div class="user-info">
        <div class="user-avatar">CZ</div>
        <div class="d-none d-md-block">
          <div class="fw-bold">Charles Zingalaoa</div>
          <div class="text-muted small">Admin</div>
        </div>
        <!-- Logout Button in Header -->
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i>
            <span class="d-none d-md-inline">Logout</span>
          </button>
        </form>
      </div>
    </div>

    <!-- Create New Post Button -->
    <div class="row mb-4">
      <div class="col-12">
        <button class="btn btn-primary-custom">
          <i class="fas fa-plus me-2"></i> Create New Post
        </button>
      </div>
    </div>

    <!-- Success Alert -->
    <div class="alert">
      <i class="fas fa-check-circle"></i>
      <div>
        <strong>Post updated successfully!</strong>
      </div>
    </div>

    <!-- Divider -->
    <div class="divider"></div>

    <!-- Posts Section -->
    <div class="row">
      <div class="col-12">
        <h2 class="mb-4">Your Posts</h2>
        
        <!-- Post 1 -->
        <div class="post-card">
          <h3 class="post-title">1111</h3>
          <div class="post-date">2022</div>
          <div class="post-content">
            dassdsdassdsad<br>
            asddassdsasd
          </div>
          <div class="post-actions">
            <button class="action-btn edit-btn">
              <i class="fas fa-edit me-1"></i> Edit
            </button>
            <button class="action-btn delete-btn">
              <i class="fas fa-trash me-1"></i> Delete
            </button>
          </div>
        </div>

        <!-- Post 2 -->
        <div class="post-card">
          <h3 class="post-title">schigmghijm</h3>
          <div class="post-content">
            4564gd
          </div>
          <div class="post-actions">
            <button class="action-btn edit-btn">
              <i class="fas fa-edit me-1"></i> Edit
            </button>
            <button class="action-btn delete-btn">
              <i class="fas fa-trash me-1"></i> Delete
            </button>
          </div>
        </div>

        <!-- Post 3 -->
        <div class="post-card">
          <h3 class="post-title">aggaagag</h3>
          <div class="post-content">
            adgssgdf
          </div>
          <div class="post-actions">
            <button class="action-btn edit-btn">
              <i class="fas fa-edit me-1"></i> Edit
            </button>
            <button class="action-btn delete-btn">
              <i class="fas fa-trash me-1"></i> Delete
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Toggle sidebar on mobile
    document.querySelector('.sidebar-toggle').addEventListener('click', function() {
      document.querySelector('.sidebar').classList.toggle('active');
    });

    // Post card interactions
    const postCards = document.querySelectorAll('.post-card');
    postCards.forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-5px)';
      });
      
      card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
      });
    });

    // Edit and Delete button functionality
    document.querySelectorAll('.edit-btn').forEach(button => {
      button.addEventListener('click', function() {
        const postTitle = this.closest('.post-card').querySelector('.post-title').textContent;
        alert(`Editing post: "${postTitle}"`);
      });
    });

    document.querySelectorAll('.delete-btn').forEach(button => {
      button.addEventListener('click', function() {
        const postTitle = this.closest('.post-card').querySelector('.post-title').textContent;
        if (confirm(`Are you sure you want to delete "${postTitle}"?`)) {
          alert(`Post "${postTitle}" deleted successfully!`);
          this.closest('.post-card').remove();
        }
      });
    });

    // Create New Post button
    document.querySelector('.btn-primary-custom').addEventListener('click', function() {
      alert('Creating new post...');
    });
  </script>
</body>
</html>