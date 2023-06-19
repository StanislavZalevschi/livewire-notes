<?php

namespace App\Http\Livewire;

use App\Models\Folder;
use App\Models\Note;
use App\Repositories\FolderRepository;
use Illuminate\View\View;
use Livewire\Component;

class ShowFolders extends Component
{
    public function render(FolderRepository $folderRepository): View
    {
        $folders = $folderRepository->getAll();

        return view('livewire.show-folders', compact('folders'))
            ->layout('layouts.app')
        ;
    }
}
