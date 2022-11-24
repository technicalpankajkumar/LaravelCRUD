<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Eloquent ORM  CRUD</title>
  </head>
  <body>
    <div class="container mt-4  bg-dark text-white">
        <div class="row">
            <div class="col-sm-4 ">
               <form action="" method="post">
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$student->name}}">
                </div> 
                <div class="mb-2">
                    <label for="course" class="form-label">COURSE</label>
                    <input type="text" class="form-control" name="course"  value="{{$student->course}}">
                </div>
                <div class="mb-2">
                    <label for="branch" class="form-label">BRANCH</label>
                    <input type="text" class="form-control" name="branch"  value="{{$student->branch}}">
                </div>
                <div class="mb-2">
                    <label for="date" class="form-label">BATCH YEAR</label>
                    <input type="date" class="form-control" name="batch"  value="{{$student->batch}}">
                </div>
                <div class="mb-2">
                    <label for="enroll" class="form-label">ENROLL NO.</label>
                    <input type="number" class="form-control" name="enroll_no" value="{{$student->enroll_no}}" >
                </div>
                <div class="mb-2 text-center">
                    <button type="submit" class="btn btn-success">update</button>
                </div>
               </form>
            </div>
            <div class="col-sm-8">
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>