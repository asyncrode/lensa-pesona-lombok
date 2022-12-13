@extends('layouts_admin.master')
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Daftar Paket Sewa Mobil</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <button type="button" id="addSewa" data-toggle="modal" data-target="#modalSewa"
                    class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Tambah Paket</button>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableSewa">
                        <thead>
                            <tr>
                                <th class="d-none d-sm-table-cell text-center" style="width: 5%;">no</th>
                                <th class="d-none d-sm-table-cell text-center">Jenis Kendaraan</th>
                                <th class="d-none d-sm-table-cell text-center">kapasitas</th>
                                <th class="d-none d-sm-table-cell text-center">tarif</th>
                                <th class="d-none d-sm-table-cell text-center">overtime</th>
                                <th class="d-none d-sm-table-cell text-center">Tanggal</th>
                                <th class="d-none d-sm-table-cell text-center">action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Add Sewa --}}
    <div class="modal fade" id="modalSewa" tabindex="-1" role="dialog" aria-labelledby="modalSewa" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Paket Sewa Kendaraan</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="" name="frm_sewa" id="frm_sewa" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="jenis">Jenis Kendaraan</label>
                                <input type="text" class="form-control" id="jenis" name="jenis"
                                    placeholder="Jenis Kendaraan">
                            </div>
                            <div class="form-group">
                                <label for="kapasitas">Kapasitas</label>
                                <input type="text" class="form-control" id="kapasitas" name="kapasitas"
                                    placeholder="Kapasitas">
                            </div>
                            <div class="form-group">
                                <label for="tarif">Tarif</label>
                                <input type="text" class="form-control input-currency" type-currency="IDR" id="tarif"
                                    name="tarif" placeholder="Rp">
                            </div>
                            <div class="form-group">
                                <label for="overtime">Biaya Overtime</label>
                                <input type="text" class="form-control input-currency" type-currency="IDR" id="overtime"
                                    name="overtime" placeholder="Rp">
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
    @include('admin.sewa.javascript')
@endpush
