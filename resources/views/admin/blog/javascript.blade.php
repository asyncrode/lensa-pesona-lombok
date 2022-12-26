<script>
    $(document).ready(function() {
        var idEdit = 0;
        $('#foto').change(function() {

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });

        // Show Data
        var table = $('.tableBlog').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('blog.admin.data') }}",
            'columnDefs': [{
                    "targets": [0, 2, 3, 4, 5], // your case first column
                    "className": "text-center"

                },
                {
                    "targets": 3,
                    "render": function(data, type, row) {
                        return type === 'display' && data.length > 50 ? data.substr(0, 50) +
                            '…' : data;
                    }
                }
            ],
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'judul',
                    name: 'judul'
                },
                {
                    data: 'foto',
                    name: 'foto'
                },
                {
                    data: 'deskripsi',
                    name: 'deskripsi'
                },
                {
                    data: 'updated_at',
                    name: 'updated_at'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
        // End Show
        // inisiasi summernote
        $('#deskripsi').summernote();
        // Create Modal
        $('#addBlog').click(function() {
            $('#frm_blog').trigger("reset");
            $('#modalBlog').modal('show');
            $('#deskripsi').summernote('reset');
        });

        // Store Data
        $('#saveBtn').click(function(e) {
            var url;
            var type;
            e.preventDefault();
            var judul = $("#judul").val();
            var featured_image = $("#foto")[0].files[0];
            var formData = new FormData($('#frm_blog')[0]);
            formData.append("deskripsi", $('#deskripsi').summernote('code'));
            // formData.append('judul', judul);
            // formData.append('featured_image', featured_image);

            if (idEdit === 0) {
                url = "{{ route('blog.admin.store') }}"
                type = "POST"
            } else {
                url = "{{ route('blog.admin.update', ':id') }}";
                url = url.replace(':id', idEdit);
                type = "POST"
                console.log(formData)
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                type: type,
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    Swal.fire({
                        title: 'Berhasil !',
                        icon: 'success',
                        text: 'Berhasil',
                        showConfirmButton: true
                    })
                    idEdit = 0;
                    console.log($('#frm_blog').serialize())
                    $('#frm_blog').trigger("reset");
                    $('#modalBlog').modal('hide');
                    table.draw()
                }
            })
        });
        // End Store Data

        // EDIT DATA
        $('body').on('click', '#edit', function() {
            var id = $(this).attr('data-id');
            var url = '{{ route('blog.admin.edit', ':id') }}'
            url = url.replace(':id', id)

            $.ajax({
                type: 'GET',
                url: url,
                success: function(res) {
                    idEdit = res.data.id;
                    gambar = res.data.foto;
                    base_url = 'http://localhost:8000/blog/' + encodeURIComponent(res.data
                        .foto) + ''
                    idEdit = res.data.id;
                    $('#frm_blog').trigger("reset");
                    $('#modalBlog').modal('show');
                    $('#judul').val(res.data.judul);
                    $('#deskripsi').summernote('code', res.data.deskripsi);
                    $('#preview-image-before-upload').attr('src', base_url);
                    console.log(idEdit)

                }
            })
        })
        // END EDIT

        // Delete
        $('body').on('click', '#delete', function() {
            var id = $(this).attr('data-id');
            var url = '{{ route('blog.admin.delete', ':id') }}';
            url = url.replace(':id', id);
            Swal.fire({
                    title: 'Anda Yakin ?',
                    text: 'Data Yang Sudah Dihapus Tidak Akan Bisa Dikembalikan',
                    icon: 'warning',
                    showConfirmButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Tidak, Batalkan!',
                    allowOutsideClick: false,
                })
                .then((result) => {
                    if (result.value) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            type: 'DELETE',
                            url: url,
                            success: function(response) {

                                Swal.fire({
                                    title: 'Berhasil!',
                                    icon: 'success',
                                    text: 'Data Berhasil Di Hapus',
                                    showConfirmButton: true
                                })

                                table.draw()
                            }
                        })
                    } else {
                        Swal.close()
                    }
                })
        })
        // End Delete

    })
</script>
