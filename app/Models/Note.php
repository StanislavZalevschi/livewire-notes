<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Note
 *
 * @property int $id
 * @property int|null $folder_id
 * @property string|null $title
 * @property string|null $text
 * @property Carbon|null $pinned_at
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Folder|null $folder
 * @method static NoteFactory factory(...$parameters)
 * @method static Builder|Note query()
 * @method static Builder|Note where($attribute,$value)
 */
class Note extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'text',
        'pinned_at',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'pinned_at' => 'datetime',
    ];

    public function folder(): BelongsTo
    {
        return $this->belongsTo(Folder::class);
    }
}
