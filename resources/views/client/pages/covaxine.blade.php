
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
</head>

<body>



<div class="container">
    <div class="card-deck mb-3 text-center">
        <table class="table table-condensed">
            <thead>
            <th>Place</th>
            <th>Availability</th>
            <th>Cost</th>
            <th>Directions</th>
            </thead>
            <tbody>
            @foreach ($data as $obj)

                <tr>
                <td>{{$obj->name}}</td>
                <td>@if(!empty($obj->sessions[0]))
                        {{$obj->sessions[0]->date}}
                    <b>[ {{$obj->sessions[0]->available_capacity}} ]</b>
                    @endif</td>
                <td>{{$obj->fee_type}}</td>
                    <td><a href="https://www.google.com/maps/dir/680007/{{$obj->pincode}}" target="_blank">Open</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
</body>
</html>
