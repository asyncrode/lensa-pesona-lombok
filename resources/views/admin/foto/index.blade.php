@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Daftar Foto</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <button type="button" id="addFoto" data-toggle="modal" data-target="#modalFoto"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Tambah Foto</button>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableFoto">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center" style="width: 5%;">no</th>
                            <th class="d-none d-sm-table-cell text-center">lokasi</th>
                            <th class="d-none d-sm-table-cell text-center" style="width: 20%;">foto</th>
                            <th class="d-none d-sm-table-cell text-center" style="width: 10%;">Tanggal</th>
                            <th class="d-none d-sm-table-cell text-center" style="width: 10%;">action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Modal Add Foto --}}
<div class="modal fade" id="modalFoto" tabindex="-1" role="dialog" aria-labelledby="modalFoto" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Paket Foto</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_foto" id="frm_foto" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi">
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Upload Foto</label>
                                <input type="file" name="foto" placeholder="Choose image" id="foto">
                                @error('foto')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <img id="preview-image-before-upload"
                                src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image"
                                style="max-height: 250px;">
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
@include('admin.foto.javascript')
@endpush
