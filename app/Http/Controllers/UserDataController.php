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
        return $request;
        $token = $request->token;
        $data = UserData::where('ref_code', $token)->first();

        if ($data) {
            $updatedData = [
                'question1' => $request->input('question1'),
                'question2' => $request->input('question2'),
                'question3' => $request->input('question3'),
                'question4' => $request->input('question4'),
                'question5' => $request->input('question5'),
                'question6' => $request->input('question6'),
                'question7' => $request->input('question7'),
                'question8' => $request->input('question8'),
                'question9' => $request->input('question9'),
                'question10' => $request->input('question10'),
                'question11' => $request->input('question11'),
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
