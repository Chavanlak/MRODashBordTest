<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Responsive Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  {{-- <style>
    body {
      background-color: #f8f9fa;
    }

    /* Sidebar */
    .sidebar {
      height: 100vh;
      background-color: #343a40;
      color: #fff;
      position: fixed;
      top: 0;
      left: 0;
      width: 240px;
      padding-top: 60px;
    }
    .sidebar a {
      color: #adb5bd;
      display: block;
      padding: 12px 20px;
      text-decoration: none;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #495057;
      color: #fff;
    }

    /* Content */
    .content {
      margin-left: 240px;
      padding: 20px;
      padding-top: 80px; /* space under navbar */
    }

    /* Responsive */
    @media (max-width: 768px) {
      .sidebar {
        display: none;
      }
      .content {
        margin-left: 0;
        padding-top: 80px;
      }
    }

    /* Card hover */
    .card {
      border-radius: 10px;
      transition: all 0.3s ease;
    }
    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }
  </style> --}}
  <style>
    body {
      background-color: #f8f9fa;
    }
  
    /* Sidebar */
    .sidebar {
      height: 100vh;
      background-color: #343a40;
      color: #fff;
      position: fixed;
      top: 0;
      left: 0;
      width: 240px;
      padding-top: 60px;
    }
  
    .sidebar a {
      color: #adb5bd;
      display: block;
      padding: 12px 20px;
      text-decoration: none;
    }
  
    .sidebar a:hover, .sidebar a.active {
      background-color: #495057;
      color: #fff;
    }
  
    /* Content */
    .content {
      margin-left: 240px;
      padding: 20px;
      padding-top: 80px;
    }
  
    /* ✅ ปรับขนาด offcanvas (Mobile Sidebar) */
    .offcanvas-start {
      width: 75%; /* จากเดิมเต็มจอ → เหลือ 75% ของหน้าจอ */
      max-width: 300px; /* จำกัดความกว้างสูงสุดไม่ให้ใหญ่เกิน */
      background-color: #343a40 !important;
    }
  
    .offcanvas-body a {
      color: #adb5bd;
      font-size: 1rem;
      text-decoration: none;
      display: block;
      padding: 10px 15px;
      border-radius: 8px;
    }
  
    .offcanvas-body a:hover {
      background-color: #495057;
      color: #fff;
    }
  
    /* Mobile layout */
    @media (max-width: 768px) {
      .sidebar {
        display: none;
      }
      .content {
        margin-left: 0;
        padding-top: 80px;
      }
    }
  
    /* Card hover */
    .card {
      border-radius: 10px;
      transition: all 0.3s ease;
    }
  
    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }
  </style>
  
</head>
<body>

  <!-- 🔹 Navbar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <!-- Mobile Sidebar Toggle -->
      <button class="btn btn-outline-light d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar">
        ☰
      </button>

      <!-- Logo -->
      <a class="navbar-brand ms-2" href="#">My Dashboard</a>

      <!-- User Menu -->
      <div class="dropdown ms-auto">
        <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          👤 User
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item " href="#">Login</a></li>
          <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- 🔹 Sidebar (Desktop) -->
  <div class="sidebar d-none d-md-block">
    <a href="#" class="active">🏠 Dashboard</a>
    <a href="#">👤 Members</a>
    <a href="#">📅 Bookings</a>
    <a href="#">📊 Reports</a>
    <a href="#">⚙️ Settings</a>
  </div>

  <!-- 🔹 Sidebar (Mobile Offcanvas) -->
  <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="offcanvasSidebar">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Menu</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <a href="#" class="d-block text-white mb-2">🏠 Dashboard</a>
      <a href="#" class="d-block text-white mb-2">👤 Members</a>
      <a href="#" class="d-block text-white mb-2">📅 Bookings</a>
      <a href="#" class="d-block text-white mb-2">📊 Reports</a>
      <a href="#" class="d-block text-white mb-2">⚙️ Settings</a>
    </div>
  </div>

  <!-- 🔹 Content -->
  <div class="content mt-4">
    <div class="container-fluid">
      <h4 class="mb-4">Repair List</h4>

      <!-- 🖥️ Table (Desktop/Tablet) -->
      <div class="table-responsive d-none d-md-block">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>JobID</th>
              <th>Name</th>
              <th>วันรับของ</th>
              <th>แจ้ง Supplier</th>
              <th>Supplier ดำเนินการซ่อมแล้ว</th>
              {{-- <th>Status Technicial</th> --}}
              <th>สถานะการปิดงาน</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>001</td>
              <td>John Doe</td>
              <td>2025-10-19</td>
              <td>2025-10-20</td>
              <td>2025-10-20</td>
              {{-- <td>กำลังดำเนินการ</td> --}}
              <td><span class="badge bg-success">ปิดงานแล้ว</span></td>
            </tr>
            <tr>
              <td>002</td>
              <td>Jane Smith</td>
              <td>2025-10-19</td>
              <td>2025-10-19</td>
              <td>2025-10-20</td>
              {{-- <td>ยังไม่ซ่อม</td> --}}
              <td><span class="badge bg-danger">ยังไม่ปิดงาน</span></td>
            </tr>
            <tr>
              <td>003</td>
              <td>Alex Johnson</td>
              <td>2025-10-19</td>
              <td>2025-10-18</td>
              <td>2025-10-20</td>
              {{-- <td>ยังไม่ซ่อม</td> --}}
              <td><span class="badge bg-danger">ยังไม่ปิดงาน</span></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- 📱 Card (Mobile) -->
      <div class="d-block d-md-none">
        <div class="card mb-3 shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-1">John Doe</h5>
            <p class="card-text mb-1"><strong>JobID:</strong> 001</p>
            <p class="card-text mb-1"><strong>สถานะ:</strong> <span class="badge bg-success">ปิดงานแล้ว</span></p>
            <p class="card-text"><small class="text-muted">Updated: 2025-10-20</small></p>
          </div>
        </div>

        <div class="card mb-3 shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-1">Jane Smith</h5>
            <p class="card-text mb-1"><strong>JobID:</strong> 002</p>
            <p class="card-text mb-1"><strong>สถานะ:</strong> <span class="badge bg-danger">ยังไม่ปิดงาน</span></p>
            <p class="card-text"><small class="text-muted">Updated: 2025-10-19</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
