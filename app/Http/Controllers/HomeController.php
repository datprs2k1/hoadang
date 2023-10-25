<?php

namespace App\Http\Controllers;

use App\Models\License;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $licenses = License::all();

        return view('home.index', compact('licenses'));
    }

    public function add(Request $request)
    {
        $ip = $request->get('ip-add');
        $note = $request->get('note-add');
        $type = $request->get('type');

        if ($type == 1) {
            $expired_at = Carbon::now()->addDay();
        } else if ($type == 2) {
            $expired_at = Carbon::now()->addWeek();
        } else {
            $expired_at = Carbon::now()->addMonth();
        }

        License::create([
            'ip' => $ip,
            'note' => $note,
            'expired_at' => $expired_at,
        ]);

        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $id = $request->get('id');
        $ip = $request->get('ip');
        $note = $request->get('note');

        $entry = License::where('id', $id)->first();

        if ($entry) {
            $entry->update([
                'ip' => $ip,
                'note' => $note
            ]);
        }

        return redirect()->back();
    }

    public function getInfo(Request $request)
    {
        $ip = $request->ip();

        $license = License::where('ip', $ip)->first();

        if (!$license || !$license->status) {
            return response()->json([
                'status' => false,
                'message' => 'License hết hạn'
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Hoạt động',
            'name' => $license->note,
            'expired' => $license->expired_at,
            'total' => $license->count()
        ]);
    }
}
