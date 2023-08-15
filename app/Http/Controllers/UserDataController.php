<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\UserData;
use Inertia\Inertia;

class UserDataController extends Controller
{
    public function saveUserData(Request $request)
    {

        $fitness = 'fitness_1';
        $token = Str::random(4);

        $data = new UserData();

        $data->fitness = $fitness;

        $data->name = $request->input('userName');
        $data->phone = $request->input('phone');
        $data->ref_code = $token;
        $data->question1 = '';
        $data->question2 = '';
        $data->question3 = '';
        $data->question4 = '';
        $data->question5 = '';
        $data->question6 = '';
        $data->question7 = '';
        $data->question8 = '';
        $data->question9 = '';
        $data->question10 = '';
        $data->question11 = '';
        $data->question12 = '';
        $data->question13 = '';
        $data->question14 = '';
        $data->question15 = '';
        $data->moreQuestion1 = '';
        $data->moreQuestion2 = '';
        $data->moreQuestion3 = '';
        $data->save();

        return redirect()->route('question', [
            'token' => $token
        ]);
    }

    public function saveQuestion(Request $request)
    {
        //return $request;
        $token = $request->token;
        $data = UserData::where('ref_code', $token)->first();

        if ($data) {

            $question5Value = $request->input('question5');
            $question8Value = $request->input('question8');
            $question5Other = $request->input('question5Other');
            $question8Other = $request->input('question8Other');

            // Check if question5Value and question8Value are not null
            if ($question5Value !== null) {
                if (in_array('อื่นๆ', $question5Value)) {
                    $question5Value = [$question5Other];
                }
            } else {
                $question5Value = [];
            }

            if ($question8Value !== null) {
                if (in_array('อื่นๆ', $question8Value)) {
                    $question8Value = [$question8Other];
                }
            } else {
                $question8Value = [];
            }

            // Check and update questions with "อื่นๆ" options
            if ($request->input('question6') === 'อื่นๆ') {
                $question6Value = $request->input('question6Other');
            } else {
                $question6Value = $request->input('question6');
            }

            if ($request->input('question7') === 'อื่นๆ') {
                $question7Value = $request->input('question7Other');
            } else {
                $question7Value = $request->input('question7');
            }

            if ($request->input('question11') === 'อื่นๆ') {
                $question11Value = $request->input('question11Other');
            } else {
                $question11Value = $request->input('question11');
            }

            $updatedData = [
                'question1' => $request->input('question1'),
                'question2' => $request->input('question2'),
                'question3' => $request->input('question3'),
                'question4' => $request->input('question4'),
                'question5' => $question5Value,
                'question6' => $question6Value,
                'question7' => $question7Value,
                'question8' => $question8Value,
                'question9' => $request->input('question9'),
                'question10' => $request->input('question10'),
                'question11' => $question11Value,
                'question12' => $request->input('question12'),
                'question13' => $request->input('question13'),
                'question14' => $request->input('question14'),
                'question15' => $request->input('question15'),
                'moreQuestion1' => $request->input('moreQuestion1'),
                'moreQuestion2' => $request->input('moreQuestion2'),
                'moreQuestion3' => $request->input('moreQuestion3'),
            ];

            $data->update($updatedData);

            return response()->json(['message' => 'Data updated successfully']);
        } else {
            return response()->json(['message' => 'User data not found'], 404);
        }

        //return $request;
    }
}
