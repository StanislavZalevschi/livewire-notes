<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Folder;
use Illuminate\Database\Eloquent\Collection;

final class FolderRepository
{
    public function getAll(): Collection
    {
        return Folder::query()->with('notes')->get();
    }
}
