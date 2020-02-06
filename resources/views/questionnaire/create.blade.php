@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>

                <div class="card-body">
                   <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->

    <form action="/questionnaires" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Enter Title">
            <small id="titleHelp" class="form-text text-muted">Give Your Questionnaire a title that attracts attention</small>

            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="purpose">Purpose</label>
            <input type="text" class="form-control" id="purpose" name="purpose" aria-describedby="purpose" placeholder="Enter purpose">
            <small id="titleHelp" class="form-text text-muted">Giving a purpose will increase responses.</small>

            @error('purpose')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Questionnaire</button>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
