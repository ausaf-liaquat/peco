@extends('layouts.master')

@section('title')
    About
@endsection
@section('css')
    <link href="{{ url('') }}/assets/jquery-gauge.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .demo1 {
            position: relative;
            width: 20vw;
            height: 20vw;
            box-sizing: border-box;
            float: left;
            margin: 20px
        }

        .demo2 {
            position: relative;
            width: 40vw;
            height: 40vw;
            box-sizing: border-box;
            float: right;
            margin: 20px
        }

        .gauge-needle {
            stroke-width: 10px;
            stroke: red;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .b-gauge__mark {
            position: absolute;
            background: #fff;
            width: 2px;
            height: 30px;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/@trevoreyre/autocomplete-js/dist/style.css" />
@endsection
@section('header')
    @parent
@endsection

@section('content')
    <div class="wrapper row3">
        <canvas id="demo"></canvas>
        <div class="row">
            <div class="col-md-4">
                <div id="autocomplete" class="autocomplete">
                    <input class="autocomplete-input" />
                    <ul class="autocomplete-result-list"></ul>
                </div>
            </div>
            <div class="col-md-4">
                <div id="overall-chart" class="chart chart-big" data-percent="55">
                </div>
                <br> <strong id="overall_text" style="color: #01a1e7;"> 0 out of 0</strong>
            </div>
            <div class="col-md-12">
                <div class="mt-4">
                    <div class="card" style="width: 100%;">
                        <div class="card-header card-custom rounded-4 rounded-bottom"
                            style="border-bottom: 1px solid #cdcdcd;">
                            <h4 class="">
                                <select name="" id="region"
                                    class="form-control fa-1x border-0 fw-medium w-50 selectized"
                                    style="color: rgb(1, 158, 227) !important; display: none;" tabindex="-1">
                                    <option value="25" selected="selected">NE</option>
                                </select>
                                <div class="selectize-control form-control fa-1x border-0 fw-medium w-50 single">
                                    <div class="selectize-input items full has-options has-items">
                                        <div class="item" data-value="25">NE</div><input type="select-one"
                                            autocomplete="off" tabindex="" id="region-selectized" style="width: 4px;">
                                    </div>
                                    <div class="selectize-dropdown single form-control fa-1x border-0 fw-medium w-50"
                                        style="display: none;">
                                        <div class="selectize-dropdown-content"></div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div class="card-body card-custom rounded-4 rounded-top" style="min-height: 455px;">
                            <div class="text-center">
                                <canvas id="canvas">

                                </canvas>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <main class="hoc clear">
                <!-- main body -->

                <div class="sectiontitle">
                    <img class="img_about" src="{{ url('') }}/assets/images/about2.png" alt="">
                </div>
                <p class="btmspace-50 center">ABOUT PECO


                    PECO is a growing company, based in Hong Kong. We specialize in tailoring a complete range of project
                    management, interior fit-out services for corporate offices only. Our director and staff have been involved
                    in the corporate office fit out sector for over 20 years and provide a wealth of experience in delivering
                    many quality office fit outs, and post fit out maintenance services.</p>

                <div class="text-center">
                    <img src="{{ url('') }}/assets/images/os.png" alt="" style="margin-bottom: 68px;">
                </div>
                <!-- / main body -->
                <div class="clear"></div>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <img class="img_about" src="{{ url('') }}/assets/images/cd.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <img class="img" src="{{ url('') }}/assets/images/off.png" alt="">

                    </div>
                    <div class="col-md-6">
                        <img class="img" src="{{ url('') }}/assets/images/off.png" alt="">
                    </div>
                    <div class="col-md-6 mb-2 mt-3">
                        <img class="img_about" src="{{ url('') }}/assets/images/pm.png" alt="">
                    </div>
                    <div class="col-md-6 mb-2 mt-3">
                        <img class="img_about" src="{{ url('') }}/assets/images/c.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <img class="img" src="{{ url('') }}/assets/images/off.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <img class="img" src="{{ url('') }}/assets/images/off.png" alt="">
                    </div>
                    <div class="col-md-6 mb-2 mt-3">
                        <img class="img_about" src="{{ url('') }}/assets/images/pfm.png" alt="">
                    </div>
                </div>
                <br>
            </main> --}}
    </div>
@endsection

