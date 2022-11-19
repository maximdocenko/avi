@extends("admin.app")

@section("content")


            @include("admin.inc.form", [
                'data' => $data,
                'heading' => 'Обновить товар',
                'action' => route('product.update', $data->id),
                'method' => 'PUT',
                'fields' => [
                    [
                        'label' => 'Заголовок',
                        'type' => 'text',
                        'name' => 'title',
                    ],
                    [
                        'label' => 'Краткое описание',
                        'type' => 'textarea',
                        'name' => 'description',
                        'id' => 'description'
                    ],
                    [
                        'label' => 'Полное описание',
                        'type' => 'textarea',
                        'name' => 'content',
                        'id' => 'content'
                    ],
                    [
                        'label' => 'Изображения',
                        'type' => 'file',
                        'name' => 'image[]'
                    ],
                    [
                        'label' => 'Стаж',
                        'type' => 'text',
                        'name' => 'experience'
                    ],
                    [
                        'label' => 'Цена',
                        'type' => 'number',
                        'name' => 'price'
                    ],
                    [
                        'label' => 'Категория',
                        'type' => 'select',
                        'name' => 'term',
                        'options' => $categories
                    ],
                    [
                        'label' => 'Время приема',
                        'type' => 'checkbox',
                        'name' => 'time',
                        'options' => [
                            1 => 'Понедельник',
                            2 => 'Вторник',
                            3 => 'Среда',
                            4 => 'Четверг',
                            5 => 'Пятница',
                            6 => 'Суббота',
                            7 => 'Воскресенье',
                        ]
                    ],
                ]
            ])

       
@endsection
