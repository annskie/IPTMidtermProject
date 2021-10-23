@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Users</h1>
        <table class="table table-bordered">
             <thead class="bg-primary">
                <tr>
                    <th scope="col">User Id</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
                <body>
                    <?php foreach($users as $u): ?>
                    <tr>
                        <td scope="row"><?= $u->id ?> </td>
                        <td scope="row"><?= $u->lname ?> </td>
                        <td scope="row"><?= $u->fname ?> </td>
                        <td scope="row"><?= $u->address ?> </td>
                    </tr>
                    <?php endforeach; ?>
                </body>
        </table>
    </div>
@endsection