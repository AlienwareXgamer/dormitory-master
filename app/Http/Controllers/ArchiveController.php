<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aroom;
use App\Models\Archive;


class ArchiveController extends Controller
{
    public function create(Aroom $aroom)
{
    return view('archives.create', compact('aroom'))->with('id', $aroom->id);
}
// TenantController.php
public function store(Request $request, Aroom $aroom)
{
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:archives,email',
        'address' => 'required',
        'status'=> "required",
        'phone_number' => 'required',
    ]);

    $archive = Archive::create($request->all());
    $aroom->archive()->save($archive);

    $aroom = Aroom::findOrFail($request->get('aroom_id'));
    $aroom->is_archived = true;
    $aroom->save();

    return redirect()->route('arooms.index', $aroom)->with('success', 'Archive has been added to the room.');
}

    public function edit(Archive $archive)
    {
        return view('archives.edit', compact('archive'));
    }

    public function update(Request $request, Archive $archive)
    {
        $archive->update($request->all());
        return redirect()->route('arooms.index');
    }

    public function destroy(Archive $archive)
    {
        $aroom_id = $archive->aroom_id;

        $archive->delete();

        $aroom = Aroom::findOrFail($aroom_id);
        $aroom->is_archived = false;
        $aroom->save();

        return redirect()->route('arooms.index');
    }
}
