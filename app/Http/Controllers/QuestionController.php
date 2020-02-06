<?php

namespace App\Http\Controllers;

use App\Question;
use App\Questionaire;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Questionaire $questionnaire)
    {
        return view('question.create', compact('questionnaire'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Questionaire $questionnaire)
    {
        //dd($request()->all());
        $data = request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required',

        ]);
//dd($data);
        $question = $questionnaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);
        return redirect('/questionnaires'.$questionnaire->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionaire $questionnaire, Question $question)
    {
        //dd($question);
        //dd($question->answers);
        $question->answers()->delete();
        $question->delete();
        return redirect($questionnaire->path());
    }
}
