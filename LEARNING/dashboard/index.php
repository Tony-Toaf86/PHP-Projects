<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar Navigation -->
        <div class="sidebar">
            <div class="logo">
                <h2>Admin Panel</h2>
            </div>
            <nav>
                <ul>
                    <li class="active">
                        <a href="#dashboard">
                            <i class="icon-dashboard"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#users">
                            <i class="icon-users"></i>
                            User Management
                        </a>
                    </li>
                    <li>
                        <a href="#analytics">
                            <i class="icon-analytics"></i>
                            Analytics
                        </a>
                    </li>
                    <li>
                        <a href="#settings">
                            <i class="icon-settings"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content Area -->
        <main class="main-content">
            <!-- Header -->
            <header>
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <button>
                        <i class="icon-search"></i>
                    </button>
                </div>
                <div class="user-profile">
                    <div class="notifications">
                        <i class="icon-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="profile-pic">
                        <img src="profile.jpg" alt="User Profile">
                    </div>
                </div>
            </header>

            <!-- Dashboard Overview -->
            <section class="dashboard-overview">
                <div class="card total-revenue">
                    <h3>Total Revenue</h3>
                    <div class="card-content">
                        <span class="amount">$245,678</span>
                        <span class="percentage-change positive">+12.5%</span>
                    </div>
                </div>
                <div class="card active-users">
                    <h3>Active Users</h3>
                    <div class="card-content">
                        <span class="amount">4,567</span>
                        <span class="percentage-change negative">-3.2%</span>
                    </div>
                </div>
                <div class="card new-orders">
                    <h3>New Orders</h3>
                    <div class="card-content">
                        <span class="amount">289</span>
                        <span class="percentage-change positive">+7.8%</span>
                    </div>
                </div>
            </section>

            <!-- Charts and Tables -->
            <section class="data-visualization">
                <div class="chart-container">
                    <h3>Monthly Sales</h3>
                    <div id="sales-chart"></div>
                </div>
                <div class="recent-orders">
                    <h3>Recent Orders</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#12345</td>
                                <td>John Doe</td>
                                <td>$456.78</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <!-- More table rows -->
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <script src="dashboard.js"></script>
</body>
</html>