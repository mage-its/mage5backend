<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <link rel="shorcut icon" href="{{asset("Image/favicon.ico")}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="endTime" content="{{$endTime}}">
    <meta name="currentTime" content="{{$currentTime}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset("css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("css/style-timeline.css")}}">
    <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src='https://ricostacruz.com/jquery.transit/jquery.transit.min.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript">
    </script>
    <script src="{{asset("js/countdown.js")}}"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Olimpiade | MAGE 5</title>
    <style type="text/css">
        html,
        body {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 100%;
        }

        #mynetwork {
            width: 100%;
            height: 100%;
        }
    </style>

    <script type="text/javascript" src="{{asset("js/vis-network.min.js")}}"></script>
    <link href="{{asset("css/vis-network.min.css")}}" rel="stylesheet" type="text/css" />

    <script type="text/javascript">
        var nodes = null;
            var edges = null;
            var network = null;
            var LENGTH_MAIN = 350,
                LENGTH_SERVER = 150,
                LENGTH_SUB = 50,
                WIDTH_SCALE = 2,
                GREEN = 'green',
                RED = '#FFDAB9',
                ORANGE = 'orange',
            //GRAY = '#666666',
                GRAY = 'gray',
                BLACK = '#2B1B17';

            // Called when the Visualization API is loaded.
            function draw() {
            // Create a data table with nodes.
            nodes = [];

            // Create a data table with links.
            edges = [];

            @foreach ($node as $item)
                nodes.push({id: {{$item->no_soal}}, label: '{{$item->no_soal}}', group:@if($item->correct) "terjawab"
                                @elseif($item->lock) "terkunci"
                                @else "terbuka"
                                @endif, value: 8});
            @endforeach

            edges.push({from: 1, to: 6, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 1, to: 7, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 2, to: 8, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 2, to: 11, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 2, to: 12, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 2, to: 14, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 3, to: 9, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 3, to: 10, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 4, to: 14, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 4, to: 15, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 4, to: 17, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 5, to: 18, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 5, to: 19, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 7, to: 8, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 10, to: 11, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 12, to: 13, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 15, to: 16, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 17, to: 18, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});
            edges.push({from: 19, to: 20, length: LENGTH_MAIN, width: WIDTH_SCALE * 6, label: '', color:{color: RED}});

            // create a network
            var container = document.getElementById('mynetwork');
            var data = {
                nodes: nodes,
                edges: edges
            };
            var options = {
                interaction: {
                    zoomView: false,
                    dragView: false
                },
                nodes: {
                scaling: {
                    min: 16,
                    max: 100
                }
                },
                edges: {
                inherit: false,
                smooth: false
                },
                physics:{
                barnesHut:{gravitationalConstant:-30000},
                stabilization: {iterations:2500}
                },
                groups: {
                    terbuka: {
                        shape: 'image',
                        image: '{{asset("Image/rasi/Revisi1_PP-01.png")}}'
                    },
                    terkunci: {
                        shape: 'image',
                        image: '{{asset("Image/rasi/Revisi1_PG-01.png")}}'
                    },
                    terjawab: {
                        shape: 'image',
                        image: '{{asset("Image/rasi/Revisi1_PT-01.png")}}'
                    }
                }
            };
            network = new vis.Network(container, data, options);

            network.on("click", function(params) {
                var nodeId = params.nodes[0];

                @foreach($node as $item)
                    if (nodeId== {{$item->no_soal}}) {
                        @if (!$item->lock && !$item->correct)
                            window.location.href = "/soal/{{$item->id}}"
                        @endif
                    }
                @endforeach

        });

            }
    </script>
</head>

<body onload="draw()" style="background:url({{asset("Image/rasi/peta.png")}}); background-size: cover;">
    <div id="particles"></div>
    <div style="position: absolute; top: 3%; left: 3%; z-index: 9999;">
        <a href="../map"><img src="{{asset("Image/home.png")}}" width="60px;"></a>
        <br>
        <h3>Logika</h3>
    </div>
    <div style="position: absolute; top: 3%; right: 3%; z-index: 9999;" id="countdown">
        Waktu Tersisa: 00:00:00
    </div>
    <div style="position: absolute; top: 8%; right: 3%; z-index: 9999;">
        Score: {{$score}}
    </div>
    <div id="mynetwork"></div>

    <script src="{{asset("js/SlideShow.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="{{asset("js/util.js")}}"></script>
    <script src="{{asset("js/swipe-content.js")}}"></script>
    <script src="{{asset("js/main.js")}}"></script>
    <script src="{{asset("js/navbar.js")}}"></script>
    <script src="{{asset("js/particles.js")}}"></script>
    <script src="{{asset("js/particles.min.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
    <script src="{{asset("js/restrict.js")}}"></script>
    <script src="{{asset("js/ajax-submisi.js")}}"></script>
    <script src="{{asset("js/particle-config.js")}}"></script>
</body>

</html>