
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Moment.js -->
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <!-- Daterangepicker CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <title>Dashboard</title>
    <style>
        .dashboard-container {
            font-family: 'Segoe UI', sans-serif;
            padding: 20px;
            background-color: #f4f6f9;
            margin-left: 290px;

        }

        /* Breadcrumb */
        .breadcrumb-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .title {
            font-weight: 700;
            font-size: 30px;
            margin-bottom: 5px;
        }

        .breadcrumb {
            background: none;
            padding: 0;
            font-size: 17px;
            margin: 0;
        }

        .breadcrumb a {
            color: #007bff;
            text-decoration: none;
        }

        /* Date Range */
        .date-range {
            display: flex;
            align-items: center;
            border: 1px solid #dee2e6;
            padding: 6px 10px;
            border-radius: 6px;
            background: #fff;
            gap: 8px;
            /* max-width: 250px; */
        }

        .date-range .input-icon-addon {
            margin-right: 8px;
            color: #888;
            background: #f1f1f1;
            border: 1px solid #ccc;
            border-right: none;
            border-radius: 4px 0 0 4px;
        }

        .date-range i {
            font-size: 20px;
            /* Increase icon size */
            color: #333;
            /* Optional: color of icon */
        }

        .date-range input {
            border: none;
            outline: none;
            font-size: 14px;
            background: transparent;
        }

        .date-range input.form-control {
            font-size: 16px;
            /* Increase placeholder/input text size */
            height: 40px;
            /* Adjust input height */
            padding: 8px 12px;
        }

        .date-range .form-control {
            border-radius: 0 4px 4px 0;
        }

        .daterangepicker .ranges li.active,
        .daterangepicker .ranges li:hover {
            background-color: orange !important;
            color: white !important;
        }

        /* Banner */
        .welcome-banner {
            background: linear-gradient(to right, #ff5722, #ff7043);
            border-radius: 8px;
            padding: 25px 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            position: relative;
            overflow: hidden;
        }

        .welcome-banner h3 {
            margin: 0;
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
        }

        .welcome-banner p {
            margin: 5px 0 0;
            font-size: 14px;
        }

        .banner-buttons button {
            margin-left: 10px;
            font-weight: 500;
        }

        .dashboard-cards {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .dashboard-card {
            background: #fff;
            border-radius: 8px;
            padding: 16px;
            width: 250px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .icon {
            background-color: #1f2937;
            color: #fff;
            padding: 8px;
            border-radius: 6px;
            font-size: 18px;
        }

        .badge {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            color: #fff;
        }

        .badge.positive {
            background-color: #22c55e;
        }

        .badge.negative {
            background-color: #ef4444;
        }

        .dashboard-cards {
  display: flex;
  gap: 50px;
  flex-wrap: wrap;
}

.dashboard-card {
  background: #fff;
  border-radius: 10px;
  padding: 24px;
  width: 300px;
  height: 150px;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
}

.card-left {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.card-top {
  display: flex;
  align-items: center;
  gap: 10px;
}

.icon {
  background-color: #1f2937;
  color: #fff;
  padding: 10px;
  border-radius: 6px;
  font-size: 20px;
}

.badge {
  padding: 4px 10px;
  border-radius: 12px;
  font-size: 12px;
  font-weight: 600;
  color: #fff;
}

.badge.positive {
  background-color: #22c55e;
}

.badge.negative {
  background-color: #ef4444;
}

.dashboard-card h4 {
  font-size: 28px;
  font-weight: bold;
  margin: 12px 0 2px;
}

.dashboard-card p {
  color: #6b7280;
  font-size: 14px;
}

.bar-chart {
  display: flex;
  align-items: flex-end;
  gap: 6px;
  height: 60px;
  padding-top: 10px;
}

.bar-chart span {
  width: 8px;
  background: currentColor;
  border-radius: 4px;
}

.bar-chart.orange span:nth-child(1) { height: 20px; }
.bar-chart.orange span:nth-child(2) { height: 32px; }
.bar-chart.orange span:nth-child(3) { height: 26px; }
.bar-chart.orange span:nth-child(4) { height: 38px; }
.bar-chart.orange span:nth-child(5) { height: 22px; }
.bar-chart.orange { color: #f97316; }

.bar-chart.purple span:nth-child(1) { height: 18px; }
.bar-chart.purple span:nth-child(2) { height: 22px; }
.bar-chart.purple span:nth-child(3) { height: 34px; }
.bar-chart.purple span:nth-child(4) { height: 40px; }
.bar-chart.purple span:nth-child(5) { height: 30px; }
.bar-chart.purple { color: #8b5cf6; }

.bar-chart.blue span:nth-child(1) { height: 24px; }
.bar-chart.blue span:nth-child(2) { height: 30px; }
.bar-chart.blue span:nth-child(3) { height: 35px; }
.bar-chart.blue span:nth-child(4) { height: 32px; }
.bar-chart.blue span:nth-child(5) { height: 28px; }
.bar-chart.blue { color: #3b82f6; }

.bar-chart.green span:nth-child(1) { height: 20px; }
.bar-chart.green span:nth-child(2) { height: 24px; }
.bar-chart.green span:nth-child(3) { height: 36px; }
.bar-chart.green span:nth-child(4) { height: 32px; }
.bar-chart.green span:nth-child(5) { height: 30px; }
.bar-chart.green { color: #22c55e; }

    </style>

    <div class="dashboard-container">
        <!-- Breadcrumb and Date -->
        <div class="breadcrumb-header">
            <div>
                <h2 class="title">Dashboard</h2>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="ti ti-smart-home"></i></a></li>
                        <li class="breadcrumb-item">Superadmin</li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <div class="date-range position-relative">
                <i class="ti ti-calendar"></i>
                <!-- <span class="input-icon-addon"></span> -->
                <input type="text" class="form-control" id="daterange" placeholder="04/14/2025 - 04/20/2025">
            </div>
        </div>

        <!-- Welcome Banner -->
        <div class="welcome-banner">
            <div class="welcome-text">
                <h3>Welcome Back, Adrian</h3>
                <!-- <p>14 New Companies Subscribed Today !!!</p> -->
            </div>
            <div class="banner-buttons">
                <button class="btn btn-dark">Companies</button>
                <button class="btn btn-light">All Packages</button>
            </div>
        </div>

        <!-- Cards Row -->
        <div class="dashboard-cards">
            <!-- Card 1 -->
            <div class="dashboard-card">
                <div class="card-left">
                    <div class="card-top">
                        <div class="icon"><i class="ti ti-building"></i></div>
                        <span class="badge positive">+19.01%</span>
                    </div>
                    <h4>5468</h4>
                    <p>Total Companies</p>
                </div>
                <div class="bar-chart orange">
                    <span></span><span></span><span></span><span></span><span></span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="dashboard-card">
                <div class="card-left">
                    <div class="card-top">
                        <div class="icon"><i class="ti ti-train"></i></div>
                        <span class="badge negative">-12%</span>
                    </div>
                    <h4>4598</h4>
                    <p>Active Companies</p>
                </div>
                <div class="bar-chart purple">
                    <span></span><span></span><span></span><span></span><span></span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="dashboard-card">
                <div class="card-left">
                    <div class="card-top">
                        <div class="icon"><i class="ti ti-users"></i></div>
                        <span class="badge positive">+6%</span>
                    </div>
                    <h4>3698</h4>
                    <p>Total Subscribers</p>
                </div>
                <div class="bar-chart blue">
                    <span></span><span></span><span></span><span></span><span></span>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="dashboard-card">
                <div class="card-left">
                    <div class="card-top">
                        <div class="icon"><i class="ti ti-wallet"></i></div>
                        <span class="badge negative">-16%</span>
                    </div>
                    <h4>$89,878,58</h4>
                    <p>Total Earnings</p>
                </div>
                <div class="bar-chart green">
                    <span></span><span></span><span></span><span></span><span></span>
                </div>
            </div>
        </div>

    </div>

</body>

<script>
    $(function () {
        $('#daterange').daterangepicker({
            opens: 'left',
            autoUpdateInput: true,
            locale: {
                format: 'MM/DD/YYYY',
                cancelLabel: 'Clear'
            },
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()]
            }
        });
    });

