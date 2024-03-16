@extends('layouts.admin')

@section('content')


    <a href="{{ route('sub.categories.create') }}" class="btn btn-success mb-2">Добавить</a>


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Подкатегории</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 5%">
                        id
                    </th>
                    <th style="width: 10%">
                        Название подкатегории
                    </th>
                    <th style="width: 20%">
                        Привязка к категории
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($subCategories as $subCategory)
                    <tr>
                        <td>
                            #{{ $subCategory->id }}
                        </td>
                        <td>
                            <a>
                                {{ $subCategory->title }}
                            </a>
                            <br>
                            <small>
                                {{ $subCategory->created_at }}
                            </small>
                        </td>
                        <td>
                            {{ $subCategory->category_title }}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('sub.categories.edit', $subCategory->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Редактировать
                            </a>
                            <form style="display: inline-block;" action="{{ route('sub.categories.delete', $subCategory->id) }}" method="post">
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
