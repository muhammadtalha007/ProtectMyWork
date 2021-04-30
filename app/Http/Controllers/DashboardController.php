<?php

namespace App\Http\Controllers;

use App\CertificateFiles;
use App\Certificates;
use App\Subscription;
use App\User;
use App\UserTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $userId = Session::get('userId');
        $user = User::where('id', $userId)->first();
        $user->tokenDetails = UserTokens::where('user_id', $userId)->first();
        $user->subscription = Subscription::where('user_id', $userId)->first();
        return view('dashboard.home')->with(['user' => $user]);
    }

    public function showUploadNewWorkPage()
    {
        return view('dashboard.upload-new-work');
    }

    public function showMyProtectedWorksPage()
    {
        $certificates = Certificates::where('user_id', Session::get('userId'))->get();
        return view('dashboard.my-protected-works')->with(['certificates' => $certificates]);
    }

    public function savingNewWork(Request $request)
    {
        if (!$request->hasfile('fileOne')) {
            return redirect()->back()->withErrors(['Atleast one File should be uploaded!']);
        }
        $userId = Session::get('userId');
        $certificates = new Certificates();
        $certificates->user_id = $userId;
        $certificates->title = $request->title;
        $certificates->save();

        if ($request->hasfile('fileOne')) {
            $files = $request->file('fileOne');
            foreach ($files as $file) {
                $name = $request->fileOneName . rand(0, 1000) .time() . '.' . $file->getClientOriginalExtension();
                $file->move(base_path('/data') . '/Certificate-Files-' . $userId . '/', $name);
                $certificateFiles = new CertificateFiles();
                $certificateFiles->certificate_id = $certificates->id;
                $certificateFiles->file_name = $name;
                $certificateFiles->user_given_name = $request->fileOneName;
                $certificateFiles->save();
            }
        } else {
            return redirect()->back()->withErrors(['Atleast one File should be uploaded!']);
        }
        if ($request->hasfile('fileTwo')) {
            $files = $request->file('fileTwo');
            foreach ($files as $file) {
                $name = $request->fileTwoName . rand(0, 1000) . time() . '.' . $file->getClientOriginalExtension();
                $file->move(base_path('/data') . '/Certificate-Files-' . $userId . '/', $name);
                $certificateFiles = new CertificateFiles();
                $certificateFiles->certificate_id = $certificates->id;
                $certificateFiles->file_name = $name;
                $certificateFiles->user_given_name = $request->fileTwoName;
                $certificateFiles->save();
            }
        }
        if ($request->hasfile('fileThree')) {
            $files = $request->file('fileThree');
            foreach ($files as $file) {
                $name = $request->fileThreeName . rand(0, 1000) . time() . '.' . $file->getClientOriginalExtension();
                $file->move(base_path('/data') . '/Certificate-Files-' . $userId . '/', $name);
                $certificateFiles = new CertificateFiles();
                $certificateFiles->certificate_id = $certificates->id;
                $certificateFiles->file_name = $name;
                $certificateFiles->user_given_name = $request->fileThreeName;
                $certificateFiles->save();
            }
        }
        if ($request->hasfile('fileFour')) {
            $files = $request->file('fileFour');
            foreach ($files as $file) {
                $name = $request->fileFourName . rand(0, 1000) . time() . '.' . $file->getClientOriginalExtension();
                $file->move(base_path('/data') . '/Certificate-Files-' . $userId . '/', $name);
                $certificateFiles = new CertificateFiles();
                $certificateFiles->certificate_id = $certificates->id;
                $certificateFiles->file_name = $name;
                $certificateFiles->user_given_name = $request->fileFourName;
                $certificateFiles->save();
            }
        }
        if ($request->hasfile('fileFive')) {
            $files = $request->file('fileFive');
            foreach ($files as $file) {
                $name = $request->fileFiveName . rand(0, 1000) . time() . '.' . $file->getClientOriginalExtension();
                $file->move(base_path('/data') . '/Certificate-Files-' . $userId . '/', $name);
                $certificateFiles = new CertificateFiles();
                $certificateFiles->certificate_id = $certificates->id;
                $certificateFiles->file_name = $name;
                $certificateFiles->user_given_name = $request->fileFiveName;
                $certificateFiles->save();
            }
        }
        $userToken = UserTokens::where('user_id', $userId)->first();
        $userToken->token = (int)$userToken->token - 1;
        $userToken->update();
        session()->flash('msg', 'Certificate Created Successfully!');
        return redirect('my-protected-work');
    }
}
