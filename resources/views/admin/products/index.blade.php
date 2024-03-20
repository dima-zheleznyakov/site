@extends('layouts.admin')

@section('content')


    <a href="{{ route('products.create') }}" class="btn btn-success mb-2">Добавить</a>


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Подкатегории</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 2%">
                        id
                    </th>
                    <th style="width: 10%">
                        Название подкатегории
                    </th>
                    <th style="width: 10%">
                        Привязка к категории
                    </th>
                    <th style="width: 5%">
                        Статус
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>
                            #{{ $product->id }}
                        </td>
                        <td>
                            <a>
                                {{ $product->title }}
                            </a>
                            <br>
                            <small>
                                {{ $product->created_at }}
                            </small>
                        </td>
                        <td>
                            {{ $product->sub_category_title }}
                        </td>
                        <td style="text-align: left;" class="project-state">

                            <span class="badge {{$product->is_published === 1 ? 'badge-success' : 'badge-danger'}} ">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('products.edit', $product->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Редактировать
                            </a>
                            <form style="display: inline-block;" action="{{ route('products.delete', $product->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash">
                                    </i>
                                    Удалить
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
