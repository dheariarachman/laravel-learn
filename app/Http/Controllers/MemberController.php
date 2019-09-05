<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        $member = DB::table('member')->paginate(10);
        return view('member.index', ['member' => $member]);
    }

    public function find(Request $request)
    {
        $cari = $request->cari;
        $member = DB::table('member')
                ->where("name", "LIKE", '%'.$cari.'%')
                ->paginate();
                
        return view('member.index', ['member' => $member]);
    }

    public function add()
    {
        return view('member.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'job'       => 'required',
            'address'   => 'required',
            'age'       => 'required'
        ]);
        // var_dump($request);
        // die();

        DB::table('member')->insert([
            'name'      => $request->name,
            'job'       => $request->job,
            'age'       => $request->age,
            'address'   => $request->address
        ]);
        return redirect('/member');
    }

    public function edit($id)
    {
        $member = DB::table('member')->where('id', $id)->get();
        return view('member.edit', ['member' => $member]);
    }

    public function update(Request $request)
    {
        DB::table('member')->where('id', $request->id)->update([
            'name'      => $request->name,
            'job'       => $request->job,
            'age'       => $request->age,
            'address'   => $request->address
        ]);

        return redirect('/member');
    }

    public function delete($id)
    {
        DB::table('member')->where('id', $id)->delete();
        return redirect('/member');
    }
}
