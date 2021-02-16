<?php


    namespace App\Transformers;


    use App\Models\Todo;
    use League\Fractal\Resource\Item;

    class TodosTransfomer extends \League\Fractal\TransformerAbstract
    {

        /**
         * TodosTransfomer constructor.
         */
        public function __construct()
        {
        }

        /**
         * List of resources possible to include
         *
         * @var array
         */
        protected $availableIncludes = ['user'];

        public function transform(Todo $todo): array
        {
            return
                [
                    'title' => $todo->title,
                    'description' => $todo->description,
                    'status' => $todo->status,
                    'created_date' => $todo->created_at,
                ];

        }

        public function includeUser(Todo $todo): Item
        {
            return $this->item($todo->user, new UsersTransformer());
        }
    }
