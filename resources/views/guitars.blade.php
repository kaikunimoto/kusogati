<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ギター名鑑</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center my-3">Guitarー一覧</h2>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>name</th>
                        <th>maker</th>
                        <th>info</th>
                    </tr>
                    @foreach($guitars as $g)
                    <tr>
                        <td>{{$g->name}}</td>
                        <td>{{$g->maker}}</td>
                        <td>
                            <form action="showInfo" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$g->id}}">
                                <input type="hidden" name="name" value="{{$g->name}}">
                                <input type="hidden" name="maker" value="{{$g->maker}}">
                                <input type="hidden" name="type" value="{{$g->type}}">
                                <input type="hidden" name="featuer" value="{{$g->featuer}}">
                                <input type="hidden" name="famous_user" value="{{$g->famous_user}}">
                                <input type="hidden" name="production_start" value="{{$g->production_start}}">
                                <input type="hidden" name="images" value="{{$g->images}}">
                                <button type="submit" class="bgn btn-primary">Info</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>

</html>