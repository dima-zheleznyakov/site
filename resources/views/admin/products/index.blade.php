@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Категории</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        id
                    </th>
                    <th style="width: 20%">
                        Название
                    </th>
{{--                    <th style="width: 15%">--}}
{{--                        Подкатегория--}}
{{--                    </th>--}}
                    <th style="width: 30%">
                        Описание
                    </th>
                    <th>
                        В наличии
                    </th>
                    <th style="width: 8%" class="text-center">
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
{{--                    <td>--}}

{{--                    </td>--}}
                    <td>
                        <?
                        $descr = substr($product->description, 0, 120) . "...";
                        echo $descr;
                        ?>
                    </td>
                    <td>
                        {{ $product->stock }}
                    </td>
                    <td class="project-state">
                        @if($product->is_published === 1)
                            <span class="badge badge-success">Success</span>
                        @else
                            <span class="badge badge-danger">Success</span>
                        @endif
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
