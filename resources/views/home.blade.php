<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="text-center mb-5 p-2">
                    <h2 class="heading-section "> CRUD OPERATION WITH QUERY BUILDER </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-center mb-4">Add New Student</h4>
                    @if (session()->has('message'))
                        <div class="alert alert-info"> {{session('message')}}</div>
                    @endif
                    <form action="" method="POST">
                        @csrf 
                        <div class="mb-3">
                          <label class="form-label">Student Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter Student Name"  required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="Enter Subject" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Marks</label>
                            <input type="text" class="form-control" name="marks" placeholder="Enter marks" required>
                          </div>
                        <button type="submit" class="btn btn-warning">Submit</button>
                      </form>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center mb-4">Student Information</h4>
                    <div class="table">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Marks</th>
                                    <th>At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <th scope="row" class="scope">{{$student->id}}</th>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->subject}}</td>
                                    <td>{{$student->marks}}</td>
                                    <td>{{$student->created_at}}</td>
                                    <td>
                                        <a href="{{url('edit', $student->id)}}" class="btn btn-outline-success">Edit</a>
                                        <a href="{{url('delete', $student->id)}}" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
