@extends('template')

@section('main')
    <div class="card">
        <div class="card-body">
            <h1>Data Member</h1>
            <p>Cari Data Member</p>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form action="/member/find" method="GET" class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" name="cari" placeholder="Find a Member"
                                value="{{ old('cari') }}">
                            <input type="submit" class="btn btn-primary" value="Find">
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="/member/add" class="btn btn-primary float-right">Add Member</a>
                </div>
            </div>
            <br>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th width="5%">Age</th>
                    <th>Job</th>
                    <th>Address</th>
                    <th width="15%">Action</th>
                </tr>
                @if( count($member) > 0 )
                    @foreach($member as $m)
                    <tr>
                        <td>{{ $m->name }}</td>
                        <td>{{ $m->age }}</td>
                        <td>{{ $m->job }}</td>
                        <td>{{ $m->address }}</td>
                        <td>
                            <a href="/member/edit/{{ $m->id }}" class="btn btn-warning">Edit</a>
                            <a href="/member/delete/{{ $m->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" align="center">There is No Data</td>
                    </tr>
                @endif
            </table>
            <br>
            Halaman : {{ $member->currentPage() }} <br>
            Jumlah Data : {{ $member->total() }} <br>
            Data per Page : {{ $member->perPage() }} <br>

            {{ $member->links() }}
        </div>
    </div>
@endsection