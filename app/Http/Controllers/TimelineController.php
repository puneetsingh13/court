<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use App\Models\timelineAttachemments;
use App\Models\timelineImages;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View as ViewView;

class TimelineController extends Controller
{
    
    public function addTimeline() {

        return View::make('pages.addtimeline');
    }


    public function store(Request $request) : RedirectResponse
    {
        //dd($request->all());
        $validated = Validator::make($request->all(), [
            'date_timeline' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($validated->fails()) {
            return redirect('add-timeline')
                        ->withErrors($validated)
                        ->withInput();
        } else {

            try {
                DB::beginTransaction();

                $date_timeline = date('Y-m-d', strtotime($request->date_timeline));
                $timeline_id = Timeline::create([
                    'date_timeline' => $date_timeline,
                    'title' => $request->title,
                    'description' => $request->description,
                    'month_timeline' => date('F', strtotime($date_timeline)),
                    'year_timeline' => date(' Y', strtotime($date_timeline)),
                ]);

                $last_id =  $timeline_id->id;
                if(!empty($request->images)){

                    foreach($request->images as $key => $image){
                        $imageName = uniqid().'.'.$image->getClientOriginalExtension();
                        $image->move(public_path('/uploads'), $imageName);
                        timelineImages::create([
                            'timeline_id' => $last_id,
                            'images' => $imageName,
                            'image_description' => $request->image_description[$key]
                        ]);
                    }
                }

                if(!empty($request->attachement)){
                    foreach($request->attachement as $attachement){
                        $imageNames = uniqid().'.'.$attachement->getClientOriginalExtension();
                        $attachement->move(public_path('/uploads'), $imageNames);
                        timelineAttachemments::create([
                            'timeline_id' => $last_id,
                            'attachement' => $imageNames
                        ]);
                    }
                }
    
                DB::commit();
    
                return redirect('add-timeline')->with('success', 'Timeline created successfully.');

            } catch (\Exception $th) {
                Log::error("Store::timeline::exception", ['ex' => $th]);
                DB::rollBack();
                return redirect('/add-timeline')->with('error', $th->getMessage());
            }
           
        }
        
    }

    public function view($month, $year) {
        try {

            $timeline = Timeline::select('*')->where([
                'month_timeline' => $month,
                'year_timeline' => $year
            ])->get();

            if($timeline){
                return view('pages.viewtimeline',compact('timeline'));
            }
            return abort(404);
        } catch(\Exception $ex) {
            Log::error('TimelineController::view::exception', ['ex' => $ex]);
            //dd($ex);
            return abort(500);
        }
    }
}
