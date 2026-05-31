<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-600 p-5">
    <div class="max-w-4xl mx-auto bg-gray-100 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4 ">Monthly Sales Overview</h2>
        <canvas id="salesChart"></canvas>
    </div>
    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');
        const labels = @json($labels);
        const data = @json($data);
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Sales ($)',
                    data: data,
                    borderColor: '#000000',
                    backgroundColor: [
                        '#FFFFFF',
                        '#35A7FF',
                        '#6BF178',
                        '#FF5964',
                        '#FFE74C',
                    ],
                    fill: true,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {beginAtZero: true},
                }
            }
        });
    </script>
</body>
</html>