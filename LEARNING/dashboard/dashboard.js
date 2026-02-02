document.addEventListener('DOMContentLoaded', function() {
    // Navigation Active State
    const navLinks = document.querySelectorAll('.sidebar nav ul li');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Simulated Chart Data
    const salesChartData = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        series: [
            [12000, 15000, 13500, 17000, 16000, 19000]
        ]
    };

    // Chart Rendering (Placeholder for Chartist.js or similar library)
    function renderSalesChart() {
        const chart = document.getElementById('sales-chart');
        if (chart) {
            // In a real-world scenario, you'd use a charting library like Chartist.js
            chart.innerHTML = `
                <div class="placeholder-chart">
                    Sales Chart Visualization
                    (Replace with actual chart library implementation)
                </div>
            `;
        }
    }

    // Search Functionality
    const searchInput = document.querySelector('.search-bar input');
    const searchButton = document.querySelector('.search-bar button');

    searchButton.addEventListener('click', performSearch);
    searchInput.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            performSearch();
        }
    });

    function performSearch() {
        const searchTerm = searchInput.value.trim();
        if (searchTerm) {
            console.log('Searching for:', searchTerm);
            // Implement actual search logic here
            alert(`Searching for: ${searchTerm}`);
        }
    }

    // Initialize Dashboard Components
    renderSalesChart();

    // Real-time Updates Simulation
    function simulateRealtimeUpdates() {
        const revenueCard = document.querySelector('.total-revenue .amount');
        const activeUsersCard = document.querySelector('.active-users .amount');
        const newOrdersCard = document.querySelector('.new-orders .amount');

        if (revenueCard) {
            const currentRevenue = parseFloat(revenueCard.textContent.replace('$', '').replace(/,/g, ''));
            revenueCard.textContent = `$${(currentRevenue * (1 + Math.random() * 0.05)).toLocaleString()}`;
        }

        if (activeUsersCard) {
            const currentUsers = parseInt(activeUsersCard.textContent.replace(/,/g, ''));
            activeUsersCard.textContent = `${(currentUsers * (1 + (Math.random() - 0.5) * 0.1)).toLocaleString()}`;
        }

        if (newOrdersCard) {
            const currentOrders = parseInt(newOrdersCard.textContent);
            newOrdersCard.textContent = `${Math.round(currentOrders * (1 + (Math.random() - 0.5) * 0.2))}`;
        }
    }

    // Update dashboard every 5 seconds
    setInterval(simulateRealtimeUpdates, 5000);
});