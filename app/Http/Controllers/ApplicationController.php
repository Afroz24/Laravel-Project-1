<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ApplicationController extends Controller
{
     public function store(Request $request)
     {
          $request->validate(
               [
                    "name" => "required",
                    "age" => "required | integer ",
                    "qual" => "required",
                    "ph_number" => "required | integer",
                    "gender" => "required",
                    "skill" => "required | array | min:2 ",
                    "image" => "sometimes | image| mimes:jpg,jpeg,png | max:1440",
                    "country" => "required | not_in:default",
                    "resume" => "required | mimes:pdf",
               ]
          );

          $data = new Applicant();

          $data->name = $request->input('name');
          $data->age = $request->input('age');
          $data->qualification = $request->input('qual');
          $data->phone_number = $request->input('ph_number');
          $data->gender = $request->input('gender');

          //now to save check box data
          $checkbox_data = $request->skill;
          $data->skills = implode(",", $checkbox_data);
          //  or 
          // $data->skill = implode(",", $request->skill);


          if ($request->hasFile("image")) {
               $data->picture = $request->file('image')->getClientOriginalName();
               $request->file('image')->move('storage/photos', $data->picture);

               // $image = $request->file('image');
               // $image->move('storage/photos',$image->getClientOriginalName());
               // $data->picture = $image;

          }


          $data->country = $request->input('country');


          if ($request->hasFile("resume")) {
               $data->resume = $request->file('resume')->getClientOriginalName();
               $request->file('resume')->move('storage/resumes', $data->resume);

               // $cv = $request->file('resume');
               // $cv->move('storage/resumes',$cv->getClientOriginalName());
               // $data->resume = $cv;
          }

          $data->save();
          
          return redirect('/index')->with('success','Applied for the Job Succssfully');
          // return $abc;
          //    echo 'Thank you';
     }


     public function read()
     {
          // $WholeData = Applicant::all();
          //if you want to use pagination use below code or use above code
          $WholeData = Applicant::simplePaginate(2);
          return view('show', compact('WholeData'));
     }


     public function resume($id)
     {
          $record = Applicant::find($id);
          return view('resume', ['id' => $record]);
     }




     public function edit($id)
     {
          $record = Applicant::find($id);
          return view('edit', ['record' => $record]);
     }



     public function update(Request $request, $record)
     {

          $request->validate(
               [
                    "name" => "required",
                    "age" => "required | integer ",
                    "qual" => "required",
                    "ph_number" => "required | integer",
                    "gender" => "required",
                    "skill" => "required | array | min:2 ",
                    "image" => "sometimes | image| mimes:jpg,jpeg,png | max:1440",
                    "country" => "required | not_in:default",
                    "resume" => "sometimes | mimes:pdf",
               ]
          );


          $data = Applicant::find($record);
          $data->name = $request->input('name');
          $data->age = $request->input('age');
          $data->qualification = $request->input('qual');
          $data->phone_number = $request->input('ph_number');
          $data->gender = $request->input('gender');

          //now to update check box data
          $checkbox_data = $request->skill;
          $data->skills = implode(",", $checkbox_data);
          //  or 
          // $data->skill = implode(",", $request->skill);

          $data->country = $request->input('country');
          $data->save();

          if ($request->hasFile("image")) {

               $oldimgdelete = $data->picture;
               $data->picture = $request->file('image')->getClientOriginalName();
               $request->file('image')->move('storage/photos', $data->picture);
               $data->save();

               File::delete('storage/photos/' . $oldimgdelete);

               // $image = $request->file('image');
               // $image->move('storage/photos',$image->getClientOriginalName());
               // $data->picture = $image;

          }



          if ($request->hasFile("resume")) {
               $oldresumeDelete = $data->resume;
               $data->resume = $request->file('resume')->getClientOriginalName();
               $request->file('resume')->move('storage/resumes', $data->resume);
               $data->save();

               File::delete('storage/resumes/' . $oldresumeDelete);

               // $cv = $request->file('resume');
               // $cv->move('storage/resumes',$cv->getClientOriginalName());
               // $data->resume = $cv;
          }

          $data->save();
          return redirect(route('show'))->with('msg1','Updated Job Application Succssfully');

     }




     public function delete($id)
     {
          //image delete from folder logic
          $obj = Applicant::find($id);

          $imgdelete = $obj->picture;
          $resumedelete = $obj->resume;

          Applicant::destroy($id);
          // or $id->delete(); 

          //image delete from folder logic
          File::delete('storage/photos/' . $imgdelete);
          File::delete('storage/resumes/' . $resumedelete);


          return back()->with('msg1','Deleted Job Application Sadly');
          // or  return redirect('show');
          // or  return redirect( route('show'));
     }








}
