@extends('layouts.admin')

@section('content')


    <a href="{{ route('categories.create') }}" class="btn btn-success mb-2">Добавить</a>


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Категории</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 5%">
                        id
                    </th>
                    <th style="width: 70%">
                        Название
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                    <td>
                        #{{ $category->id }}
                    </td>
                    <td>
                        <a>
                            {{ $category->title }}
                        </a>
                        <br>
                        <small>
                            {{ $category->created_at }}
                        </small>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="{{ route('categories.edit', $category->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <form style="display: inline-block;" action="{{ route('categories.delete', $category->id) }}" method="post">
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
