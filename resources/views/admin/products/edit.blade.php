@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Создание Товар</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body">

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="titleCategory">Название товара</label>
                                    <input name="title" type="text" class="form-control" id="titleCategory" placeholder="Название" value="{{ $product->title }}">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>Выбрать подкатегорию</label>
                                    <select name="sub_category_id" class="form-control">
                                        @foreach($subCategories as $subCategory)
                                            <option value="{{ $subCategory->id }}">{{ $subCategory->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="stock">Остаток</label>
                                    <input name="stock" type="number" class="form-control" id="stock" value="{{ $product->stock }}" placeholder="Остаток">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card card-outline card-info">
                                    <label>Описание</label>
                                    <textarea name="description" id="editor">{{ $product->description }}</textarea>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label for="exampleInputFile">Загрузка файла</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input name="images" type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="price">Цена</label>
                                    <input name="price" type="number" class="form-control" id="price"  value="{{ $product->price }}"  placeholder="Цена">
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label for="old-price">Старая цена</label>
                                    <input name="old-price" type="number" class="form-control" id="old-price" value="{{ $product->old_price }}"  placeholder="Старая цена">
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label for="discount">Скидка</label>
                                    <input   name="discount" type="number" class="form-control" id="discount" value="{{ $product->discount }}" placeholder="Старая цена">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Статус</label>
                                    <select name="is_published" class="form-control">
                                        <option value="1">Опубликован</option>
                                        <option value="0">Черновик</option>
                                    </select>
                                </div>
                            </div>

                        </div>

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
