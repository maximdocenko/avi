@extends("app")

@section("content")
    <div class="white_card mb_30">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">Добавить специалиста</h3>
                </div>
            </div>
        </div>
        <div class="white_card_body">

                @include("inc.form", [
                    'heading' => 'Добавить товар',
                    'action' => route('product.store'),
                    'method' => 'POST',
                    'fields' => [
                        [
                            'label' => 'Заголовок',
                            'type' => 'text',
                            'name' => 'title'
                        ],
                        [
                            'label' => 'Описание',
                            'type' => 'textarea',
                            'name' => 'description',
                            'id' => 'tinymce'
                        ],
                        [
                            'label' => 'Изображения',
                            'type' => 'file',
                            'name' => 'image[]'
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
                            'options' => [
                                1 => 'Юрист',
                                2 => 'Врач',
                            ]
                        ],
                    ]
                ])

        </div>
    </div>
@endsection
