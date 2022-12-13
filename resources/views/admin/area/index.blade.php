@extends('layouts_admin.master')
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Biaya Tambahan Area Khusus</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <button type="button" id="addArea" data-toggle="modal" data-target="#modalArea"
                    class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Tambah Paket</button>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableArea">
                        <thead>
                            <tr>
                                <th class="d-none d-sm-table-cell text-center" style="width: 5%;">no</th>
                                <th class="d-none d-sm-table-cell text-center" style="width: 25%;">Area</th>
                                <th class="d-none d-sm-table-cell text-center">Biaya Tambahan (Avanza)</th>
                                <th class="d-none d-sm-table-cell text-center">Biaya Tambahan (Innova)</th>
                                <th class="d-none d-sm-table-cell text-center">Biaya Tambahan (Hiace)</th>
                                <th class="d-none d-sm-table-cell text-center">Tanggal</th>
                                <th class="d-none d-sm-table-cell text-center">action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Add Area --}}
    <div class="modal fade" id="modalArea" tabindex="-1" role="dialog" aria-labelledby="modalArea" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Paket Sewa Kendaraan Area Khusus</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="" name="frm_area" id="frm_area" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="area">Area</label>
                                <input type="text" class="form-control" id="area" name="area"
                                    placeholder="Pantai Pink">
                            </div>
                            <div class="form-group">
                                <label for="biayaA">Biaya Tambahan (Avanza)</label>
                                <input type="text" class="form-control input-currency" type-currency="IDR" id="biayaA"
                                    name="biayaA" placeholder="Rp">
                            </div>
                            <div class="form-group">
                                <label for="biayaI">Biaya Tambahan (Innova)</label>
                                <input type="text" class="form-control input-currency" type-currency="IDR" id="biayaI"
                                    name="biayaI" placeholder="Rp">
                            </div>
                            <div class="form-group">
                                <label for="biayaH">Biaya Tambahan (Hiace)</label>
                                <input type="text" class="form-control input-currency" type-currency="IDR" id="biayaH"
                                    name="biayaH" placeholder="Rp">
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
    @include('admin.area.javascript')
@endpush
