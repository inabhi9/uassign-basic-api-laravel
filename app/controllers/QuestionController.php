<?php

class QuestionController extends \BaseController {

    /**
     * Display a listing of the question.
     *
     * @return Response
     */
    public function index() {
        $questions = Question::all();

        return Response::apiResponse(1, 'questions', $questions);
    }


    /**
     * Display the specified question.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id) {
        // Retrieve question from DB
        $question = Question::find($id);
        // Defining status
        $status = 1;
        if (empty($question)) $status = 0;

        //Generating response
        return Response::apiResponse($status, 'questions', $question);
    }

}
