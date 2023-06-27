<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Folder;
use Illuminate\Pagination\LengthAwarePaginator;

final class FolderRepository
{
    public function paginate(int $limit): LengthAwarePaginator
    {
        return Folder::query()->with('notes')->paginate($limit);
    }
}
