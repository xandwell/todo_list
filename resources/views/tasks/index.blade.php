@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task lists</div>

                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="task" class="form-control" placeholder="Tulis task disini..." required>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>

                    <ul class="list-group">
                        @foreach($tasks as $task)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="{{ $task->completed ? 'text-decoration-line-through' : '' }}">{{ $task->task }}</span>
                            <div>
                                <form action="{{ route('tasks.complete', $task->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @if(!$task->completed)
                                    <button type="submit" class="btn btn-success btn-sm">Selesai</button>
                                    @else
                                    <button type="button" class="btn btn-success btn-sm" disabled>Selesai</button>
                                    @endif
                                </form>

                                <form action="{{ route('tasks.delete', $task->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
