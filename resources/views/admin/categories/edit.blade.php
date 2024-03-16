@extends('layouts.admin')

@section('content')


    <div class="row">
        <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Создание категории</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('categories.update', $category->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="card-body">

                        <div class="form-group">
                            <label for="titleCategory">Название категории</label>
                            <input name="title" type="text" class="form-control" id="titleCategory" value="{{ $category->title }}">
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputFile">Загрузить фото</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <div class="custom-file">--}}
{{--                                    <input type="file" class="custom-file-input" id="exampleInputFile">--}}
{{--                                    <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>--}}
{{--                                </div>--}}
{{--                                <div class="input-group-append">--}}
{{--                                    <span class="input-group-text">Загрузить</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Редактировать</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-primary">Назад</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
