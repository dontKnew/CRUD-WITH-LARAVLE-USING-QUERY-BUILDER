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
                    <h4 class="text-center mb-4">Update Student Records</h4>
                    <form method="POST">
                        @csrf 
                        @method("PUT")
                        <div class="mb-3">
                          <label class="form-label">Student Name</label>
                          <input type="text" class="form-control" value="{{$student->name}}" name="name" placeholder="Enter Student Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" value="{{$student->subject}}" name="subject" placeholder="Enter Subject" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Marks</label>
                            <input type="text" class="form-control" value="{{$student->marks}}" name="marks" placeholder="Enter marks" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Created At</label>
                            <input type="text" class="form-control" value="{{$student->created_at}}" readonly required>
                          </div>
                        <button type="submit" class="btn btn-secondary"> Update </button>
                      </form>
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
