@extends('layouts_admin.master')
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Daftar Paket Wisata</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <button type="button" id="addWisata" data-toggle="modal" data-target="#modalWisata"
                    class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Tambah Paket</button>
                <div class="table-responsive">
                    <table
                        class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableWisata">
                        <thead>
                            <tr>
                                <th class="d-none d-sm-table-cell text-center" style="width: 5%;">no</th>
                                <th class="d-none d-sm-table-cell text-center" style="width: 30%;">nama paket</th>
                                <th class="d-none d-sm-table-cell text-center" style="width: 10%;">harga</th>
                                <th class="d-none d-sm-table-cell text-center" style="width: 20%;">tujuan</th>
                                <th class="d-none d-sm-table-cell text-center">deksripsi</th>
                                <th class="d-none d-sm-table-cell text-center">Tanggal</th>
                                <th class="d-none d-sm-table-cell text-center" style="width: 10%;">action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Add Wisata --}}
    <div class="modal fade" id="modalWisata" tabindex="-1" role="dialog" aria-labelledby="modalWisata" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Paket Wisata</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="" name="frm_wisata" id="frm_wisata" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Paket</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Paket A">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga Paket</label>
                                <input type="text" class="form-control input-currency" type-currency="IDR" id="harga"
                                    name="harga" placeholder="Rp">
                            </div>
                            <div class="form-group">
                                <label for="tujuan">Tujuan</label>
                                <input type="text" class="form-control" id="tujuan" name="tujuan"
                                    placeholder="Gili Trawangan, Air, & Meno">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10"
                                    placeholder="Deskripsi Paket"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-alt-primary" id="saveBtn">
                        <i class="fa fa-check"></i> Save
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @include('admin.wisata.javascript')
@endpush
