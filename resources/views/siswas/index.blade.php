@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('siswas') }}</h2>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="card-styles">
        <div class="card-style-3 mb-10">
            <div class="card-content">

                <div class="container">
                        <a href="#" class="btn btn-sm btn-success text-end mb-2">Add Siswa</a>
                    {{-- </div> --}}
                </div>

                <div class=" table-responsive">
                    <table class="table table-sm text-center table-bordered table-secondary">
                        <thead class="text-center">
                        <tr class="table-info">
                            <th><h6><b>NISN</b></h6></th>
                            <th><h6><b>Nama</b></h6></th>
                            <th><h6><b>Kelas</b></h6></th>
                            <th><h6><b>Jurusan</b></h6></th>
                            <th><h6><b>Action</b></h6></th>
                        </tr>
                        <!-- end table row-->
                        </thead>
                        <tbody>
                        @foreach($siswas as $siswa)
                            <tr>
                                <td>
                                    <p>{{ $siswa['nisn'] }}</p>
                                </td>
                                <td>
                                    <p>{{ $siswa['nama'] }}</p>
                                </td>
                                <td>
                                    <p>{{ $siswa['kelas'] }}</p>
                                </td>
                                <td>
                                    <p>{{ $siswa['jurusan'] }}</p>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info">view</a>
                                    <a href="#" class="btn btn-sm btn-warning">edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach
                        <!-- end table row -->
                        </tbody>
                    </table>
                    <!-- end table -->

                    {{ $siswas->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
