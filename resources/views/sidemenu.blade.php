
    <style>
        /* Two Column Sidebar Main Container */
        .two-col-sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: 280px;
            background: #fff;
            z-index: 1041;
            display: flex;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            border-right: 1px solid #eee;
        }

        /* Left Mini Column */
        .sidebar-twocol {
            margin-left: 20px;
            display: flex;
            width: 80%;
        }

        /* .twocol-mini {
    width: 70px;
    background: #fff;
    position: relative;
    z-index: 1;
    border-right: 1px solid #eee;
} */

        .logo-small {
            padding: 15px;
            display: block;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        .logo-small img {
            width: 40px;
            height: 40px;
        }

        /* .sidebar-left {
    padding: 15px 0;
} */

        .nav-pills {
            gap: 5px;
        }

        .nav-link {
            width: 40px;
            height: 40px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            border-radius: 8px;
            margin: 0 auto 5px;
            transition: all 0.3s;
        }

        .nav-link:hover,
        .nav-link.active {
            background: #f8f9fa;
            color: #2c3e50;
        }

        .nav-link i {
            font-size: 20px;
        }

        /* Right Content Column */
        .sidebar-right {
            flex: 1;
            background: #fff;
            width: calc(280px - 70px);
            display: flex;
            flex-direction: column;
        }

        .sidebar-logo {
            padding: 20px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }

        .sidebar-logo img {
            max-height: 40px;
        }

        /* .sidebar-scroll {
    flex: 1;
    overflow-y: auto;
    padding: 20px;
} */

        /* Content Styling */
        .sidebar-scroll h6 {
            color: #2c3e50;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .avatar-lg {
            width: 60px;
            height: 60px;
        }

        .text-center.bg-light {
            background-color: #f8f9fa !important;
            border-radius: 8px;
        }

        /* Menu Items Styling */
        .tab-content ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-title {
            color: #6c757d;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 15px 0 5px;
            font-weight: 600;
        }

        .tab-content a {
            color: #495057;
            text-decoration: none;
            padding: 8px 15px;
            display: block;
            border-radius: 5px;
            font-size: 13px;
            transition: all 0.3s;
        }

        .tab-content a:hover {
            background: #f8f9fa;
            color: #2c3e50;
        }

        .tab-content a.active {
            background: #e9ecef;
            color: #2c3e50;
            font-weight: 500;
        }

        /* Submenu Styling */
        .submenu {
            position: relative;
        }

        .submenu>a {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-arrow {
            font-size: 12px;
            transition: transform 0.3s;
            color: #adb5bd;
        }

        .submenu ul {
            display: none;
            padding-left: 15px;
        }

        .submenu:hover ul {
            display: block;
        }

        .submenu ul li a {
            font-size: 12px;
            padding-left: 25px;
            color: #6c757d;
        }

        .submenu:hover>a .menu-arrow {
            transform: rotate(90deg);
        }

        /* Nested Submenus */
        .submenu-two ul {
            padding-left: 15px;
        }

        .submenu-two li a {
            padding-left: 35px !important;
            font-size: 12px;
        }

        /* Scrollbar Styling */
        .sidebar-scroll::-webkit-scrollbar {
            width: 4px;
        }

        .sidebar-scroll::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: #ddd;
            border-radius: 4px;
        }

        .sidebar-scroll::-webkit-scrollbar-thumb:hover {
            background: #ccc;
        }
    </style>

    @include('header');
    <div class="two-col-sidebar" id="two-col-sidebar">
        <div class="sidebar sidebar-twocol">
            <!-- <div class="twocol-mini"> -->
            <!-- <a href="index.html" class="logo-small">
						<img src="assets/img/logo-small.svg" alt="Logo">
					</a>
					<div class="sidebar-left slimscroll">
						<div class="nav flex-column align-items-center nav-pills" id="sidebar-tabs" role="tablist"
							aria-orientation="vertical">
							<a href="#" class="nav-link " title="Dashboard" data-bs-toggle="tab" data-bs-target="#dashboard">
								<i class="ti ti-smart-home"></i>
							</a>
							<a href="#" class="nav-link" title="Apps" data-bs-toggle="tab" data-bs-target="#application">
								<i class="ti ti-layout-grid-add"></i>
							</a>
							<a href="#" class="nav-link active" title="Super Admin" data-bs-toggle="tab" data-bs-target="#super-admin">
								<i class="ti ti-user-star"></i>
							</a>
							<a href="#" class="nav-link" title="Layout" data-bs-toggle="tab" data-bs-target="#layout">
								<i class="ti ti-layout-board-split"></i>
							</a>
							<a href="#" class="nav-link" title="Projects" data-bs-toggle="tab" data-bs-target="#projects">
								<i class="ti ti-users-group"></i>
							</a>
							<a href="#" class="nav-link" title="Crm" data-bs-toggle="tab" data-bs-target="#crm">
								<i class="ti ti-user-shield"></i>
							</a>
							<a href="#" class="nav-link" title="Hrm" data-bs-toggle="tab" data-bs-target="#hrm">
								<i class="ti ti-user"></i>
							</a>
							<a href="#" class="nav-link" title="Finance" data-bs-toggle="tab" data-bs-target="#finance">
								<i class="ti ti-shopping-cart-dollar"></i>
							</a>
							<a href="#" class="nav-link" title="Administration" data-bs-toggle="tab" data-bs-target="#administration">
								<i class="ti ti-cash"></i>
							</a>
							<a href="#" class="nav-link" title="Content" data-bs-toggle="tab" data-bs-target="#content">
								<i class="ti ti-license"></i>
							</a>
							<a href="#" class="nav-link" title="Pages" data-bs-toggle="tab" data-bs-target="#pages">
								<i class="ti ti-page-break"></i>
							</a>
							<a href="#" class="nav-link" title="Authentication" data-bs-toggle="tab"
								data-bs-target="#authentication">
								<i class="ti ti-lock-check"></i>
							</a>
							<a href="#" class="nav-link " title="UI Elements" data-bs-toggle="tab"
								data-bs-target="#ui-elements">
								<i class="ti ti-ux-circle"></i>
							</a>
							<a href="#" class="nav-link" title="Extras" data-bs-toggle="tab" data-bs-target="#extras">
								<i class="ti ti-vector-triangle"></i>
							</a>
						</div> -->
            <!-- </div>
				</div> -->
            <div class="sidebar-right">
                <div class="sidebar-logo mb-4">
                    <a href="{{ route('dashboard') }}" class="logo logo-normal">
                        <img src="assets/img/logo.svg" alt="Logo">
                    </a>
                    <a href="index.html" class="dark-logo">
                        <!-- <img src="assets/img/logo-white.svg" alt="Logo"> -->
                    </a>
                </div>
                <div class="sidebar-scroll">
                    <h6 class="mb-3 fw-bold fs-5">&nbsp;&nbsp;&nbsp;Welcome to <br> Bharat Distributor</h6>
                    <!-- <div class="text-center rounded bg-light p-3 mb-4">
							<div class="avatar avatar-lg online mb-3">
								<img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
							</div>
							<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
							<p class="fs-10">Admin</p>
						</div> -->
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- <div class="tab-pane fade" id="dashboard">
                            <ul>
                                <li class="menu-title"><span>MAIN MENU</span></li>
                                <li><a href="{{ route('dashboard') }}">Admin Dashboard</a></li>
                                <li><a href="employee-dashboard.html">Employee Dashboard</a></li>
                                <li><a href="deals-dashboard.html">Deals Dashboard</a></li>
                                <li><a href="leads-dashboard.html">Leads Dashboard</a></li>
                            </ul>
                        </div> -->
                        <!-- <div class="tab-pane fade" id="application">
                            <ul>
                                <li class="menu-title"><span>APPLICATION</span></li>
                                <li><a href="voice-call.html">Voice Call</a></li>
                                <li><a href="video-call.html">Video Call</a></li>
                                <li><a href="outgoing-call.html">Outgoing Call</a></li>
                                <li><a href="incoming-call.html">Incoming Call</a></li>
                                <li><a href="call-history.html">Call History</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="email.html">Email</a></li>
                                <li><a href="todo.html">To Do</a></li>
                                <li><a href="notes.html">Notes</a></li>
                                <li><a href="file-manager.html">File Manager</a></li>
                                <li><a href="kanban-view.html">Kanban</a></li>
                                <li><a href="invoices.html">Invoices</a></li>
                            </ul>
                        </div> -->
                        <div class="tab-pane fade show active" id="super-admin">
                            <ul>
                                <li class="menu-title"><span class="fw-bold fs-6">SUPER ADMIN</span></li>
                                <li><a href="{{ route('dashboard') }}" class="active active fw-bold fs-6">Dashboard</a>
                                </li>
                                <li><a href="{{ route('users.index') }}" class="active fw-bold fs-6">Seller / Driver </a></li>
                                <li><a href="subscription.html" class="active fw-bold fs-6">Subscriptions</a></li>
                                <li><a href="packages.html" class="active fw-bold fs-6">Packages</a></li>
                                <li><a href="domain.html" class="active fw-bold fs-6">Domain</a></li>
                                <li><a href="purchase-transaction.html" class="active fw-bold fs-6">Purchase
                                        Transaction</a></li>
                            </ul>
                        </div>
                        <!-- <div class="tab-pane fade" id="layout">
                            <ul>
                                <li class="menu-title"><span>LAYOUT</span></li>
                                <li><a href="layout-horizontal.html"><span>Horizontal</span></a></li>
                                <li><a href="layout-detached.html"><span>Detached</span></a></li>
                                <li><a href="layout-modern.html"><span>Modern</span></a></li>
                                <li><a href="layout-two-column.html"><span>Two Column </span></a></li>
                                <li><a href="layout-hovered.html"><span>Hovered</span></a></li>
                                <li><a href="layout-box.html"><span>Boxed</span></a></li>
                                <li><a href="layout-horizontal-single.html"><span>Horizontal Single</span></a></li>
                                <li><a href="layout-horizontal-overlay.html"><span>Horizontal Overlay</span></a></li>
                                <li><a href="layout-horizontal-box.html"><span>Horizontal Box</span></a></li>
                                <li><a href="layout-horizontal-sidemenu.html"><span>Menu Aside</span></a></li>
                                <li><a href="layout-vertical-transparent.html"><span>Transparent</span></a></li>
                                <li><a href="layout-without-header.html"><span>Without Header</span></a></li>
                                <li><a href="layout-rtl.html"><span>RTL</span></a></li>
                                <li><a href="layout-dark.html"><span>Dark</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="projects">
                            <ul>
                                <li class="menu-title"><span>PROJECTS</span></li>
                                <li><a href="clients-grid.html">Clients</a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Projects</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="projects-grid.html">Projects</a></li>
                                        <li><a href="tasks.html">Tasks</a></li>
                                        <li><a href="task-board.html">Task Board</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="crm">
                            <ul>
                                <li class="menu-title"><span>CRM</span></li>
                                <li><a href="contacts-grid.html"><span>Contacts</span></a></li>
                                <li><a href="companies-grid.html"><span>Companies</span></a></li>
                                <li><a href="deals-grid.html"><span>Deals</span></a></li>
                                <li><a href="leads-grid.html"><span>Leads</span></a></li>
                                <li><a href="pipeline.html"><span>Pipeline</span></a></li>
                                <li><a href="analytics.html"><span>Analytics</span></a></li>
                                <li><a href="activity.html"><span>Activities</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="hrm">
                            <ul>
                                <li class="menu-title"><span>HRM</span></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Employees</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="employees.html">Employee Lists</a></li>
                                        <li><a href="employees-grid.html">Employee Grid</a></li>
                                        <li><a href="employee-details.html">Employee Details</a></li>
                                        <li><a href="departments.html">Departments</a></li>
                                        <li><a href="designations.html">Designations</a></li>
                                        <li><a href="policy.html">Policies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Tickets</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="tickets.html">Tickets</a></li>
                                        <li><a href="ticket-details.html">Ticket Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="holidays.html"><span>Holidays</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Attendance</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);">Leaves<span
                                                    class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="leaves.html">Leaves (Admin)</a></li>
                                                <li><a href="leaves-employee.html">Leave (Employee)</a></li>
                                                <li><a href="leave-settings.html">Leave Settings</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="attendance-admin.html">Attendance (Admin)</a></li>
                                        <li><a href="attendance-employee.html">Attendance (Employee)</a></li>
                                        <li><a href="timesheets.html">Timesheets</a></li>
                                        <li><a href="schedule-timing.html">Shift & Schedule</a></li>
                                        <li><a href="overtime.html">Overtime</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Performance</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="performance-indicator.html">Performance Indicator</a></li>
                                        <li><a href="performance-review.html">Performance Review</a></li>
                                        <li><a href="performance-appraisal.html">Performance Appraisal</a></li>
                                        <li><a href="goal-tracking.html">Goal List</a></li>
                                        <li><a href="goal-type.html">Goal Type</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Training</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="training.html">Training List</a></li>
                                        <li><a href="trainers.html">Trainers</a></li>
                                        <li><a href="training-type.html">Training Type</a></li>
                                    </ul>
                                </li>
                                <li><a href="promotion.html"><span>Promotion</span></a></li>
                                <li><a href="resignation.html"><span>Resignation</span></a></li>
                                <li><a href="termination.html"><span>Termination</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="finance">
                            <ul>
                                <li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Sales</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="estimates.html">Estimates</a></li>
                                        <li><a href="invoices.html">Invoices</a></li>
                                        <li><a href="payments.html">Payments</a></li>
                                        <li><a href="expenses.html">Expenses</a></li>
                                        <li><a href="provident-fund.html">Provident Fund</a></li>
                                        <li><a href="taxes.html">Taxes</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Accounting</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="categories.html">Categories</a></li>
                                        <li><a href="budgets.html">Budgets</a></li>
                                        <li><a href="budget-expenses.html">Budget Expenses</a></li>
                                        <li><a href="budget-revenues.html">Budget Revenues</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Payroll</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="employee-salary.html">Employee Salary</a></li>
                                        <li><a href="payslip.html">Payslip</a></li>
                                        <li><a href="payroll.html">Payroll Items</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="administration">
                            <ul>
                                <li class="menu-title"><span>ADMINISTRATION</span></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Assets</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="assets.html">Assets</a></li>
                                        <li><a href="asset-categories.html">Asset Categories</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Help & Supports</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="knowledgebase.html">Knowledge Base</a></li>
                                        <li><a href="activity.html">Activities</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>User Management</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="users.html">Users</a></li>
                                        <li><a href="roles-permissions.html">Roles & Permissions</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Reports</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="expenses-report.html">Expense Report</a></li>
                                        <li><a href="invoice-report.html">Invoice Report</a></li>
                                        <li><a href="payment-report.html">Payment Report</a></li>
                                        <li><a href="project-report.html">Project Report</a></li>
                                        <li><a href="task-report.html">Task Report</a></li>
                                        <li><a href="user-report.html">User Report</a></li>
                                        <li><a href="employee-report.html">Employee Report</a></li>
                                        <li><a href="payslip-report.html">Payslip Report</a></li>
                                        <li><a href="attendance-report.html">Attendance Report</a></li>
                                        <li><a href="leave-report.html">Leave Report</a></li>
                                        <li><a href="daily-report.html">Daily Report</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        General Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="profile-settings.html">Profile</a></li>
                                        <li><a href="security-settings.html">Security</a></li>
                                        <li><a href="notification-settings.html">Notifications</a></li>
                                        <li><a href="connected-apps.html">Connected Apps</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        Website Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="bussiness-settings.html">Business Settings</a></li>
                                        <li><a href="seo-settings.html">SEO Settings</a></li>
                                        <li><a href="localization-settings.html">Localization</a></li>
                                        <li><a href="prefixes.html">Prefixes</a></li>
                                        <li><a href="preferences.html">Preferences</a></li>
                                        <li><a href="performance-appraisal.html">Appearance</a></li>
                                        <li><a href="language.html">Language</a></li>
                                        <li><a href="authentication-settings.html">Authentication</a></li>
                                        <li><a href="ai-settings.html">AI Settings</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">App Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="salary-settings.html">Salary Settings</a></li>
                                        <li><a href="approval-settings.html">Approval Settings</a></li>
                                        <li><a href="invoice-settings.html">Invoice Settings</a></li>
                                        <li><a href="leave-type.html">Leave Type</a></li>
                                        <li><a href="custom-fields.html">Custom Fields</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        System Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="email-settings.html">Email Settings</a></li>
                                        <li><a href="email-template.html">Email Templates</a></li>
                                        <li><a href="sms-settings.html">SMS Settings</a></li>
                                        <li><a href="sms-template.html">SMS Templates</a></li>
                                        <li><a href="otp-settings.html">OTP</a></li>
                                        <li><a href="gdpr.html">GDPR Cookies</a></li>
                                        <li><a href="maintenance-mode.html">Maintenance Mode</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        Financial Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="payment-gateways.html">Payment Gateways</a></li>
                                        <li><a href="tax-rates.html">Tax Rate</a></li>
                                        <li><a href="currencies.html">Currencies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">Other Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="custom-css.html">Custom CSS</a></li>
                                        <li><a href="custom-js.html">Custom JS</a></li>
                                        <li><a href="cronjob.html">Cronjob</a></li>
                                        <li><a href="storage-settings.html">Storage</a></li>
                                        <li><a href="ban-ip-address.html">Ban IP Address</a></li>
                                        <li><a href="backup.html">Backup</a></li>
                                        <li><a href="clear-cache.html">Clear Cache</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="content">
                            <ul>
                                <li class="menu-title"><span>CONTENT</span></li>
                                <li><a href="pages.html">Pages</a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        Blogs
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="blogs.html">All Blogs</a></li>
                                        <li><a href="blog-categories.html">Categories</a></li>
                                        <li><a href="blog-comments.html">Comments</a></li>
                                        <li><a href="blog-tags.html">Blog Tags</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        Locations
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="countries.html">Countries</a></li>
                                        <li><a href="states.html">States</a></li>
                                        <li><a href="cities.html">Cities</a></li>
                                    </ul>
                                </li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="faq.html">FAQ’S</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pages">
                            <ul>
                                <li class="menu-title"><span>PAGES</span></li>
                                <li><a href="starter.html"><span>Starter</span></a></li>
                                <li><a href="profile.html"><span>Profile</span></a></li>
                                <li><a href="gallery.html"><span>Gallery</span></a></li>
                                <li><a href="search-result.html"><span>Search Results</span></a></li>
                                <li><a href="timeline.html"><span>Timeline</span></a></li>
                                <li><a href="pricing.html"><span>Pricing</span></a></li>
                                <li><a href="coming-soon.html"><span>Coming Soon</span></a></li>
                                <li><a href="under-maintenance.html"><span>Under Maintenance</span></a></li>
                                <li><a href="under-construction.html"><span>Under Construction</span></a></li>
                                <li><a href="api-keys.html"><span>API Keys</span></a></li>
                                <li><a href="privacy-policy.html"><span>Privacy Policy</span></a></li>
                                <li><a href="terms-condition.html"><span>Terms & Conditions</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="authentication">
                            <ul>
                                <li class="menu-title"><span>AUTHENTICATION</span></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        Login<span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="login.html">Cover</a></li>
                                        <li><a href="login-2.html">Illustration</a></li>
                                        <li><a href="login-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        Register<span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="register.html">Cover</a></li>
                                        <li><a href="register-2.html">Illustration</a></li>
                                        <li><a href="register-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        Forgot Password<span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="forgot-password.html">Cover</a></li>
                                        <li><a href="forgot-password-2.html">Illustration</a></li>
                                        <li><a href="forgot-password-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        Reset Password<span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="reset-password.html">Cover</a></li>
                                        <li><a href="reset-password-2.html">Illustration</a></li>
                                        <li><a href="reset-password-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        Email Verification<span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="email-verification.html">Cover</a></li>
                                        <li><a href="email-verification-2.html">Illustration</a></li>
                                        <li><a href="email-verification-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        2 Step Verification<span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="two-step-verification.html">Cover</a></li>
                                        <li><a href="two-step-verification-2.html">Illustration</a></li>
                                        <li><a href="two-step-verification-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                                <li><a href="error-404.html">404 Error</a></li>
                                <li><a href="error-500.html">500 Error</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="ui-elements">
                            <ul>
                                <li class="menu-title"><span>UI INTERFACE</span></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">Base UI<span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="ui-alerts.html">Alerts</a></li>
                                        <li><a href="ui-accordion.html">Accordion</a></li>
                                        <li><a href="ui-avatar.html">Avatar</a></li>
                                        <li><a href="ui-badges.html">Badges</a></li>
                                        <li><a href="ui-borders.html">Border</a></li>
                                        <li><a href="ui-buttons.html">Buttons</a></li>
                                        <li><a href="ui-buttons-group.html">Button Group</a></li>
                                        <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                        <li><a href="ui-cards.html">Card</a></li>
                                        <li><a href="ui-carousel.html">Carousel</a></li>
                                        <li><a href="ui-colors.html">Colors</a></li>
                                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                        <li><a href="ui-grid.html">Grid</a></li>
                                        <li><a href="ui-images.html">Images</a></li>
                                        <li><a href="ui-lightbox.html">Lightbox</a></li>
                                        <li><a href="ui-media.html">Media</a></li>
                                        <li><a href="ui-modals.html">Modals</a></li>
                                        <li><a href="ui-offcanvas.html">Offcanvas</a></li>
                                        <li><a href="ui-pagination.html">Pagination</a></li>
                                        <li><a href="ui-popovers.html">Popovers</a></li>
                                        <li><a href="ui-progress.html">Progress</a></li>
                                        <li><a href="ui-placeholders.html">Placeholders</a></li>
                                        <li><a href="ui-spinner.html">Spinner</a></li>
                                        <li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
                                        <li><a href="ui-nav-tabs.html">Tabs</a></li>
                                        <li><a href="ui-toasts.html">Toasts</a></li>
                                        <li><a href="ui-tooltips.html">Tooltips</a></li>
                                        <li><a href="ui-typography.html">Typography</a></li>
                                        <li><a href="ui-video.html">Video</a></li>
                                        <li><a href="ui-sortable.html">Sortable</a></li>
                                        <li><a href="ui-swiperjs.html">Swiperjs</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> Advanced UI <span class="menu-arrow"></span> </a>
                                    <ul>
                                        <li><a href="ui-ribbon.html">Ribbon</a></li>
                                        <li><a href="ui-clipboard.html">Clipboard</a></li>
                                        <li><a href="ui-drag-drop.html">Drag & Drop</a></li>
                                        <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                        <li><a href="ui-rating.html">Rating</a></li>
                                        <li><a href="ui-text-editor.html">Text Editor</a></li>
                                        <li><a href="ui-counter.html">Counter</a></li>
                                        <li><a href="ui-scrollbar.html">Scrollbar</a></li>
                                        <li><a href="ui-stickynote.html">Sticky Note</a></li>
                                        <li><a href="ui-timeline.html">Timeline</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> Forms <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);">Form Elements<span
                                                    class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="form-basic-inputs.html">Basic Inputs</a></li>
                                                <li><a href="form-checkbox-radios.html">Checkbox & Radios</a></li>
                                                <li><a href="form-input-groups.html">Input Groups</a></li>
                                                <li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
                                                <li><a href="form-select.html">Form Select</a></li>
                                                <li><a href="form-mask.html">Input Masks</a></li>
                                                <li><a href="form-fileupload.html">File Uploads</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);">Layouts<span
                                                    class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="form-horizontal.html">Horizontal Form</a></li>
                                                <li><a href="form-vertical.html">Vertical Form</a></li>
                                                <li><a href="form-floating-labels.html">Floating Labels</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-select2.html">Select2</a></li>
                                        <li><a href="form-wizard.html">Form Wizard</a></li>
                                        <li><a href="form-pickers.html">Form Picker</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">Tables <span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="tables-basic.html">Basic Tables </a></li>
                                        <li><a href="data-tables.html">Data Table </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">Charts<span class="menu-arrow"></span> </a>
                                    <ul>
                                        <li><a href="chart-apex.html">Apex Charts</a></li>
                                        <li><a href="chart-c3.html">Chart C3</a></li>
                                        <li><a href="chart-js.html">Chart Js</a></li>
                                        <li><a href="chart-morris.html">Morris Charts</a></li>
                                        <li><a href="chart-flot.html">Flot Charts</a></li>
                                        <li><a href="chart-peity.html">Peity Charts</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">Icons<span class="menu-arrow"></span> </a>
                                    <ul>
                                        <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                        <li><a href="icon-tabler.html">Tabler Icons</a></li>
                                        <li><a href="icon-bootstrap.html">Bootstrap Icons</a></li>
                                        <li><a href="icon-remix.html">Remix Icons</a></li>
                                        <li><a href="icon-feather.html">Feather Icons</a></li>
                                        <li><a href="icon-ionic.html">Ionic Icons</a></li>
                                        <li><a href="icon-material.html">Material Icons</a></li>
                                        <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                                        <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                                        <li><a href="icon-themify.html">Themify Icons</a></li>
                                        <li><a href="icon-weather.html">Weather Icons</a></li>
                                        <li><a href="icon-typicon.html">Typicon Icons</a></li>
                                        <li><a href="icon-flag.html">Flag Icons</a></li>

                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-table-plus"></i>
                                        <span>Maps</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="maps-vector.html">Vector</a>
                                        </li>
                                        <li>
                                            <a href="maps-leaflet.html">Leaflet</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="extras">
                            <ul>
                                <li class="menu-title"><span>EXTRAS</span></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Change Log</a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Multi Level</span><span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Multilevel 1</a></li>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);">Multilevel 2<span
                                                    class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Multilevel 2.1</a></li>
                                                <li class="submenu submenu-two submenu-three">
                                                    <a href="javascript:void(0);">Multilevel 2.2<span
                                                            class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                                    <ul>
                                                        <li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
                                                        <li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);">Multilevel 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

