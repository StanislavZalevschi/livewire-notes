<?php

namespace App\Http\Livewire;

use App\Repositories\FolderRepository;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ShowFolders extends Component
{
    use WithPagination;

    public function render(FolderRepository $folderRepository): View
    {
        $folders = $folderRepository->paginate(10);

        return view('livewire.show-folders', compact('folders'));
    }
}
