@extends('layouts.main')
@section('title')
Welcome To Edit Teacher
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3>
            Edit Teacher
        </h3>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('/teachers/update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $teachers->name }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" value="{{ $teachers->city }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Place Of Birth</label>
                            <input type="text" class="form-control" name="pob" value="{{ $teachers->pob }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" value="{{ $teachers->dob }}" id="exampleInputPassword1">
                        </div>
                        <div class="mb-2">
                            <label for="agama" class="form-label">Religion</label>
                            <select class="form-select" name="subjects" aria-label="Default select example">
                                <option value="">--Pilih--</option>
                                @foreach($subjects as $s)
                                <option value="{{ $s->id }}" {{ $teachers->id_subjects == $s->id ? 'selected' : '' }}>{{ $s->subject }}</option>
                                @endforeach
                            </select>
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