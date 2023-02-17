<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Task</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  
  <link rel="stylesheet" href="{{ asset('assets/css/task.css') }}">
</head>

<body>
<div class="mt-5 text-left">
  <button class="bck" type="button" onclick="window.location.href='{{ url('/homepage') }}'">Back</button>
</div>

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card px-3">
                    <div class="card-body">
                        <h4 class="card-title">Availaible Tasks</h4>
                        <div class="add-items d-flex"> <input type="text" class="form-control todo-list-input" placeholder="Input Hashtag"> <button class="bcks">Submit</button> </div>
                        <div class="list-wrapper">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div> <label class="form-check-label">For what reason would it be advisable. <i class="input-helper"></i></label> </div> <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li class="completed">
                                    <div> <label>For what reason would it be advisable for me to think. <i class="input-helper"></i></label> </div> <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li>
                                    <div>Is it be advisable for me to think about business content? <i class="input-helper"></i></label> </div> <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li>
                                    <div> Print Statements all <i class="input-helper"></i></label> </div> <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li>
                                    <div> Print bills <i class="input-helper"></i></label> </div> <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/task.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>
</body>