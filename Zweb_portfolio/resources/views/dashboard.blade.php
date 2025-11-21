<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard | Charles Zingalaoa</title>
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

    /* Sidebar */
    .sidebar {
      background-color: var(--dark-gray);
      width: 260px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      padding: 1.5rem;
      box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
      border-right: 1px solid rgba(230, 57, 70, 0.1);
      z-index: 100;
      transition: all 0.3s ease;
    }

    .sidebar-header {
      padding-bottom: 1.5rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      margin-bottom: 1.5rem;
    }

    .sidebar-header h3 {
      font-weight: 800;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .nav-link {
      color: var(--light);
      padding: 0.8rem 1rem;
      border-radius: 10px;
      margin-bottom: 0.5rem;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
    }

    .nav-link i {
      margin-right: 10px;
      width: 20px;
      text-align: center;
    }

    .nav-link:hover, .nav-link.active {
      background: var(--gradient);
      color: white;
    }

    /* Main Content */
    .main-content {
      margin-left: 260px;
      padding: 2rem;
      transition: all 0.3s ease;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
      padding-bottom: 1rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .user-info {
      display: flex;
      align-items: center;
    }

    .user-avatar {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      background: var(--gradient);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      margin-right: 15px;
    }

    /* Cards */
    .card {
      background: rgba(22, 26, 29, 0.8);
      border-radius: 15px;
      border: 1px solid rgba(255, 255, 255, 0.05);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      margin-bottom: 1.5rem;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(230, 57, 70, 0.1);
      border-color: rgba(230, 57, 70, 0.2);
    }

    .card-header {
      background: rgba(43, 45, 66, 0.5);
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
      padding: 1.2rem 1.5rem;
      border-radius: 15px 15px 0 0 !important;
    }

    .card-body {
      padding: 1.5rem;
    }

    /* Stats Cards */
    .stat-card {
      text-align: center;
      padding: 1.5rem;
    }

    .stat-icon {
      width: 60px;
      height: 60px;
      border-radius: 15px;
      background: var(--gradient);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem;
      font-size: 1.5rem;
    }

    .stat-number {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .stat-label {
      color: #aaa;
      font-size: 0.9rem;
    }

    /* Progress Bars */
    .progress {
      height: 10px;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 10px;
      margin-bottom: 1rem;
    }

    .progress-bar {
      background: var(--gradient);
      border-radius: 10px;
    }

    /* Buttons */
    .btn-primary-custom {
      background: var(--gradient);
      border: none;
      padding: 0.7rem 1.5rem;
      border-radius: 10px;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(230, 57, 70, 0.3);
    }

    .btn-primary-custom:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(230, 57, 70, 0.4);
    }

    .btn-outline-custom {
      border: 2px solid var(--primary);
      color: var(--primary);
      background: transparent;
      padding: 0.7rem 1.5rem;
      border-radius: 10px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-outline-custom:hover {
      background: var(--primary);
      color: white;
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(230, 57, 70, 0.3);
    }

    /* Tables */
    .table {
      color: var(--light);
      border-collapse: separate;
      border-spacing: 0;
    }

    .table th {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      padding: 1rem;
      font-weight: 600;
    }

    .table td {
      padding: 1rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .table tbody tr:hover {
      background: rgba(230, 57, 70, 0.05);
    }

    /* Badges */
    .badge {
      padding: 0.4rem 0.8rem;
      border-radius: 20px;
      font-weight: 500;
    }

    .badge-primary {
      background: rgba(230, 57, 70, 0.2);
      color: var(--primary-light);
    }

    .badge-success {
      background: rgba(40, 167, 69, 0.2);
      color: #28a745;
    }

    .badge-warning {
      background: rgba(255, 193, 7, 0.2);
      color: #ffc107;
    }

    /* Activity List */
    .activity-item {
      display: flex;
      align-items: center;
      padding: 1rem 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .activity-item:last-child {
      border-bottom: none;
    }

    .activity-icon {
      width: 40px;
      height: 40px;
      border-radius: 10px;
      background: rgba(230, 57, 70, 0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      color: var(--primary);
    }

    .activity-content {
      flex: 1;
    }

    .activity-time {
      color: #aaa;
      font-size: 0.8rem;
    }

    /* Toggle Sidebar */
    .sidebar-toggle {
      display: none;
      background: var(--gradient);
      border: none;
      width: 40px;
      height: 40px;
      border-radius: 10px;
      color: white;
      font-size: 1.2rem;
    }

    /* Responsive */
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
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="sidebar-header">
      <h3>CHARLES Z.</h3>
      <p class="text-muted mb-0">Portfolio Dashboard</p>
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
          <i class="fas fa-chart-bar"></i>
          Analytics
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-envelope"></i>
          Messages
          <span class="badge badge-primary ms-auto">3</span>
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
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header">
      <div>
        <button class="sidebar-toggle me-3">
          <i class="fas fa-bars"></i>
        </button>
        <h4 class="d-inline-block mb-0">Dashboard</h4>
      </div>
      
      <div class="user-info">
        <div class="user-avatar">CZ</div>
        <div>
          <div class="fw-bold">Charles Zingalaoa</div>
          <div class="text-muted small">Admin</div>
        </div>
      </div>
    </div>

    <!-- Stats Row -->
    <div class="row">
      <div class="col-md-3">
        <div class="card stat-card">
          <div class="stat-icon">
            <i class="fas fa-eye"></i>
          </div>
          <div class="stat-number">1,248</div>
          <div class="stat-label">Portfolio Views</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card stat-card">
          <div class="stat-icon">
            <i class="fas fa-project-diagram"></i>
          </div>
          <div class="stat-number">12</div>
          <div class="stat-label">Projects</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card stat-card">
          <div class="stat-icon">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="stat-number">24</div>
          <div class="stat-label">Messages</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card stat-card">
          <div class="stat-icon">
            <i class="fas fa-download"></i>
          </div>
          <div class="stat-number">86</div>
          <div class="stat-label">Downloads</div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Recent Projects -->
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Recent Projects</h5>
            <a href="#" class="btn btn-primary-custom btn-sm">Add New</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Project Name</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mix It Up</td>
                    <td><span class="badge badge-success">Live</span></td>
                    <td>2 days ago</td>
                    <td>
                      <button class="btn btn-outline-custom btn-sm">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Brewtopia</td>
                    <td><span class="badge badge-success">Live</span></td>
                    <td>1 week ago</td>
                    <td>
                      <button class="btn btn-outline-custom btn-sm">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Academic Planner</td>
                    <td><span class="badge badge-warning">In Progress</span></td>
                    <td>3 days ago</td>
                    <td>
                      <button class="btn btn-outline-custom btn-sm">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Fitness Tracker</td>
                    <td><span class="badge badge-primary">Planning</span></td>
                    <td>2 weeks ago</td>
                    <td>
                      <button class="btn btn-outline-custom btn-sm">Edit</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Skills Progress -->
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Skills Progress</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <div class="d-flex justify-content-between mb-1">
                <span>Web Development</span>
                <span>90%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 90%"></div>
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex justify-content-between mb-1">
                <span>JavaScript</span>
                <span>85%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 85%"></div>
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex justify-content-between mb-1">
                <span>Python</span>
                <span>80%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 80%"></div>
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex justify-content-between mb-1">
                <span>UI/UX Design</span>
                <span>75%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 75%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-lg-4">
        <!-- Recent Activity -->
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Recent Activity</h5>
          </div>
          <div class="card-body">
            <div class="activity-item">
              <div class="activity-icon">
                <i class="fas fa-eye"></i>
              </div>
              <div class="activity-content">
                <div>Portfolio viewed by recruiter</div>
                <div class="activity-time">2 hours ago</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="activity-content">
                <div>New message from potential client</div>
                <div class="activity-time">5 hours ago</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-icon">
                <i class="fas fa-code"></i>
              </div>
              <div class="activity-content">
                <div>Updated Academic Planner project</div>
                <div class="activity-time">1 day ago</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-icon">
                <i class="fas fa-download"></i>
              </div>
              <div class="activity-content">
                <div>Resume downloaded 3 times</div>
                <div class="activity-time">2 days ago</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Quick Actions -->
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Quick Actions</h5>
          </div>
          <div class="card-body">
            <div class="d-grid gap-2">
              <button class="btn btn-primary-custom">
                <i class="fas fa-plus me-2"></i> Add New Project
              </button>
              <button class="btn btn-outline-custom">
                <i class="fas fa-edit me-2"></i> Edit Profile
              </button>
              <button class="btn btn-outline-custom">
                <i class="fas fa-chart-bar me-2"></i> View Analytics
              </button>
              <button class="btn btn-outline-custom">
                <i class="fas fa-file-export me-2"></i> Export Data
              </button>
            </div>
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

    // Simple chart animation for progress bars
    document.addEventListener('DOMContentLoaded', function() {
      const progressBars = document.querySelectorAll('.progress-bar');
      
      progressBars.forEach(bar => {
        const width = bar.style.width;
        bar.style.width = '0';
        
        setTimeout(() => {
          bar.style.width = width;
        }, 500);
      });
    });

    // Update current time
    function updateTime() {
      const now = new Date();
      const options = { 
        weekday: 'long', 
        year: 'numeric', 
        month: 'long', 
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
      };
      document.getElementById('current-time').textContent = now.toLocaleDateString('en-US', options);
    }
    
    // Update time immediately and then every minute
    updateTime();
    setInterval(updateTime, 60000);
  </script>
</body>
</html>