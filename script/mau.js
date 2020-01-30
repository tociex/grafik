
function formatRupiah(angka, prefix = '') { //tambahkan Rp jika di inginkan di prefix
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? ' ' + rupiah : '');//tambahkan rp jika di inginkan di ' '
}

function setTableMauValue(header,mau1,mau2,mau3,ret){
    $.each(header, function (i,month) {
        $("#head-table-mau").append("<th scope='col'>" + month+"</th>");
    });
    $.each(mau1, function (i, mau1fetch) {
        $("#mau1-fetch").append("<td>" + formatRupiah(mau1fetch.toString()) + "</td>");
    });
    $.each(mau2, function (i, mau2fetch) {
        $("#mau2-fetch").append("<td>" + formatRupiah(mau2fetch.toString()) + "</td>");
    });
    $.each(mau3, function (i, mau3fetch) {
        $("#mau3-fetch").append("<td >" + formatRupiah(mau3fetch.toString()) + "</td>");
    });
    $.each(ret, function (i, retfetch) {
        $("#ret-fetch").append("<td >" + formatRupiah(retfetch.toString()) + "%</td>");
    });
}

function setTableMau(data) {
    var month = [];
    var mau1 = [];
    var mau2 = [];
    var mau3 = [];
    var ret = [];
    $.each(data.month, function (i, result) {
        month.push(result.month);
    }),
    $.each(data.mau1, function (i, result) {
        mau1.push(parseInt(result.mau1));
    }),
    $.each(data.mau2, function (i, result) {
        mau2.push(parseInt(result.mau2));
    }),
    $.each(data.mau3, function (i, result) {
        mau3.push(parseInt(result.mau3));
    }),
    $.each(data.retention, function (i, result) {
        ret.push(parseInt(result.retention));
    })
    if (!data.month) {
        $("#mau-view-datatable").html("<h4 class='text-center'>Empty!</h4>");
        return;
    }
    $('#mau-view-datatable').html(`
        <table class="table table-striped">
            <thead>
                <tr id='head-table-mau'>
                    <th scope="col" width='20%'> Modern Channel </th>
                </tr>
            </thead>
            <tbody>
                <tr id='mau1-fetch'>
                    <th scope="row">1 BULAN</th>
                </tr>
                
                <tr id='mau2-fetch'>
                    <th scope="row">NEW</th>
                </tr>
                <tr id='mau3-fetch'>
                    <th scope="row">RTE</th>
                </tr>
                <tr id='ret-fetch'>
                    <th scope="row">Retention Rate</th>
                </tr>
            </tbody>
        </table>
    `);
    setTableMauValue(month,mau1,mau2,mau3,ret);
}

function mau(data) {
    var month = [];
    var mau1 = [];
    var mau2 = [];
    var mau3 = [];
    if(!data.month){
        $("#mau").html("<h4 class='text-center'>Empty!</h4>");
        return;
    }

    $.each(data.month, function (i, result) {
        month.push(result.month);
    }),
    $.each(data.mau1, function (i, result) {
        mau1.push(parseInt(result.mau1));
    }),
    $.each(data.mau2, function (i, result) {
        mau2.push(parseInt(result.mau2));
    }),
    $.each(data.mau3, function (i, result) {
        mau3.push(parseInt(result.mau3));
    }),
    Highcharts.chart('mau', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'MAU Retention Tracking'
        },
        xAxis: {
            categories: month
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                    ) || 'gray'
                }
            }
        },
        legend: {
            align: 'center',
            x: -30,
            verticalAlign: 'bottom',
            y: 25,
            floating: true,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true
                }
            }
        },
        //uncomment below if you want to change the color of graphics.
        //don't forget to reload page after changes the color
        series: [{
            name: 'RTE',
            data: mau3,
            color : '#66CC00'
        }, {
            name: 'NEW',
            data: mau2,
            color : '#339900'
        }, {
            name: '1 Bulan TRX',
            data: mau1,
            color : '#006600'
        }],
        exporting: {
            buttons: {
                contextButton: {
                    menuItems: ["viewFullscreen", "printChart", "separator", "downloadPNG", "downloadJPEG", "downloadPDF", "downloadSVG"]
                }
            }
        },
        credits: {
            enabled: false
        }
    });
}
