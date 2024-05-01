<script type="text/javascript">
    // JavaScript code for the first chart
   var labels = @json($labels);
    var users = @json($data);

    const data = {
        labels: labels,
        datasets: [{
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna latar belakang batang biru
            borderColor: 'rgb(54, 162, 235)', // Warna garis batas batang
            borderWidth: 2, // Lebar garis batas batang
            pointBackgroundColor: 'rgb(54, 162, 235)', // Warna titik data
            pointBorderColor: 'rgb(54, 162, 235)', // Warna garis pinggiran titik data
            pointRadius: 6, // Ukuran titik data
            pointHoverRadius: 8, // Ukuran titik data saat dihover
            data: users,
        }]
    };

    const config = {
        type: 'line',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1, // Menetapkan langkah sumbu y
                        font: {
                            size: 14 // Ukuran font sumbu y
                        }
                    }
                },
                x: {
                    ticks: {
                        display: false, // Menyembunyikan label pada sumbu x
                    }
                }
            },
            plugins: {
                legend: {
                    display: false // Menyembunyikan legenda
                }
            }
        }
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

    // Kode untuk grafik kedua
    var labels2 = @json($labels2);
    var data2 = @json($data2);

    const dataConfig2 = {
        labels: labels2,
        datasets: [{
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna latar belakang batang
            borderColor: 'rgb(54, 162, 235)', // Warna garis batas batang
            borderWidth: 2, // Lebar garis batas batang
            data: data2,
        }]
    };

    const config2 = {
        type: 'bar',
        data: dataConfig2,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1, // Menetapkan langkah sumbu y
                        font: {
                            size: 14 // Ukuran font sumbu y
                        }
                    }
                },
                x: {
                    ticks: {
                        display: false, // Menyembunyikan label pada sumbu x
                    }
                }
            },
            plugins: {
                legend: {
                    display: false // Menyembunyikan legenda
                }
            }
        }
    };

    const myChart2 = new Chart(
        document.getElementById('myChart1'),
        config2
    );

</script>
