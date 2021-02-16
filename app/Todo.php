<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Todo extends Model
    {
        protected $guarded = [];

        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class, 'user_id');
        }
    }
