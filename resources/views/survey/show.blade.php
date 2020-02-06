@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$questionnaire->title}}</h1>
            <form action="/surveys/{{$questionnaire->id}}-{{ Str::slug($questionnaire->title)}}" method="post">
                @csrf
                @foreach($questionnaire->questions as $key => $question)
                <div class="card mt-4">
                    <div class="card-header"><strong>{{$key + 1}}</strong> {{$question->question}}</div>
                    <div class="card-body">
                        @error('responses.'.$key.'.answer_id')
                        <small class="alert alert-danger">{{ $message }}</small>
                        @enderror
                        <ul class="list-group">
                            @foreach($question->answers as $answer)
                            <label for="answer{{ $answer->id }}">
                               <li class="list-group-item">
                                <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}" {{ (old('responses.' .$key. '.answer_id') == $answer->id ? 'checked' : '') }}  class="mr-2" value="{{ $answer->id }}">
                                {{$answer->answer}}

                                <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                                @error('purpose')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </li> 
                        </label>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach

        
        <div class="card">
            <div class="card-header">Your Information</div>

            <div class="card-body">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="survey[name]" aria-describedby="name" placeholder="Enter Name">
                    <small id="nameHelp" class="form-text text-muted">What is your name?</small>

                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="survey[email]" aria-describedby="email" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Your Email Please!</small>

                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button class="btn btn-primary" type="submit">Complete Survey</button>
                </div>
            </div>
        </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
