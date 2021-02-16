<?php

    namespace App\Http\Controllers\Api;

    use App\Models\User;
    use App\Transformers\UsersTransformer;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Spatie\Fractalistic\ArraySerializer;

    class UsersController extends Controller
    {
        public function index(): JsonResponse
        {
            $users = User::all();
            $users = fractal()->collection($users, new UsersTransformer(), 'users')
                ->parseIncludes('todos')
                ->serializeWith(new ArraySerializer());

            return response()->json($users, 200, [], JSON_PRETTY_PRINT);

        }
    }
