<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingPageController extends Controller
{

    public function create(){
        return view('form');
    }


    public function sendStudentData(Request $request)
    {
        // return "test";
        // Collect parent data
        $parentData = [
            "name" => $request->input('parent_name'),
            "email" => $request->input('parent_email'),
            "phone" => $request->input('parent_phone'),
            "location" => $request->input('parent_location'),
            "image" => $request->file('parent_image') ? base64_encode(file_get_contents($request->file('parent_image'))) : 'string',
            "dob" => $request->input('parent_dob'),
            "whatsapp" => $request->input('parent_whatsapp') ?? "",
            "facebook" => $request->input('parent_facebook') ?? "",
            "snapchat" => $request->input('parent_snapchat') ?? "",
            "youtube" => $request->input('parent_youtube') ?? "",
            "gender" => $request->input('parent_gender'),
            "details" => [
                "nationalId" => $request->input('parent_nationalId'),
                "password" => $request->input('parent_password'),
            ],
        ];

        // Check if parent exists
        $parentCheckResponse = Http::post('https://api.riyadah-alfeker.com/api/v1/parent/exist', [
            'phone' => $parentData['phone'],
            'email' => $parentData['email'],
            'nationalId' => $parentData['details']['nationalId'],
        ]);
        // dd($parentCheckResponse);
        if ($parentCheckResponse->status() === 200) {
            return back()->with(['message' => 'Parent already exists.', 'status' => 'error']);
        }

        // Collect student data
        $students = [];
        $studentNames = $request->input('name');
        $studentEmails = $request->input('email');
        $studentPhones = $request->input('phone');
        $studentLocations = $request->input('location');
        $studentImages = $request->file('image');
        $studentDobs = $request->input('dob');
        $studentWhatsapps = $request->input('whatsapp');
        $studentFacebooks = $request->input('facebook');
        $studentSnapchats = $request->input('snapchat');
        $studentYoutubes = $request->input('youtube');
        $studentGenders = $request->input('gender');
        $studentPasswords = $request->input('student_password');
        $studentLevels = $request->input('student_level');

        for ($i = 0; $i < count($studentNames); $i++) {
            // Check if student exists
            $studentCheckResponse = Http::post('https://api.riyadah-alfeker.com/api/v1/user/exist', [
                'phone' => $studentPhones[$i],
                'email' => $studentEmails[$i],
            ]);

            if ($studentCheckResponse->status() === 200) {
                return back()->with(['message' => 'Student ' . $studentNames[$i] . ' already exists.', 'status' => 'error']);
            }

            $students[] = [
                "name" => $studentNames[$i] ,
                "email" => $studentEmails[$i],
                "phone" => $studentPhones[$i],
                "location" => $studentLocations[$i],
                "image" => isset($studentImages[$i]) ? base64_encode(file_get_contents($studentImages[$i])) : 'string',
                "dob" => $studentDobs[$i],
                "whatsapp" => $studentWhatsapps[$i] ?? "",
                "facebook" => $studentFacebooks[$i] ?? "",
                "snapchat" => $studentSnapchats[$i] ?? "",
                "youtube" => $studentYoutubes[$i] ?? "",
                "gender" => $studentGenders[$i],
                "student" => [
                    "password" => $studentPasswords[$i],
                    "level" => $studentLevels[$i],
                ],
            ];
        }

        // Prepare data to send
        $data = [
            "students" => $students,
            "parent" => $parentData,
        ];

        // Send the data
        $response = Http::post('https://api.riyadah-alfeker.com/api/v1/student/landing', $data);
        if ($response->successful()) {
            return back()->with(['message' => 'Data sent successfully!', 'status' => 'success']);
        } else {
            return back()->with(['message' => 'Failed to send data. Status: ' . $response->status(), 'status' => 'error']);
        }
    }


}
