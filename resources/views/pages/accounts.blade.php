@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Accounts</h1>
        <table class="table table-bordered">
            <thead class="bg-primary">
                <tr>
                    <th scope="col">Account #</th>
                    <th scope="col">Account Name</th>
                    <th scope="col">Init Invest</th>
                    <th scope="col">Date Started</th>
                </tr>
            </thead>
                <body>
                    <?php foreach($accounts as $a): ?>
                    <tr>
                        <td scope="row"><?= $a->id ?> </td>
                        <td scope="row"><?= $a->acct_name ?> </td>
                        <td scope="row"><?= $a->init_invest ?> </td>
                        <td scope="row"><?= $a->start_date ?> </td>
                    </tr>
                    <?php endforeach; ?>
                </body>
        </table>
    </div>
@endsection