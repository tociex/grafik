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
function getMonth(month) {
    let arrMonth = [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];
    return arrMonth[month - 1];
}

function splitDate(date) {
    var dateArr = date.split('');
    var date = dateArr[2] + " " + getMonth(dateArr[1] - 1) + " " + dateArr[0];
    return date;
}


function setTableDaily(data) {
    if (!data.daily[0] || data.daily[0] == null) {
        $("#daily-view-datatable").html("<h4 class='text-center'>Empty!</h4>");
        return;
    }
    let target = data.target[0];
    let daily = data.daily[0];
    $('#daily-view-datatable').html(`
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Target `+getMonth(target.month)+` `+target.year+`</th>
                    <th scope="col">MTD `+ daily.date+`</th>
                    <th scope="col">Persentase</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Outlet</th>
                    <td>`+ formatRupiah(target.outlet)+`</td>
                    <td>`+ formatRupiah(daily.outlet) +`</td>
                    <td>`+ parseInt((parseInt(daily.outlet) / parseInt(target.outlet)) * 100)+`%</td>
                </tr>
                <tr>
                    <th scope="row">User</th>
                    <td>`+ formatRupiah(target.user)+`</td>
                    <td>`+ formatRupiah(daily.user) +`</td>
                    <td>`+ parseInt((parseInt(daily.user) / parseInt(target.user)) * 100) +`%</td>
                </tr>
                <tr>
                    <th scope="row">TRX</th>
                    <td>`+ formatRupiah(target.trx)+`</td>
                    <td>`+ formatRupiah(daily.trx) +`</td>
                    <td>`+ parseInt((parseInt(daily.trx) / parseInt(target.trx)) * 100) +`%</td>
                </tr>
                <tr>
                    <th scope="row">Volume</th>
                    <td>`+ formatRupiah(target.volume)+`</td>
                    <td>`+ formatRupiah(daily.volume) +`</td>
                    <td>`+ parseInt((parseInt(daily.volume) / parseInt(target.volume)) * 100) +`%</td>
                </tr>
            </tbody>
        </table>
    `);
}

function daily(data) {
    if (!data.daily[0] || data.daily[0] == null) {
        $("#daily").html("<h4 class='text-center'>Empty!</h4>");
        $("#daily-volume").html("<h4 class='text-center'>Empty!</h4>");
        return;
    }else{
        let target = data.target[0];
        let daily = data.daily[0];

        let outletpersentage = (parseInt(daily.outlet) / parseInt(target.outlet) ) * 100;
        let userpersentage = (parseInt(daily.user) / parseInt(target.user)) * 100;
        let trxpersentage = (parseInt(daily.trx) / parseInt(target.trx)) * 100;
        daily_volume(target,daily);
        Highcharts.chart('daily', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Daily Target'
            },
            xAxis: {
                categories: [
                    '<span>Outlet (4x)<span><br> <h6>Persentage : '+parseInt(outletpersentage)+'%</h6>',
                    '<span>User<span><br> <h6>Persentage : ' + parseInt(userpersentage)+'%</h6>',
                    '<span>TRX<span><br> <h6>Persentage : ' + parseInt(trxpersentage) +'%</h6>',
                ],
                labels:{
                    style:{
                        cursor : 'pointer',
                        fontSize: '18px',
                    }
                },
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah'
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0, 
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            //uncomment below if you want to change the color of graphics.
            //don't forget to reload page after changes the color
            series: [{
                name: 'Target '+getMonth(target.month)+' '+target.year,
                data: [parseInt(target.outlet), parseInt(target.user), parseInt(target.trx)],
                color :'#990000'

            }, {
                name: 'MTD '+ (daily.date),
                data: [parseInt(daily.outlet), parseInt(daily.user), parseInt(daily.trx)],
                color : '#CC3300'
            }],
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
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
}

function daily_volume(target,daily){

    let volumepersentage = (parseInt(daily.volume) / parseInt(target.volume)) * 100;
    Highcharts.chart('daily-volume', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Volume'
        },
        exporting :{
            enabled : false,
        },
        xAxis: {
            categories: [
                '<span>Volume<span><br> <h6>Persentage : '+parseInt(volumepersentage)+'%</h6>',
            ],
            labels: {
                style: {
                    cursor: 'pointer',
                    fontSize: '18px',
                }
            },
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true
                }
            }
        },
        //uncomment below if you want to change the color of graphics.
        //don't forget to reload page after changes the color
        series: [{
            name: 'Target ' + getMonth(target.month) + ' ' + target.year,
            data: [parseInt(target.volume)],
            color : '#990000'

        }, {
            name: 'MTD ' +(daily.date),
            data: [parseInt(daily.volume)],
            color: '#CC3300'
        }],
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                }
            }
        },

        credits: {
            enabled: false
        }
    });
}