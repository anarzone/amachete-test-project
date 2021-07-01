<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Amachete</title>
</head>
<body>
    <div class="container px-4">
        <div class="row gx-5">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Campaigns</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                        <p class="card-text">{{$data['campaigns']['active_count']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Keywords</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                        <p class="card-text">{{$data['keywords']['total_count']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                        <p class="card-text">{{$data['users']['total_count']}}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h5 class="card-title">Reports</h5>

        <div class="row mt-3">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Most Impressioned Product</h6>
                        <p class="card-text">{{$data['reports']['most_impressioned_product']->title}}</p>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                        <p class="card-text">{{$data['reports']['total_count']}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Product Ad</th>
                            <th>Campaign</th>
                            <th>Impressions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['reports']['all'] as $report)
                            <tr>
                                <td>{{$report->id}}</td>
                                <td>{{$report->user->name}}</td>
                                <td>{{$report->productAd->title}}</td>
                                <td>{{$report->campaign->name}}</td>
                                <td>{{$report->impressions}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
