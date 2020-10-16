    <script src="https://code.highcharts.com/highcharts.js">
    </script>


    <script>
        Highcharts.chart('chartPengunjung', {
            chart: {
                type: 'column',
                backgroundColor: '#d6d6d6'
            },
            title: {
                text: 'Jumlah Pengunjung'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: <?= $tanggal_pengunjung; ?>,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah (orang)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Periode',
                data: <?= $jumlah_pengunjung; ?>,
                color: '#ff9100'
            }]
        });
    </script>