@section('footer')
    {{-- @parent --}}
@endsection

@section('js')
    <!-- Vendor js -->
    <script src="http://pulsense.us/assets/js/vendor.min.js"></script>

    <!-- App js-->
    <script src="http://pulsense.us/assets/js/app.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.5/axios.min.js"
        integrity="sha512-JEXkqJItqNp0+qvX53ETuwTLoz/r1Tn5yTRnZWWz0ghMKM2WFCEYLdQnsdcYnryMNANMAnxNcBa/dN7wQtESdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="{{ url('') }}/assets/gauge.js"></script>
    <script src="http://pulsense.us/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="
    https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js
    "></script>
    <script src="https://hyperlinks.ezhr.pk/plugins/chart.js/chart.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}

    <script>
        //  selectGauge3 = new Gauge(document.getElementById("select-3"));
        var bigFont = "14px sans-serif";
        var opts = {
            angle: -0.15,
            lineWidth: 0.1,
            pointer: {
                length: 0.3,
                strokeWidth: 0.05,
                color: "#f27815",
            },
            staticLabels: {
                font: "10px sans-serif",
                labels: {!! json_encode($range) !!},
                fractionDigits: 0,
            },
            staticZones: {!! json_encode($strockstyle) !!},
            renderTicks: {
                divisions: 5,
                divWidth: 1.1,
                divLength: 1,
                divColor: '#FFFFFF',

            },
            limitMax: false,
            limitMin: false,
            strokeColor: "#E0E0E0",
            highDpiSupport: true,
        };
        // selectGauge3.minValue = 0;
        // selectGauge3.maxValue = 3000;
        // selectGauge3.setOptions(opts);
        // selectGauge3.set(1607);

        var target = document.getElementById("demo"); // your canvas element
        var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
        gauge.maxValue = 150000; // set max gauge value
        gauge.setMinValue(0); // Prefer setter over gauge.minValue = 0
        gauge.animationSpeed = 32; // set animation speed (32 is default value)
        gauge.set(10250); // set actual value
    </script>
    <script>
      
        var clockinData = [
            // new Date('2023-01-01 10:12:00').getTime(),
            // new Date('2023-01-02 13:50:00').getTime(),
            // new Date('2023-01-03 09:50:00').getTime(),
            '1672516640000',
            '1674118080000',
            '1673166400000'
        ];
        var dates = ["01","02","03","06","07","08","09","10","13"]
            var clockInTime = [1678763100,1678763040,1678762740,1678762860,1678763100,1678762200,1678762680,1678712740,1678762860]
            // var clockOutTime = res.data.clock_out_time
            var dutyTimeIn = [1678762800,1678762800,1678762800,1678762800,1678762800,1678762800,1678762800,1678762800,1678762800]
            var dutyTimeOut = [1678795200,1678795200,1678795200,1678795200,1678795200,1678795200,1678795200,1678795200,1678795200]
            // var departments = res.data.departments
            // var leaves = res.data.leaves

            var countClockIn = clockInTime.length;
            
            // Ajax Logs Chart
            var config = {
              type: 'line',
              data: {
                labels: dates,
                datasets: [{
                  label: 'Time In',
                  backgroundColor: "#36a2eb",
                  borderColor: "#36a2eb",
                  data: clockInTime,
                  fill: false,
                  pointRadius: 4,
                }, {
                  label: 'Duty In',
                  fill: false,
                  backgroundColor: "#000",
                  borderColor: "#000",
                  data: dutyTimeIn,
                }, {
                  label: 'Duty Out',
                  fill: false,
                  backgroundColor: "#363533",
                  borderColor: "#363533",
                  data: dutyTimeOut,
                }]
              },
              options: {
                responsive: true,
                tooltips: {
                  mode: 'index',
                  intersect: false,

                  callbacks: {
                    label: function(tooltipItem, data) {
                      var label = data.datasets[tooltipItem.datasetIndex].label || '';
                      if (label) {
                          label += ': ';
                      }

                      value = tooltipItem.yLabel.toString();
                      value+= "000";
                      return label += moment(parseInt(value)).format('h:mm A');
                    }
                  }
                },
                hover: {
                  mode: 'nearest',
                  intersect: true
                },
                scales: {
                  xAxes: [{
                    display: true,
                    scaleLabel: {
                      display: true,
                      labelString: 'Date'
                    }
                  }],
                  yAxes: [{
                    display: true,
                    scaleLabel: {
                      display: true,
                      labelString: 'Time'
                    },
                    ticks: {
                          // Include a dollar sign in the ticks
                          callback: function(value, index, values) {
                            value = value.toString();
                            value+= "000";
                          return moment(parseInt(value)).format('h:mm A');
                          }
                      }
                  }]
                }
              }
            };

            var ctx = document.getElementById('canvas').getContext('2d');
            window.myHorizontalBar = new Chart(ctx, config);
        // var options = {
        //     chart: {
        //         height: 350,
        //         type: 'line'
        //     },
        //     series: [{
        //         name: 'Employee Clock-in',
        //         data: clockinData
        //     }],
        //     xaxis: {
        //         categories: [new Date('2023-01-01').getTime(), new Date('2023-01-02').toLocaleDateString(), new Date(
        //             '2023-01-03').toLocaleDateString()],
        //     },
        //     yaxis: {
        //         min: new Date('2023-01-01 9:00:00').getTime(),
        //         max: new Date('2023-01-31 17:00:00').getTime(),
        //         labels: {
        //             formatter: function(value) {
        //                 console.log('dsdsd', value);
        //                 return new Date(value).toLocaleTimeString([], {
        //                     hour: '2-digit',
        //                     minute: '2-digit'
        //                 });
        //             }
        //         },
        //         // categories:times

        //     },


        // };

        // var chart = new ApexCharts(document.querySelector("#chart1"), options);
        // chart.render();
    </script>
    <script type="text/javascript" src="{{ url('') }}/assets/ep.js"></script>
    
    {{-- Latest Easy Pie Chart For Gradient  --}}
    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js'></script> --}}
    {{-- <script src="http://pulsense.us/assets/js/jquery.easy-pie-chart.js"></script> --}}
    <script>
        $(document).ready(function() {


            $('#overall-chart').easyPieChart({
                size: 300,
                scaleColor: "transparent",

                // trackColor: '#D6DBDF',
                scaleLength: 2,
                // lineCap: 'butt', //Can be butt
                size: 160,
                lineWidth: 10,
                animate: 1000,
                barColor: function() {
                    var ctx = this.renderer.getCtx();
                    var canvas = this.renderer.getCanvas();
                    var gradient = ctx.createLinearGradient(0, 0, canvas.width, 0);
                    gradient.addColorStop(0, "#24cdea");
                    gradient.addColorStop(1, "#274dd5");
                    // gradient.addColorStop(0, "#59fdbe");
                    // gradient.addColorStop(1, "#84ff3c");
                    return gradient;
                }
            });


            // $('#overall-chart').easyPieChart({
            //         size: 300,
            //         scaleColor: "transparent",

            //         trackColor: '#D6DBDF',
            //         scaleLength: 2,
            //         // lineCap: 'butt', //Can be butt
            //         size: 160,
            //         lineWidth: 10,
            //         animate: 1000,
            //         barColor: function() {
            //         var ctx = this.renderer.getCtx();
            //         var canvas = this.renderer.getCanvas();
            //         var gradient = ctx.createLinearGradient(0,0,canvas.width,0);
            //         gradient.addColorStop(0, "#ffe57e");
            //         gradient.addColorStop(1, "#de5900");
            //         return gradient;
            //     }
            //     });
        })
    </script>

    <script src='https://unpkg.com/@trevoreyre/autocomplete-js'></script>
    <script>
        $(function() {
            var countries = [
                "ActionScript",
                "AppleScript",
                "Asp",
                "BASIC",
                "C",
                "C++",
                "Clojure",
                "COBOL",
                "ColdFusion",
                "Erlang",
                "Fortran",
                "Groovy",
                "Haskell",
                "Java",
                "JavaScript",
                "Lisp",
                "Perl",
                "PHP",
                "Python",
                "Ruby",
                "Scala",
                "Scheme"
            ];
            var con = {!! json_encode($con) !!}
            new Autocomplete('#autocomplete', {
                search: input => {
                    if (input.length < 1) {
                        return []
                    }
                    return con.filter(country => {
                        return country.toLowerCase()
                            .startsWith(input.toLowerCase())
                    })
                }
            })
        });
    </script>
@endsection
