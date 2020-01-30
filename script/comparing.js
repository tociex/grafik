function comparing(data) {
    if (!data.daily[0] || data.daily[0] == null) {
        $("#comp-user").html("<h4 class='text-center'>Empty!</h4>");
        $("#comp-outlet").html("<h4 class='text-center'>Empty!</h4>");
        $("#comp-trx").html("<h4 class='text-center'>Empty!</h4>");
        $("#comp-volume").html("<h4 class='text-center'>Empty!</h4>");
        return;
    } else {
        let target = data.target[0];
        let daily = data.daily[0];
        let est = data.estimasi[0];

        comp_outlet(target, daily, est);
        comp_user(target, daily, est);
        comp_trx(target, daily, est);
        comp_volume(target, daily, est);
    }
}
function getMonth(month) {
    let arrMonth = [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];
    return arrMonth[month - 1];
}

function splitDate(date) {
    var dateArr = date.split('-');
    var date = dateArr[2] + " " + getMonth(dateArr[1] - 1) + " " + dateArr[0];
    return date;
}

function comp_outlet(target, daily, est) {

    Highcharts.chart('comp-outlet', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Outlet'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:,.1f} %</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.y:,.0f}</b>',
                    distance: -50,
                    filter: {
                        property: 'y',
                        operator: '>',
                        value: null
                    }
                },
                showInLegend: true
            }
        },
        //uncomment below if you want to change the color of graphics.
        //don't forget to reload page after changes the color
        // color : 'red'
        series: [{
            name: 'Persentage',
            colorByPoint: true,
            data: [{
                name: 'Target ' +getMonth(target.month) + ' ' + target.year,
                y: parseInt(target.outlet),
                color : '#990000'
                
            }, {
                name: 'MTD ' +(daily.date),
                y: parseInt(daily.outlet),
                color : '#003399'
            }, {
                name: 'Estimasi',
                y: parseInt(est.outlet),
                color : '#336600'
            }, {
                name: 'Selisih',
                y: (parseInt(target.outlet) - parseInt(daily.outlet)),
                color : '#FF6600'
            }]
        }],

        credits: {
            enabled: false
        },

        exporting: {
            enabled: false,
        }
    });
}

function comp_user(target, daily, est) {
    Highcharts.chart('comp-user', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'User'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:,.1f} %</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.y:,.0f}</b>',
                    distance: -50,
                    filter: {
                        property: 'y',
                        operator: '>',
                        value: null
                    }
                },
                showInLegend: true
            }
        },
        //uncomment below if you want to change the color of graphics.
        //don't forget to reload page after changes the color
        series: [{
            name: 'Persentage',
            colorByPoint: true,
            data: [{
                name: 'Target ' + getMonth(target.month) + ' ' + target.year,
                y: parseInt(target.user),
                color : '#990000'
            }, {
                name: 'MTD ' +(daily.date),
                y: parseInt(daily.user),
                 color : '#003399'
            }, {
                name: 'Estimasi',
                y: parseInt(est.user),
                color : '#336600'
            }, {
                name: 'Selisih',
                y: (parseInt(target.user) - parseInt(daily.user)),
                color : '#FF6600'
            }]
        }],

        credits: {
            enabled: false
        },

        exporting: {
            enabled: false,
        }
    });
}

function comp_trx(target, daily, est) {
    Highcharts.chart('comp-trx', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'TRX'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:,.1f} %</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.y:,.0f}</b>',
                    distance: -50,
                    filter: {
                        property: 'y',
                        operator: '>',
                        value: null
                    }
                },
                showInLegend: true
            }
        },
        //uncomment below if you want to change the color of graphics.
        //don't forget to reload page after changes the color
        
        series: [{
            name: 'Persentage',
            colorByPoint: true,
            data: [{
                name: 'Target ' + getMonth(target.month) + ' ' + target.year,
                y: parseInt(target.trx),
                color : '#990000'
            }, {
                name: 'MTD ' +(daily.date),
                y: parseInt(daily.trx),
                color : '#003399'
            }, {
                name: 'Estimasi',
                y: parseInt(est.trx),
                color : '#336600'
            }, {
                name: 'Selisih',
                y: (parseInt(target.trx) - parseInt(daily.trx)),
                color : '#FF6600'
            }]
        }],

        credits: {
            enabled: false
        },

        exporting: {
            enabled: false,
        }
    });
}

function comp_volume(target, daily, est) {
    Highcharts.chart('comp-volume', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Volume'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:,.1f} %</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.y:,.0f}</b>',
                    distance: -50,
                    filter: {
                        property: 'y',
                        operator: '>',
                        value: null
                    }
                },
                showInLegend: true
            }
        },
        //uncomment below if you want to change the color of graphics.
        //don't forget to reload page after changes the color
        series: [{
            name: 'Persentage',
            colorByPoint: true,
            data: [{
                name: 'Target ' + getMonth(target.month) + ' ' + target.year,
                y: parseInt(target.volume),
                color : '#990000'
            }, {
                name: 'MTD ' +(daily.date),
                y: parseInt(daily.volume),
                color : '#003399'
            }, {
                name: 'Estimasi',
                y: parseInt(est.volume),
                color : '#336600'
            }, {
                name: 'Selisih',
                y: (parseInt(target.volume) - parseInt(daily.volume)),
                color : '#FF6600'
            }]
        }],

        credits: {
            enabled: false
        },

        exporting: {
            enabled: false,
        }
    });
}