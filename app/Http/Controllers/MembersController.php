<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MembersController extends Controller
{
    public function addata(Request $req)
    {
        $req->validate([
            'name' => 'required | max:10',
            'address' => 'required | min:5',
            'email' => 'required'
        ]);
        $member = new Member;
        $member->name = $req->name;
        $member->address = $req->address;
        $member->email = $req->email;
        // $member->country=$req->countary;
        $member->save();
        return redirect('');
    }
    function show()
    {
        $members = Member::paginate(10);
        return view('list', compact('members'));
    }
    function delete($id)
    {
        $data = member::find($id);
        $data->delete();
        return view('msg');
    }
    function showData($id)
    {
        $data = member::find($id);
        return view('edit', compact('data'));
    }
    public function update(Request $req)
    {
        $data = member::find($req->id);
        $data->name = $req->name;
        $data->address = $req->address;
        $data->email = $req->email;
        $data->save();
        return redirect('list');
    }
}
// rizwan her
