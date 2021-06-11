
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


    <style>
        td,th{
            text-align: left;
        }
        th{
            border-bottom: 1px dotted #e7e7e7;
        }
        td{
            padding: 0px 10px !important;
        }
        td{
            border-right: 1px dotted #e7e7e7;
        }
        td:last-child{
            border-right: 0px dotted #e7e7e7;
        }
    </style>

    <script>
        let time = 30;
        window.setTimeout(function () {
           window.location.reload();
        }, 30000);

        setInterval(function () {
            $('#reset').html('Page will refresh in '+(time--)+' seconds');

        },1000)
    </script>
</head>

<body>



<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="alert alert-warning" id="reset"></div>
        <a href="https://www.cowin.gov.in/home" target="_blank">https://www.cowin.gov.in/home</a>
        <table class="table table-condensed">
            <thead>
            <th>Place</th>
            <th>Availability</th>
            <th>Cost</th>
            <th>Directions</th>
            </thead>
            <tbody>
            @foreach ($data as $obj)
                @if($obj->sessions[0]->available_capacity_dose1 > 2  )
                <tr>
                <td>{{$obj->name}}</td>
                <td>@if(!empty($obj->sessions[0]))
                        {{$obj->sessions[0]->date}}
                    <b>[ {{$obj->sessions[0]->available_capacity}} ]</b>

                    [{{$obj->sessions[0]->available_capacity_dose1}}]
                        [{{$obj->sessions[0]->available_capacity_dose2}}]
                        @if($obj->sessions[0]->available_capacity_dose1 > 0 )
                            <audio id="chatAudio-{{$obj->sessions[0]->session_id}}" controls autoplay>
                                <source src="{{asset('sahara.mp3')}}" type="audio/mpeg">
                            </audio>

                            <script>

                                var audio = document.getElementById('chatAudio-{{$obj->sessions[0]->session_id}}');
                                setTimeout(function () {
                                    audio.play()
                                },500)
                            </script>

                        @endif
                    @endif</td>
                <td>{{$obj->fee_type}} {{$obj->pincode}}</td>
                    <td><a href="https://www.google.com/maps/dir/680007/{{$obj->pincode}}" target="_blank">Open</a></td>
            </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</div>


</body>
</html>
