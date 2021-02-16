<?php

    namespace App\Http\Controllers\Api;

    use App\Models\Todo;
    use App\Transformers\TodosTransfomer;
    use Illuminate\Http\JsonResponse;
    use App\Http\Controllers\Controller;
    use Spatie\Fractalistic\ArraySerializer;

    class TodosController extends Controller
    {
        public function index(): JsonResponse
        {
            $todos = Todo::all();
            $todos = fractal()->collection($todos, new TodosTransfomer(),
                'todos')
                ->parseIncludes('user')
                ->serializeWith(new ArraySerializer());
            return response()->json($todos, 200, [], JSON_PRETTY_PRINT);
        }
    }
