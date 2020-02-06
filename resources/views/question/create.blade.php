@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questions</div>

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

    <form action="/questionnaires/{{$questionnaire->id}}/questions" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="question">Question</label>
            <input type="text" class="form-control" id="question" name="question[question]" aria-describedby="question" value="{{ old('question.question') }}" placeholder="Enter Question">
            <small id="questionHelp" class="form-text text-muted">Ask simple and to-the-point questions for best results.</small>

            @error('question.question')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <fieldset>
                <legend> Choose </legend>
                <small id="choicesHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>
                <div>
                    <div class="form-group">
                        <label for="answer1">Choices 1 </label>
                        <input type="text" class="form-control" id="answer1" name="answers[][answer]" aria-describedby="answer1" value="{{ old('answers.0.answer') }}" placeholder="Enter choices 1">
                        <!-- <small id="answer1Help" class="form-text text-muted">Giving a Answer will increase responses.</small> -->

                        @error('answers.0.answer')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <legend> Choose </legend>
                <small id="choicesHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>
                <div>
                    <div class="form-group">
                        <label for="answer2">Choices 2 </label>
                        <input type="text" class="form-control" id="answer2" name="answers[][answer]" aria-describedby="answer2" value="{{ old('answers.1.answer') }}" placeholder="Enter choices 2">
                        <!-- <small id="answer1Help" class="form-text text-muted">Giving a Answer will increase responses.</small> -->

                        @error('answers.1.answer')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </fieldset>
        </div>


        <div class="form-group">
            <fieldset>
                <legend> Choose </legend>
                <small id="choicesHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>
                <div>
                    <div class="form-group">
                        <label for="answer3">Choices 3 </label>
                        <input type="text" class="form-control" id="answer3" name="answers[][answer]" aria-describedby="answer1" value="{{ old('answers.2.answer') }}" placeholder="Enter choices 3">
                        <!-- <small id="answer1Help" class="form-text text-muted">Giving a Answer will increase responses.</small> -->

                        @error('answers.2.answer')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <legend> Choose </legend>
                <small id="choicesHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>
                <div>
                    <div class="form-group">
                        <label for="answer">Choices 4 </label>
                        <input type="text" class="form-control" id="answer4" name="answers[][answer]" aria-describedby="answer4" value="{{ old('answers.3.answer') }}" placeholder="Enter choices">
                        <!-- <small id="answer1Help" class="form-text text-muted">Giving a Answer will increase responses.</small> -->

                        @error('answers.3.answer')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </fieldset>
        </div>



        <button type="submit" class="btn btn-primary">Add Questions</button>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
