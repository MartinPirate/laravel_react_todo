<?php


    namespace App\Transformers;


    use App\Models\User;
    use League\Fractal\TransformerAbstract;
    use phpDocumentor\Reflection\Types\Collection;

    class UsersTransformer extends TransformerAbstract
    {

        /**
         * List of resources possible to include
         *
         * @var array
         */
        protected $availableIncludes = ['todos'];

        /**
         * A Fractal transformer.
         *
         * @param  User  $user
         *
         * @return array
         */

        public function transform(User $user): array
        {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'created_at' => $user->created_at,
                'total_todos' => $user->todos->count()
            ];
        }

        public function includeTodos(User $user): \League\Fractal\Resource\Collection
        {
            return $this->collection($user->todos, new TodosTransfomer());
        }


    }
