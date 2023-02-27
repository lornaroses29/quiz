@extends('layouts.main')
@section('title')
QUIZ-WEBPRO
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3>
            Add Subject
        </h3>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('/subjects/store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" id="exampleInputPassword1" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Hours</label>
                            <input type="text" class="form-control" name="hours" id="exampleInputPassword1" required>
                        </div>
                        <div>
                            <input type="reset" class="btn btn-md btn-warning">
                            <button type="submit" name="simpan" class="btn btn-md btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
@endsection