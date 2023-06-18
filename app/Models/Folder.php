<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Folder
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property array<Note> $notes
 * @method static NoteFactory factory(...$parameters)
 * @method static Builder|Note query()
 * @method static Builder|Note where($attribute,$value)
 */
class Folder extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }
}
