<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | YouTube SEO Expert</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Base Styles */
        :root {
            --primary: #ff5757;
            --secondary: #4a4a4a;
            --light: #f8f8f8;
            --dark: #222222;
            --accent: #3a86ff;
            --success: #28a745;
            --danger: #dc3545;
            --warning: #ffc107;
            --info: #17a2b8;
            --gray: #6c757d;
            --sidebar-width: 250px;
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
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        ul {
            list-style: none;
        }
        
        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background-color: var(--dark);
            color: white;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            overflow-y: auto;
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .sidebar-header {
            padding: 1.5rem;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
        }
        
        .sidebar-logo span {
            color: var(--primary);
        }
        
        .sidebar-menu {
            padding: 1rem 0;
        }
        
        .sidebar-menu-item {
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .sidebar-menu-item:hover, .sidebar-menu-item.active {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-menu-item i {
            margin-right: 0.75rem;
            width: 20px;
            text-align: center;
        }
        
        .sidebar-menu-label {
            display: block;
        }
        
        .sidebar-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        
        .sidebar-user {
            display: flex;
            align-items: center;
        }
        
        .sidebar-user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.75rem;
            font-weight: bold;
        }
        
        .sidebar-user-info {
            flex: 1;
        }
        
        .sidebar-user-name {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        
        .sidebar-user-role {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.7);
        }
        
        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            overflow-x: hidden;
            transition: all 0.3s ease;
        }
        
        .topbar {
            background-color: white;
            height: 60px;
            display: flex;
            align-items: center;
            padding: 0 1.5rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .menu-toggle {
            font-size: 1.2rem;
            margin-right: 1rem;
            cursor: pointer;
            display: none;
        }
        
        .search-bar {
            flex: 1;
            margin: 0 1rem;
            position: relative;
        }
        
        .search-input {
            width: 100%;
            max-width: 400px;
            padding: 0.5rem 1rem 0.5rem 2.5rem;
            border: 1px solid #ddd;
            border-radius: 30px;
            font-size: 0.9rem;
        }
        
        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }
        
        .topbar-actions {
            display: flex;
            align-items: center;
        }
        
        .topbar-action {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 0.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .topbar-action:hover {
            background-color: var(--light);
        }
        
        .notification-badge {
            position: absolute;
            top: 0;
            right: 0;
            width: 18px;
            height: 18px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .content {
            padding: 1.5rem;
        }
        
        .section-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }
        
        /* Dashboard Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .stat-card-title {
            font-size: 0.9rem;
            color: var(--gray);
            font-weight: 500;
        }
        
        .stat-card-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: white;
        }
        
        .stat-card-icon.clients {
            background-color: var(--primary);
        }
        
        .stat-card-icon.revenue {
            background-color: var(--success);
        }
        
        .stat-card-icon.projects {
            background-color: var(--warning);
        }
        
        .stat-card-icon.growth {
            background-color: var(--info);
        }
        
        .stat-card-value {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .stat-card-change {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
        }
        
        .stat-card-change.positive {
            color: var(--success);
        }
        
        .stat-card-change.negative {
            color: var(--danger);
        }
        
        /* Data Tables */
        .data-section {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }
        
        .data-section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .data-section-title {
            font-size: 1.2rem;
            font-weight: 600;
        }
        
        .data-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .data-table th, .data-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        .data-table th {
            background-color: var(--light);
            font-weight: 600;
            color: var(--secondary);
        }
        
        .data-table tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.01);
        }
        
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            display: inline-block;
        }
        
        .status-badge.active {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success);
        }
        
        .status-badge.pending {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning);
        }
        
        .status-badge.completed {
            background-color: rgba(23, 162, 184, 0.1);
            color: var(--info);
        }
        
        .table-actions {
            display: flex;
            gap: 0.5rem;
        }
        
        .table-action {
            width: 30px;
            height: 30px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .table-action.view {
            background-color: rgba(23, 162, 184, 0.1);
            color: var(--info);
        }
        
        .table-action.edit {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning);
        }
        
        .table-action.delete {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger);
        }
        
        .table-action:hover {
            opacity: 0.8;
        }
        
        /* Chart Section */
        .chart-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .chart-container {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            height: 400px;
        }
        
        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .chart-title {
            font-size: 1.2rem;
            font-weight: 600;
        }
        
        .chart-period {
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 0.9rem;
            cursor: pointer;
        }
        
        .chart-content {
            height: calc(100% - 50px);
        }
        
        .chart-placeholder {
            width: 100%;
            height: 100%;
            background-color: var(--light);
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray);
        }
        
        /* Tasks Section */
        .task-list {
            list-style: none;
        }
        
        .task-item {
            display: flex;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
        }
        
        .task-check {
            width: 20px;
            height: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
            margin-right: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .task-check.checked {
            background-color: var(--primary);
            border-color: var(--primary);
            position: relative;
        }
        
        .task-check.checked::after {
            content: "✓";
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
        }
        
        .task-content {
            flex: 1;
        }
        
        .task-title {
            font-weight: 500;
            margin-bottom: 0.25rem;
        }
        
        .task-meta {
            font-size: 0.8rem;
            color: var(--gray);
        }
        
        .task-meta span {
            margin-right: 1rem;
        }
        
        .task-priority {
            padding: 0.15rem 0.5rem;
            border-radius: 10px;
            font-size: 0.7rem;
            font-weight: 500;
        }
        
        .task-priority.high {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger);
        }
        
        .task-priority.medium {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning);
        }
        
        .task-priority.low {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success);
        }
        
        /* Forms */
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }
        
        .form-text {
            font-size: 0.8rem;
            color: var(--gray);
            margin-top: 0.5rem;
        }
        
        .form-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-secondary {
            background-color: var(--light);
            color: var(--secondary);
        }
        
        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .chart-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.open {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .menu-toggle {
                display: block;
            }
            
            .stats-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <a href="#">Your<span>Name</span></a>
            </div>
        </div>
        <div class="sidebar-menu">
            <div class="sidebar-menu-item active">
                <i class="fas fa-th-large"></i>
                <span class="sidebar-menu-label">Dashboard</span>
            </div>
            <div class="sidebar-menu-item">
                <i class="fas fa-users"></i>
                <span class="sidebar-menu-label">Clients</span>
            </div>
            <div class="sidebar-menu-item">
                <i class="fas fa-tasks"></i>
                <span class="sidebar-menu-label">Projects</span>
            </div>
            <div class="sidebar-menu-item">
                <i class="fas fa-chart-line"></i>
                <span class="sidebar-menu-label">Analytics</span>
            </div>
            <div class="sidebar-menu-item">
                <i class="fas fa-tags"></i>
                <span class="sidebar-menu-label">Keywords</span>
            </div>
            <div class="sidebar-menu-item">
                <i class="fas fa-file-alt"></i>
                <span class="sidebar-menu-label">Reports</span>
            </div>
            <div class="sidebar-menu-item">
                <i class="fas fa-calendar"></i>
                <span class="sidebar-menu-label">Calendar</span>
            </div>
            <div class="sidebar-menu-item">
                <i class="fas fa-cog"></i>
                <span class="sidebar-menu-label">Settings</span>
            </div>
        </div>
        <div class="sidebar-footer">
            <div class="sidebar-user">
                <div class="sidebar-user-avatar">
                    YN
                </div>
                <div class="sidebar-user-info">
                    <div class="sidebar-user-name">Your Name</div>
                    <div class="sidebar-user-role">Administrator</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="topbar">
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <div class="search-bar">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search...">
            </div>
            <div class="topbar-actions">
                <div class="topbar-action">
                    <i class="fas fa-bell"></i>
                    <div class="notification-badge">3</div>
                </div>
                <div class="topbar-action">
                    <i class="fas fa-envelope"></i>
                    <div class="notification-badge">5</div>
                </div>
                <div class="topbar-action">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
            </div>
        </div>

        <div class="content">
            <h2 class="section-title">Dashboard Overview</h2>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-card-header">
                        <div class="stat-card-title">Total Clients</div>
                        <div class="stat-card-icon clients">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="stat-card-value">47</div>
                    <div class="stat-card-change positive">
                        <i class="fas fa-arrow-up"></i> 12% this month
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-header">
                        <div class="stat-card-title">Monthly Revenue</div>
                        <div class="stat-card-icon revenue">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                    <div class="stat-card-value">$24,350</div>
                    <div class="stat-card-change positive">
                        <i class="fas fa-arrow-up"></i> 8% this month
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-header">
                        <div class="stat-card-title">Active Projects</div>
                        <div class="stat-card-icon projects">
                            <i class="fas fa-tasks"></i>
                        </div>
                    </div>
                    <div class="stat-card-value">35</div>
                    <div class="stat-card-change positive">
                        <i class="fas fa-arrow-up"></i> 5% this month
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-header">
                        <div class="stat-card-title">Client Growth</div>
                        <div class="stat-card-icon growth">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                    <div class="stat-card-value">267%</div>
                    <div class="stat-card-change positive">
                        <i class="fas fa-arrow-up"></i> 15% this month
                    </div>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="chart-grid">
                <div class="chart-container">
                    <div class="chart-header">
                        <div class="chart-title">Revenue Overview</div>
                        <div class="chart-period">Last 30 Days</div>
                    </div>
                    <div class="chart-content">
                        <div class="chart-placeholder">
                            <div>Revenue Chart</div>
                        </div>
                    </div>
                </div>
                <div class="chart-container">
                    <div class="chart-header">
                        <div class="chart-title">Client Distribution</div>
                        <div class="chart-period">All Time</div>
                    </div>
                    <div class="chart-content">
                        <div class="chart-placeholder">
                            <div>Client Distribution Chart</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Client Table -->
            <div class="data-section">
                <div class="data-section-header">
                    <div class="data-section-title">Recent Clients</div>
                    <button class="btn btn-primary">Add New Client</button>
                </div>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Channel</th>
                            <th>Package</th>
                            <th>Status</th>
                            <th>Growth</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alex Johnson</td>
                            <td>Tech Review HQ</td>
                            <td>Growth Package</td>
                            <td><span class="status-badge active">Active</span></td>
                            <td>+247%</td>
                            <td>
                                <div class="table-actions">
                                    <div class="table-action view"><i class="fas fa-eye"></i></div>
                                    <div class="table-action edit"><i class="fas fa-edit"></i></div>
                                    <div class="table-action delete"><i class="fas fa-trash"></i></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sarah Williams</td>
                            <td>Cooking Master</td>
                            <td>Pro Package</td>
                            <td><span class="status-badge active">Active</span></td>
                            <td>+387%</td>
                            <td>
                                <div class="table-actions">
                                    <div class="table-action view"><i class="fas fa-eye"></i></div>
                                    <div class="table-action edit"><i class="fas fa-edit"></i></div>
                                    <div class="table-action delete"><i class="fas fa-trash"></i></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Michael Chen</td>
                            <td>EduPlatform</td>
                            <td>Growth Package</td>
                            <td><span class="status-badge pending">Pending</span></td>
                            <td>+267%</td>
                            <td>
                                <div class="table-actions">
                                    <div class="table-action view"><i class="fas fa-eye"></i></div>
                                    <div class="table-action edit"><i class="fas fa-edit"></i></div>
                                    <div class="table-action delete"><i class="fas fa-trash"></i></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Fitness Journey</td>
                            <td>Starter Package</td>
                            <td><span class="status-badge completed">Completed</span></td>
                            <td>+425%</td>
                            <td>
                                <div class="table-actions">
                                    <div class="table-action view"><i class="fas fa-eye"></i></div>
                                    <div class="table-action edit"><i class="fas fa-edit"></i></div>
                                    <div class="table-action delete"><i class="fas fa-trash"></i></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>David Wilson</td>
                            <td>Game Masters</td>
                            <td>Pro Package</td>
                            <td><span class="status-badge active">Active</span></td>
                            <td>+198%</td>
                            <td>
                                <div class="table-actions">
                                    <div class="table-action view"><i class="fas fa-eye"></i></div>
                                    <div class="table-action edit"><i class="fas fa-edit"></i></div>
                                    <div class="table-action delete"><i class="fas fa-trash"></i></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Task List -->
            <div class="chart-grid">
                <div class="data-section">
                    <div class="data-section-header">
                        <div class="data-section-title">Upcoming Tasks</div>
                        <button class="btn btn-primary">Add Task</button>
                    </div>
                    <ul class="task-list">
                        <li class="task-item">
                            <div class="task-check"></div>
                            <div class="task-content">
                                <div class="task-title">Keyword research for Tech Review HQ</div>
                                <div class="task-meta">
                                    <span><i class="fas fa-calendar"></i> Today</span>
                                    <span class="task-priority high">High Priority</span>
                                </div>
                            </div>
                        </li>
                        <li class="task-item">
                            <div class="task-check"></div>
                            <div class="task-content">
                                <div class="task-title">Create thumbnail designs for Cooking Master</div>
                                <div class="task-meta">
                                    <span><i class="fas fa-calendar"></i> Tomorrow</span>
                                    <span class="task-priority medium">Medium Priority</span>
                                </div>
                            </div>
                        </li>
                        <li class="task-item">
                            <div class="task-check checked"></div>
                            <div class="task-content">
                                <div class="task-title">Submit monthly report for EduPlatform</div>
                                <div class="task-meta">
                                    <span><i class="fas fa-calendar"></i> Yesterday</span>
                                    <span class="task-priority high">High Priority</span>
                                </div>
                            </div>
                        </li>
                        <li class="task-item">
                            <div class="task-check"></div>
                            <div class="task-content">
                                <div class="task-title">Optimize tags for Game Masters channel</div>
                                <div class="task-meta">
                                    <span><i class="fas fa-calendar"></i> Apr 28, 2025</span>
                                    <span class="task-priority medium">Medium Priority</span>
                                </div>
                            </div>
                        </li>
                        <li class="task-item">
                            <div class="task-check"></div>
                            <div class="task-content">
                                <div class="task-title">Review analytics for all active clients</div>
                                <div class="task-meta">
                                    <span><i class="fas fa-calendar"></i> Apr 30, 2025</span>
                                    <span class="task-priority high">High Priority</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Upcoming Events -->
                <div class="data-section">
                    <div class="data-section-header">
                        <div class="data-section-title">Upcoming Events</div>
                        <button class="btn btn-primary">Add Event</button>
                    </div>
                    <ul class="task-list">
                        <li class="task-item">
                            <div class="task-content">
                                <div class="task-title">Strategy Call with Alex Johnson</div>
                                <div class="task-meta">
                                    <span><i class="fas fa-calendar"></i> Today, 2:00 PM</span>
                                    <span><i class="fas fa-clock"></i> 45 minutes</span>
                                </div>
                            </div>
                        </li>
                        <li class="task-item">
                            <div class="task-content">
                                <div class="task-title">YouTube SEO Webinar</div>
                                <div class="task-meta">
                                    <span><i class="fas fa-calendar"></i> Apr 27, 2025, 10:00 AM</span>
                                    <span><i class="fas fa-clock"></i> 90 minutes</span>
                                </div>
                            </div>
                        </li>
                        <li class="task-item">
                            <div class="task-content">
                                <div class="task-title">New Client Onboarding: Beauty Secrets</div>
                                <div class="task-meta">
                                    <span><i class="fas fa-calendar"></i> Apr 28, 2025, 1:00 PM</span>
                                    <span><i class="fas fa-clock"></i> 60 minutes</span>
                                </div>
                            </div>
                        </li>
                        <li class="task-item">
                            <div class="task-content">
                                <div class="task-title">Monthly Team Meeting</div>
                                <div class="task-meta">
                                    <span><i class="fas fa-calendar"></i> Apr 30, 2025, 9:00 AM</span>
                                    <span><i class="fas fa-clock"></i> 120 minutes</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Performance Metrics -->
            <div class="data-section">
                <div class="data-section-header">
                    <div class="data-section-title">Client Performance</div>
                    <div class="chart-period">Last 30 Days</div>
                </div>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Views</th>
                            <th>Watch Time</th>
                            <th>Subscribers</th>
                            <th>CTR</th>
                            <th>Engagement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tech Review HQ</td>
                            <td>247,500 <span class="stat-card-change positive">+12%</span></td>
                            <td>14,230 hours <span class="stat-card-change positive">+8%</span></td>
                            <td>5,240 <span class="stat-card-change positive">+15%</span></td>
                            <td>6.8% <span class="stat-card-change positive">+1.2%</span></td>
                            <td>18.3% <span class="stat-card-change positive">+2.1%</span></td>
                        </tr>
                        <tr>
                            <td>Cooking Master</td>
                            <td>378,200 <span class="stat-card-change positive">+21%</span></td>
                            <td>24,780 hours <span class="stat-card-change positive">+18%</span></td>
                            <td>12,450 <span class="stat-card-change positive">+23%</span></td>
                            <td>7.2% <span class="stat-card-change positive">+1.5%</span></td>
                            <td>22.4% <span class="stat-card-change positive">+3.2%</span></td>
                        </tr>
                        <tr>
                            <td>EduPlatform</td>
                            <td>185,300 <span class="stat-card-change positive">+9%</span></td>
                            <td>12,850 hours <span class="stat-card-change positive">+7%</span></td>
                            <td>3,780 <span class="stat-card-change positive">+11%</span></td>
                            <td>5.9% <span class="stat-card-change positive">+0.8%</span></td>
                            <td>15.7% <span class="stat-card-change positive">+1.4%</span></td>
                        </tr>
                        <tr>
                            <td>Fitness Journey</td>
                            <td>142,700 <span class="stat-card-change positive">+32%</span></td>
                            <td>9,850 hours <span class="stat-card-change positive">+28%</span></td>
                            <td>4,120 <span class="stat-card-change positive">+47%</span></td>
                            <td>8.4% <span class="stat-card-change positive">+2.1%</span></td>
                            <td>24.8% <span class="stat-card-change positive">+5.3%</span></td>
                        </tr>
                        <tr>
                            <td>Game Masters</td>
                            <td>289,400 <span class="stat-card-change positive">+14%</span></td>
                            <td>19,750 hours <span class="stat-card-change positive">+11%</span></td>
                            <td>7,890 <span class="stat-card-change positive">+18%</span></td>
                            <td>6.5% <span class="stat-card-change positive">+1.1%</span></td>
                            <td>19.2% <span class="stat-card-change positive">+2.8%</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Quick Actions -->
            <div class="data-section">
                <div class="data-section-header">
                    <div class="data-section-title">Quick Actions</div>
                </div>
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-card-header">
                            <div class="stat-card-title">New Client</div>
                            <div class="stat-card-icon clients">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                        <p class="form-text">Add a new client to your roster</p>
                        <button class="btn btn-primary" style="margin-top: 1rem;">Start Onboarding</button>
                    </div>
                    <div class="stat-card">
                        <div class="stat-card-header">
                            <div class="stat-card-title">Generate Report</div>
                            <div class="stat-card-icon revenue">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                        <p class="form-text">Create detailed performance reports</p>
                        <button class="btn btn-primary" style="margin-top: 1rem;">Create Report</button>
                    </div>
                    <div class="stat-card">
                        <div class="stat-card-header">
                            <div class="stat-card-title">Keyword Research</div>
                            <div class="stat-card-icon projects">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                        <p class="form-text">Find trending keywords for your clients</p>
                        <button class="btn btn-primary" style="margin-top: 1rem;">Start Research</button>
                    </div>
                    <div class="stat-card">
                        <div class="stat-card-header">
                            <div class="stat-card-title">Schedule Meeting</div>
                            <div class="stat-card-icon growth">
                                <i class="fas fa-calendar-plus"></i>
                            </div>
                        </div>
                        <p class="form-text">Set up client or team meetings</p>
                        <button class="btn btn-primary" style="margin-top: 1rem;">Open Calendar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle sidebar
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('open');
        });
        
        // Task check functionality
        document.querySelectorAll('.task-check').forEach(check => {
            check.addEventListener('click', function() {
                this.classList.toggle('checked');
            });
        });
        
        // Responsive handling
        function handleResize() {
            if (window.innerWidth > 768) {
                document.querySelector('.sidebar').classList.remove('open');
            }
        }
        
        window.addEventListener('resize', handleResize);
        
        // Initialize any charts or dynamic content here
        // This would typically include actual chart implementations
        // using libraries like Chart.js, ApexCharts, etc.
        
        // Example of how you might initialize a chart (pseudocode)
        /*
        const revenueChart = new Chart(
            document.querySelector('.chart-content').getContext('2d'),
            {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Revenue',
                        data: [12000, 15000, 18000, 20000, 22000, 24350],
                        borderColor: '#ff5757',
                        backgroundColor: 'rgba(255, 87, 87, 0.1)',
                        tension: 0.3
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            }
        );
        */
    </script>
</body>
</html>