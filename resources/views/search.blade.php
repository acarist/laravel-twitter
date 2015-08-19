<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">
            <div class="content">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Twitler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($result as $results)
                        <tr>
                            <td>{{ $results }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
