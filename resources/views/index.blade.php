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




            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Task Editor</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmTasks" name="frmTasks" class="form-horizontal" novalidate="">

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Task</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="task" name="task" placeholder="Task" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                            <input type="hidden" id="task_id" name="task_id" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="{{asset('js/ajax-crud.js')}}"></script>
    </body>
</html>
