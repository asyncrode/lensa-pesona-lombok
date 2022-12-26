@extends('layouts_admin.master')
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Daftar Paket Detail</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <button type="button" id="addDetail" data-toggle="modal" data-target="#modalDetail"
                    class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Tambah Detail</button>
                <div class="table-responsive">
                    <table
                        class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableDetail">
                        <thead>
                            <tr>
                                <th class="d-none d-sm-table-cell text-center" style="width: 5%;">no</th>
                                <th class="d-none d-sm-table-cell text-center">paket wisata</th>
                                <th class="d-none d-sm-table-cell text-center" style="width: 5%;">jumlah peserta</th>
                                <th class="d-none d-sm-table-cell text-center" style="width: 10%;">harga tour</th>
                                <th class="d-none d-sm-table-cell text-center" style="width: 20%;">harga tour hotel</th>
                                <th class="d-none d-sm-table-cell text-center">Tanggal</th>
                                <th class="d-none d-sm-table-cell text-center" style="width: 10%;">action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Add Detail --}}
    <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetail" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Paket Detail</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="" name="frm_detail" id="frm_detail" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="peserta">Jumlah Peserta</label>
                                <input type="text" class="form-control" id="peserta" name="peserta"
                                    placeholder="Jumlah Peserta">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga Tour</label>
                                <input type="text" class="form-control input-currency" type-currency="IDR" id="harga"
                                    name="harga" placeholder="Rp">
                            </div>
                            <div class="form-group">
                                <label for="tujuan">Harga Tour Hotel</label>
                                <input type="text" class="form-control" id="harga_hotel" name="harga_hotel"
                                    placeholder="Disesuaikan">
                            </div>
                            <div class="form-group ">
                                <label class="col-form-label" for="wisata">Pilih Paket Detail<span
                                        class="text-danger">*</span>
                                </label>
                                <div class="s_wisata">
                                    <select class="form-control" id="wisata" name="wisata" style="width: 100%;"
                                        data-placeholder="Choose one..">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    </select>
                                </div>
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
    @include('admin.detail.javascript')
@endpush
