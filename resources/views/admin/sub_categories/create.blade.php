@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Создание подкатегории</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('sub.categories.store') }}" method="post">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="titleCategory">Название подкатегории</label>
                            <input name="title" type="text" class="form-control" id="titleCategory" placeholder="Название">
                        </div>

                        <div class="form-group">
                            <label>Выбрать родительскую Категорию</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
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
                        <button type="submit" class="btn btn-primary">Создать</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
