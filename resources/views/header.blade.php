<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SmartHR Top Header</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  

  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
    }

    .top-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 60px;
      padding: 0 20px;
      background-color: white;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
      position: fixed;
      top: 0;
      z-index: 999;
	  left: 260px;
	  right: 0
    }

    .left-section {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .left-section .back-arrow {
      font-size: 20px;
      color: #333;
      cursor: pointer;
    }

    .search-box {
      display: flex;
      align-items: center;
      background-color: #f1f3f5;
      padding: 6px 10px;
      border-radius: 6px;
      width: 250px;
    }

    .search-box input {
      border: none;
      background: transparent;
      outline: none;
      font-size: 14px;
      flex-grow: 1;
    }

    .search-shortcut {
      font-size: 10px;
      background: #e0e0e0;
      padding: 2px 6px;
      border-radius: 3px;
      margin-left: 5px;
    }

    .right-section {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .icon {
gap: 10px !important;
background-color: white !important;
color: black !important;
    }

    .notification-dot {
      position: absolute;
      top: -3px;
      right: -3px;
      width: 8px;
      height: 8px;
      background-color: red;
      border-radius: 50%;
    }

    .profile-pic {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background-color: #bbb;
      position: relative;
    }

    .profile-pic::after {
      content: '';
      position: absolute;
      right: 0;
      bottom: 0;
      width: 8px;
      height: 8px;
      background-color: #4caf50;
      border-radius: 50%;
      border: 2px solid white;
    }
  </style>
</head>
<body>

<div class="top-header">
  <div class="left-section">
    <div class="back-arrow">⟵</div>
    <div class="search-box">
      <input type="text" placeholder="Search in HRMS">
      <div class="search-shortcut">CTRL + /</div>
    </div>
  </div>

  <div class="right-section">
  <i class="bi bi-fullscreen icon"></i>
  <i class="bi bi-gear icon"></i>
  <i class="bi bi-envelope icon"></i>
  <i class="bi bi-bell icon"></i>
    <div class="profile-pic"></div>
  </div>
</div>

</body>
</html>
