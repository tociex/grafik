var day = [];
var outletIndo = [], userIndo = [], trxIndo = [], gtvIndo = [];
var outletAlfa = [], userAlfa = [], trxAlfa = [], gtvAlfa = [];

function getMonth(month) {
    let arrMonth = [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];
    return arrMonth[month - 0];
}

function splitDate(date){
    var dateArr = date.split('-');
    var date = dateArr[2] + " " + getMonth(dateArr[1] - 1) + " " + dateArr[0];
    return date;
}
function addnewdata(data) {
    day = [];
    outletIndo = []; userIndo = []; trxIndo = []; gtvIndo = [];
    outletAlfa = []; userAlfa = []; trxAlfa = []; gtvAlfa = [];
    
    if(Array.isArray(data.date)){
        $.each(data.date, function (i, result) {
            day.push(splitDate(result.date));
        })  
    }else{
        day.push(splitDate(data.date));
    }
    $.each(data.indomaret, function (i, result) {
        var temp = [];
        $.each(result, function (j, Val) {
            temp.push(parseInt(Val.value));
        });
        if (i == "outlet") outletIndo.push(temp);
        else if (i == "user") userIndo.push(temp);
        else if (i == "trx") trxIndo.push(temp);
        else if (i == "gtv") gtvIndo.push(temp);
    }),

    $.each(data.alfamart, function (i, result) {
        var temp = [];
        $.each(result, function (j, Val) {
            temp.push(parseInt(Val.value));
        });
        if (i == "outlet") outletAlfa.push(temp);
        else if (i == "user") userAlfa.push(temp);
        else if (i == "trx") trxAlfa.push(temp);
        else if (i == "gtv") gtvAlfa.push(temp);
    });
}

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

function setTableMerchantValue() {
    if(Array.isArray(day)){
        $.each(day, function (i, d) {
            $("#head-table-merchant-indo").append("<th scope='col'>" + d + "</th>");
            $("#head-table-merchant-alfa").append("<th scope='col'>" + d + "</th>");
        });
    }else{
        $("#head-table-merchant-indo").append("<th scope='col'>" + day + "</th>");
    }
    $.each(outletIndo[0], function (i, o) {
        $("#user-fetch-indo").append("<td>" + formatRupiah(o.toString()) + "</td>");
    });
    $.each(userIndo[0], function (i, u) {
        $("#outlet-fetch-indo").append("<td>" + formatRupiah(u.toString()) + "</td>");
    });
    $.each(trxIndo[0], function (i, t) {
        $("#trx-fetch-indo").append("<td >" + formatRupiah(t.toString()) + "</td>");
    });
    $.each(gtvIndo[0], function (i, g) {
        $("#gtv-fetch-indo").append("<td >" + formatRupiah(g.toString()) + "</td>");
    }); 

    $.each(outletAlfa[0], function (i, o) {
        $("#user-fetch-alfa").append("<td>" + formatRupiah(o.toString()) + "</td>");
    });
    $.each(userAlfa[0], function (i, u) {
        $("#outlet-fetch-alfa").append("<td>" + formatRupiah(u.toString()) + "</td>");
    });
    $.each(trxAlfa[0], function (i, t) {
        $("#trx-fetch-alfa").append("<td >" + formatRupiah(t.toString()) + "</td>");
    });
    $.each(gtvAlfa[0], function (i, g) {
        $("#gtv-fetch-alfa").append("<td >" + formatRupiah(g.toString()) + "</td>");
    });
}

function setTableMerchant(data) {
    
    if (!data.date) {
        $("#merchant-view-datatable").html("<h4 class='text-center'>Empty!</h4>");
        return;
    }

    addnewdata(data);
    $('#merchant-view-datatable').html(`
    <table class="table table-striped">
        <thead>
            <tr id='head-table-merchant-indo'>
                <th scope="col" width='20%'> Indomaret</th>
            </tr>
        </thead>
        <tbody>
            <tr id='user-fetch-indo'>
                <th scope="row">User</th>
            </tr>
            
            <tr id='outlet-fetch-indo'>
                <th scope="row">Outlet</th>
            </tr>
            <tr id='trx-fetch-indo'>
                <th scope="row">TRX</th>
            </tr>
            <tr id='gtv-fetch-indo'>
                <th scope="row">GTV</th>
            </tr>
        </tbody>
    </table>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr id='head-table-merchant-alfa'>
                <th scope="col" width='20%'> Alfamart</th>
            </tr>
        </thead>
        <tbody>
            <tr id='user-fetch-alfa'>
                <th scope="row">User</th>
            </tr>
            
            <tr id='outlet-fetch-alfa'>
                <th scope="row">Outlet</th>
            </tr>
            <tr id='trx-fetch-alfa'>
                <th scope="row">TRX</th>
            </tr>
            <tr id='gtv-fetch-alfa'>
                <th scope="row">GTV</th>
            </tr>
        </tbody>
    </table>
    `);
    setTableMerchantValue();
}

function merchant(data) {
    if (!data.indomaret || !data.alfamart) {
        $("#merchant-user").html("<h4 class='text-center'>Empty!</h4>");
        $("#merchant-outlet").html("<h4 class='text-center'>Empty!</h4>");
        $("#merchant-trx").html("<h4 class='text-center'>Empty!</h4>");
        $("#merchant-gtv").html("<h4 class='text-center'>Empty!</h4>");
		
        return;
    }
    addnewdata(data);
    Highcharts.chart('merchant-user', {
        title: {
            text: 'User'
        },
        xAxis :{
            categories : day,
        },
        yAxis: {
            title: {
                enabled: false,
            }
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                },
                label: {
                    connectorAllowed: false
                }
                
            }
        },
        //uncomment below if you want to change the color of graphics.
        //don't forget to reload page after changes the color
        series: [{
            name: 'Alfamart',
            data: userAlfa[0],
            color : '#990000'
        }, {
            name: 'Indomart',
            data: userIndo[0],
            color : '#003399' 
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

    Highcharts.chart('merchant-outlet', {
        title: {
            text: 'Outlet'
        },
        xAxis: {
            categories: day,
        },
        yAxis: {
            title: {
                enabled: false,
            }
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                },
                label: {
                    connectorAllowed: false
                }
            }
        },
        //uncomment below if you want to change the color of graphics.
        //don't forget to reload page after changes the color
        series: [{
            name: 'Alfamart',
            data: outletAlfa[0],
              color : '#990000'
        }, {
            name: 'Indomart',
            data: outletIndo[0],
            color : '#003399'
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

    Highcharts.chart('merchant-trx', {
        title: {
            text: 'TRX'
        },
        xAxis: {
            categories: day,
        },
        yAxis: {
            title: {
                enabled: false,
            }
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                },
                label: {
                    connectorAllowed: false
                }
            }
        },
        //uncomment below if you want to change the color of graphics.
        //don't forget to reload page after changes the color
        series: [{
            name: 'Alfamart',
            data: trxAlfa[0],
              color : '#990000'
        }, {
            name: 'Indomaret',
            data: trxIndo[0],
            color : '#003399'
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

    Highcharts.chart('merchant-gtv', {
        title: {
            text: 'GTV'
        },
        xAxis: {
            categories: day,
        },
        yAxis: {
            title: {
                enabled: false,
            }
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                },
                label: {
                    connectorAllowed: false
                }
            }
        },
        //uncomment below if you want to change the color of graphics.
        //don't forget to reload page after changes the color
        series: [{
            name: 'Alfamart',
            data: gtvAlfa[0],
              color : '#990000'
        }, {
            name: 'Indomaret',
            data: gtvIndo[0],
            color : '#003399'
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
