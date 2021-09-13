<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8 />
    <title>Codeigniter 4 Morris Area & Line Charts Example - XpertPhp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div>
            <label class="label label-success">Codeigniter 4 Line Chart Example</label>
            <div id="lineChart"></div>
        </div>                
        <div>
            <label class="label label-success">Codeigniter 4 Area Chart Example</label>
            <div id="areaChart"></div>
        </div>
    </div>

    <!-- Add Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
            var data = [
                {
                    "year": "2016",
                    "sales": "1000"
                }, 
                {
                    "year": "2017",
                    "sales": "9800"
                }, 
                {
                    "year": "2018",
                    "sales": "1400"
                }, 
                {
                    "year": "2019",
                    "sales": "1640"
                }, 
                {
                    "year": "2020",
                    "sales": "9640"
                }, 
                {
                    "year": "2021",
                    "sales": "2640"
                },                                 
            ]

            var data = data,
                config = {
                    data: data,
                    fillOpacity: 0.5,                
                    xkey: 'year',
                    ykeys: ['sales'],
                    labels: ['Product Sales Data'],
                    hideHover: 'auto',
                    behaveLikeLine: true,
                    resize: true,
                    lineColors:['green','orange'],
                    pointFillColors:['#ffffff'],
                    pointStrokeColors: ['blue'],
            };

            config.element = 'lineChart';
            Morris.Line(config);            
    
            config.element = 'areaChart';
            Morris.Area(config);
    </script>
</body>
</html>