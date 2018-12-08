@extends('welcome')

@section('content')
<div class="position-ref full-height">
    <div class="row">
        <h2>List User</h2><br>
        <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah User</a>
        <br><br>
        <table class="table table-bordered tabale-striped" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>E-mail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1;@endphp
                @foreach($user as $key => $value)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $value->name }}</td>
                        <td> {{$value->email}} </td>
                        <td>
                            <a href=" {{ route('user.edit',$value->id) }} " class="btn btn-xs btn-success">Edit</a>
                            <form action="{{ route('user.destroy',$value->id) }}" method="POST">
                                {{ csrf_field()}}
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection