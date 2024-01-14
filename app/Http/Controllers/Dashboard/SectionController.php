<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Models\Models\Sections\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    private $Sections;

    public function __construct(SectionRepositoryInterface $Sections)
    {
        $this->Sections = $Sections;
    }

    public function index()
    {
        return $this ->Sections->index();

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $section = new Section();
        $section ->name = strip_tags(  $request -> input ('name'));

        $section ->name_en = strip_tags(  $request -> input ('name2'));

        $section ->description = strip_tags(  $request -> input ('description'));

        session()->flash('add');

        $section->save();
        return redirect()->route('Sections.index');
    }

    public function show($id)
    {
        $doctors =Section::findOrFail($id)->doctors;
        $section = Section::findOrFail($id);
        return view('Dashboard.Sections.show',compact('doctors','section'));
    }


    public function edit($section)
    {
        return view('Dashboard.Sections.edit', [
            'section' => Section::
            find($section)
        ]);

    }






    public function update(Request $request, $section)
    {
        Section::findOrFail($section);

        $section = new Section();

        $section ->name = strip_tags(  $request -> input ('name'));
        $section ->name_en = strip_tags(  $request -> input ('name2'));
        $section ->description = strip_tags(  $request -> input ('description'));


        $section->deleteOldRecord();

        session()->flash('edit');

        $section->save();

        return redirect()->route('Sections.index' , $section );
    }



    public function destroy($section)
    {

        $to_delete = Section::findorfail($section);
        $to_delete ->delete();
        session()->flash('delete');
        return redirect() -> route('Sections.index');

    }
}
