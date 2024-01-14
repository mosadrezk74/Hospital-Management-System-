<?php


namespace App\Repository\Sections;

use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Models\Models\Sections\Section;

class SectionRepository implements SectionRepositoryInterface
{

    public function index()
    {
        $sections= Section::all();

        return view('Dashboard.Sections.index',  compact('sections'));

    }


}
