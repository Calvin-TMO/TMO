<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use Carbon;
use Mail;

use App\Comment as Comment;

class CommentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Save the request comment to the spcefied report the current user as 
     *  author and current time as posted date.
     *
     * @param  Request  $request
     * @return Response
     */
    public function add_report_comment(Request $request) {
        // TODO: Add role limitations.
        if ($request->comment_text != '') {
            $comment = new Comment;
            $comment->report_id = $request->report_id;
            $comment->author_id = Auth::user()->id;
            $comment->posted_date = Carbon\Carbon::now();
            $comment->comment_text = $request->comment_text;
            $comment->save();

            /*
            Mail::send('emails.report_comment_changed', ['comment' => $comment], function ($message) use ($comment){
                $message->from('calvin.tutoring.management@gmail.com', 'Calvin Tutoring Reports');
                $message->to($comment->report->assignment->tutor->email)->subject($comment->report->assignment->course->department . '-' . $comment->report->assignment->course->number . ' tutoring report comment');
            });
            */
        }
        return Redirect::back()->with('success', 'Comment has been added to report.');
    }

    /**
     * Remove the specified comment from the specified report.
     *
     * @param  Request  $request
     * @return Response
     */
    public function delete_report_comment(Request $request) {
        // TODO: Add role limitations.
        Comment::find($request->comment_id)->delete();

        return Redirect::back()->with('success', 'Comment has been deleted.');
    }
}
