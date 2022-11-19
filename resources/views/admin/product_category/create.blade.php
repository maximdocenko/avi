@extends("admin.app")

@section("content")
    

                @include("admin.inc.form", [
                    'heading' => 'Добавить категорию',
                    'action' => route('product_category.store'),
                    'method' => 'POST',
                    'fields' => [
                        [
                            'label' => 'Заголовок',
                            'type' => 'text',
                            'name' => 'title'
                        ],
                        [
                            'label' => 'Родительская рубрика',
                            'type' => 'select',
                            'name' => 'parent',
                            'options' => $categories
                        ],
                    ]
                ])

        
@endsection
