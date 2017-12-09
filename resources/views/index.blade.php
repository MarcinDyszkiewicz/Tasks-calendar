<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <title>Tasks Calendar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        {{--css styles--}}
        <styles></styles>

    </head>
    <body>
    @include('partials._messages')

    <div class="container-narrow">
        <h2>To Do</h2>
        <button id="btn-add" name="btn-add" class="btn btn-primary btn-xs">Add New Task</button>
        <div>

            <!-- Table-to-load-the-data Part -->
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                {{--<tbody id="tasks-list" name="tasks-list">--}}
                {{--@foreach ($tasks as $task)--}}
                    {{--<tr id="task{{$task->id}}">--}}
                        {{--<td>{{$task->id}}</td>--}}
                        {{--<td>{{$task->task}}</td>--}}
                        {{--<td>{{$task->description}}</td>--}}
                        {{--<td>{{$task->date}}</td>--}}
                        {{--<td>--}}
                            {{--<button class="btn btn-warning btn-xs btn-detail open-modal" value="{{$task->id}}">Edit</button>--}}
                            {{--<button class="btn btn-danger btn-xs btn-delete delete-task" value="{{$task->id}}">Delete</button>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                </tbody>
            </table>






    </body>
</html>
