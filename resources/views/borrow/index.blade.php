@extends('layouts.sidebar')
@section('content')
<div>
    <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex align-items-center justify-content-between">
                        <h6>Data Book</h6>
                        <a href="{{ route('book.create') }}" class="btn add-new btn-success m-1 float-end"><i
                            class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Title</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Writer</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Publisher</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Year</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($dataBook as $book)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $book['title'] }}</td>
                                        <td>{{ $book['writer'] }}</td>
                                        <td>{{ $book['publisher'] }}</td>
                                        <td>{{ $book['year'] }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning" style="margin-right: 5px"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="/book/delete/{{ $book->id }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection