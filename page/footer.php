</div>
</div>
</section>

<!-- Bootstrap core JavaScript -->
<script src="page/vendor/jquery/jquery.min.js"></script>
<script src="page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    $.getJSON("controller/graph.php", function (result) {
        var dps1 = [];
        var dps2 = [];
        var indeks = [];

        for (var i = 0; i < result.length; i++) {
            dps1.push({"label": result[i].ts, "y": result[i].v1});
            dps2.push({"label": result[i].ts, "y": result[i].v2});
            indeks.push({"label": result[i].ts, "y": result[i].indeks});
        }

        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2",
            zoomEnabled: true,
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 2000,
            exportFileName: "Dust sensor stats from 24h",
            exportEnabled: true,
            title: {
                text: "Dust sensor stats from 24h"
            },

            axisX: {
                title: "Data",
                crosshair: {
                    enabled: true,
                    snapToDataPoint: true
                }
            },

            axisY: {
                crosshair: {
                    enabled: true
                },
                title: "Values in μg/m3",
                minimum: 0
            },
            toolTip: {
                shared: true
            },
            legend: {
                cursor: "pointer",
                verticalAlign: "top",
                horizontalAlign: "center",
                dockInsidePlotArea: true,
                fontSize: 20,
                itemclick: toogleDataSeries
            },
            data: [{
                type: "line",
                showInLegend: true,
                name: "PM2.5",
                xValueType: "dateTime",
                color: "#F08080",
                dataPoints:
                dps1
            }, {
                type: "line",
                showInLegend: true,
                name: "PM10",
                xValueType: "dateTime",
                dataPoints:
                dps2
            }
                , {
                    type: "line",
                    showInLegend: true,
                    name: "Index",
                    color: "black",
                    lineDashType: "dash",
                    xValueType: "dateTime",
                    dataPoints:
                    indeks
                }]
        });
        chart.render();
    });

    $.getJSON("controller/graph2.php", function (result) {
        var dps1 = [];

        for (var i = 0; i < result.length; i++) {
            dps1.push({"label": result[i].ts, "y": result[i].v2});
        }

        var chart = new CanvasJS.Chart("chartContainerHumidity", {
            theme: "light2",
            zoomEnabled: true,
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 2000,
            exportFileName: "Humidity stats from DHT11",
            exportEnabled: true,
            title: {
                text: "Humidity stats from DHT11"
            },

            axisX: {
                title: "Data",
                crosshair: {
                    enabled: true,
                    snapToDataPoint: true
                }
            },

            axisY: {
                crosshair: {
                    enabled: true
                },
                title: "Values in %",
                minimum: 0
            },
            toolTip: {
                shared: true
            },
            legend: {
                cursor: "pointer",
                verticalAlign: "top",
                horizontalAlign: "center",
                dockInsidePlotArea: true,
                fontSize: 20,
                itemclick: toogleDataSeries
            },
            data: [{
                type: "line",
                showInLegend: true,
                name: "Humidity",
                xValueType: "dateTime",
                color: "#F08080",
                dataPoints:
                dps1
            }]
        });
        chart.render();
    });

    $.getJSON("controller/graph3.php", function (result) {
        var dps1 = [];

        for (var i = 0; i < result.length; i++) {
            dps1.push({"label": result[i].ts, "y": result[i].v1});
        }

        var chart = new CanvasJS.Chart("chartContainerTemp", {
            theme: "light2",
            zoomEnabled: true,
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 2000,
            exportFileName: "Temperature stats from BMP180",
            exportEnabled: true,
            title: {
                text: "Temperature stats from BMP180"
            },

            axisX: {
                title: "Data",
                crosshair: {
                    enabled: true,
                    snapToDataPoint: true
                }
            },

            axisY: {
                crosshair: {
                    enabled: true
                },
                title: "Temperature in Celcius deegres"
            },
            toolTip: {
                shared: true
            },
            legend: {
                cursor: "pointer",
                verticalAlign: "top",
                horizontalAlign: "center",
                dockInsidePlotArea: true,
                fontSize: 20,
                itemclick: toogleDataSeries
            },
            data: [{
                type: "line",
                showInLegend: true,
                name: "Temperature",
                xValueType: "dateTime",
                color: "#F08080",
                dataPoints:
                dps1
            }]
        });
        chart.render();
    });

    $.getJSON("controller/graph3.php", function (result) {
        var dps1 = [];

        for (var i = 0; i < result.length; i++) {
            dps1.push({"label": result[i].ts, "y": result[i].v2});
        }

        var chart = new CanvasJS.Chart("chartContainerPress", {
            theme: "light2",
            zoomEnabled: true,
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 2000,
            exportFileName: "Pressure stats from BMP180",
            exportEnabled: true,
            title: {
                text: "Pressure stats from BMP180"
            },

            axisX: {
                title: "Data",
                crosshair: {
                    enabled: true,
                    snapToDataPoint: true
                }
            },

            axisY: {
                crosshair: {
                    enabled: true
                },
                title: "Pressure in hPa",
                minimum: 950
            },
            toolTip: {
                shared: true
            },
            legend: {
                cursor: "pointer",
                verticalAlign: "top",
                horizontalAlign: "center",
                dockInsidePlotArea: true,
                fontSize: 20,
                itemclick: toogleDataSeries
            },
            data: [{
                type: "line",
                showInLegend: true,
                name: "Pressure",
                xValueType: "dateTime",
                color: "#F08080",
                dataPoints:
                dps1
            }]
        });
        chart.render();
    });

    $.getJSON("controller/graph4.php", function (result) {
        var dps1 = [];
        var dps2 = [];
        var indeks = [];

        for (var i = 0; i < result.length; i++) {
            dps1.push({"label": result[i].ts, "y": result[i].v1});
            dps2.push({"label": result[i].ts, "y": result[i].v2});
            indeks.push({"label": result[i].ts, "y": result[i].indeks});
        }

        var chart = new CanvasJS.Chart("chartContainerSmog", {
            theme: "light2",
            zoomEnabled: true,
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 2000,
            exportFileName: "Dust sensor stats",
            exportEnabled: true,
            title: {
                text: "Dust sensor stats"
            },

            axisX: {
                title: "Data",
                crosshair: {
                    enabled: true,
                    snapToDataPoint: true
                }
            },

            axisY: {
                crosshair: {
                    enabled: true
                },
                title: "Values in μg/m3",
                minimum: 0
            },
            toolTip: {
                shared: true
            },
            legend: {
                cursor: "pointer",
                verticalAlign: "top",
                horizontalAlign: "center",
                dockInsidePlotArea: true,
                fontSize: 20,
                itemclick: toogleDataSeries
            },
            data: [{
                type: "line",
                showInLegend: true,
                name: "PM2.5",
                xValueType: "dateTime",
                color: "#F08080",
                dataPoints:
                dps1
            }, {
                type: "line",
                showInLegend: true,
                name: "PM10",
                xValueType: "dateTime",
                dataPoints:
                dps2
            }
                , {
                    type: "line",
                    showInLegend: true,
                    name: "Index",
                    color: "black",
                    lineDashType: "dash",
                    xValueType: "dateTime",
                    dataPoints:
                    indeks
                }]
        });
        chart.render();
    });


    function toogleDataSeries(e) {
        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        } else {
            e.dataSeries.visible = true;
        }
        chart.render();
    }
</script>

</body>

</html>
