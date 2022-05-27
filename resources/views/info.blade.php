<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Guitar詳細</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Infomation</h3>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img alt="ストラトキャスター" src="{{$images}}" class="img-fluid">
                        </div>
                        <div class="form-group">
                            <label>名称</label>
                            <h4 class="text-center">{{$name}}</h4>
                        </div>
                        <div class=" form-group">
                            <label>メーカー</label>
                            <h4 class="text-center">{{$maker}}</h4>
                        </div>
                        <div class="form-group">
                            <label>特徴</label>
                            <p>{!! $featuer !!}</p>
                        </div>
                        <div class="form-group">
                            <label>代表的な愛用者</label>
                            <p>{!! $famous_user !!}</p>
                        </div>
                        <div class="form-group">
                            <label>製造開始年</label>
                            <p>{{$production_start}}</p>
                        </div>
                        <div>
                            <a href="{{ url('/')}}"><button class=" btn-primary form-control">一覧へ戻る</button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>