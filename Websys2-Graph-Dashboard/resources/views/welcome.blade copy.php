<div style="width: 400px">
    <canvas id="testChart"></canvas>
</div>

@vite(['resources/js/app.js'])
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const ctx = document.getElementById('testChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow'],
                datasets: [{
                    label: 'Status Check',
                    date: [12, 19, 3],
                }]
            }
        });
    });
</script>