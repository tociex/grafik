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


function pencapaian(data) {
    if (!data.total || !data.target) {
        $("#pencapaian-user").html("<h4 class='text-center'>Empty!</h4>");
        $("#pencapaian-outlet").html("<h4 class='text-center'>Empty!</h4>");
        $("#pencapaian-trx").html("<h4 class='text-center'>Empty!</h4>");
        $("#pencapaian-gtv").html("<h4 class='text-center'>Empty!</h4>");
        
        return;
    }
    addnewdata(data);
    Highcharts.chart('pencapaian-user', {
    chart: {
        zoomType: 'xy'
    },
    
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: [{
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}°C',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Temperature',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Rainfall',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value} mm',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        x: 120,
        verticalAlign: 'top',
        y: 100,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [{
        name: 'Rainfall',
        type: 'column',
        yAxis: 1,
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
        tooltip: {
            valueSuffix: ' mm'
        }

    }, {
        name: 'Temperature',
        type: 'spline',
        data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
        tooltip: {
            valueSuffix: '°C'
        }
    }]
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
