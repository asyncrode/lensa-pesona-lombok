<script>
    $(document).ready(function() {
        var idEdit = 0;
        $('#video').change(function(){

            const input = $("#video")
            var files = input[0].files

            const reader = new FileReader();
            reader.onloadend = () => {
            $("#video-previews").attr("src", reader.result)
            }

            reader.readAsDataURL(files[0])

        });
        // Show Data
        var table = $('.tableVideo').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('video.admin.data') }}",
            'columnDefs': [{
                    "targets": [0, 2, 3], // your case first column
                    "className": "text-center"

                },
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
                    data: 'video',
                    name: 'video'
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

        // Create Modal
        $('#addVideo').click(function() {
            $('#frm_video').trigger("reset");
            $('#modalVideo').modal('show');
        });

        // Store Data
        $('#saveBtn').click(function(e) {
            var url;
            var type;
            e.preventDefault();
            let formData = new FormData($('#frm_video')[0])

            if (idEdit === 0) {
                url = "{{ route('video.admin.store') }}"
                type = "POST"
                console.log(formData)
            } else {
                url = "{{ route('video.admin.update', ':id') }}";
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
                contentType: false, // requires jQuery 1.6+
                processData: false,
                success: function(response) {
                    Swal.fire({
                        title: 'Berhasil !',
                        icon: 'success',
                        text: 'Berhasil',
                        showConfirmButton: true
                    })
                    idEdit = 0;
                    $('#frm_video').trigger("reset");
                    $('#modalVideo').modal('hide');
                    $('#video-previews').attr('src','');
                    table.draw()
                }
            })
        });
        // End Store Data


        // EDIT DATA
        $('body').on('click', '#edit', function() {
            var id = $(this).attr('data-id');
            var url = '{{ route('video.admin.edit', ':id') }}'
            url = url.replace(':id', id)

            $.ajax({
                type: 'GET',
                url: url,
                success: function(res) {
                    gambar = res.data.video;
                    base_url = 'http://localhost:8000/video/'+encodeURIComponent(res.data.video)+''

                    console.log(base_url)
                    idEdit = res.data.id;
                    $('#frm_video').trigger("reset");
                    $('#modalVideo').modal('show');
                    $('#judul').val(res.data.judul);
                    $("#video-previews").attr('src',base_url);
                    // $("div.s_video video")[0].play();
                    console.log(idEdit)

                }
            })
        })
        // END EDIT

        // Delete
        $('body').on('click', '#delete', function() {
            var id = $(this).attr('data-id');
            var url = '{{ route('video.admin.delete', ':id') }}';
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

    document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
        element.addEventListener('keyup', function(e) {
            let cursorPostion = this.selectionStart;
            let value = parseInt(this.value.replace(/[^,\d]/g, ''));
            let originalLenght = this.value.length;
            if (isNaN(value)) {
                this.value = "";
            } else {
                this.value = value.toLocaleString('id-ID', {
                    currency: 'IDR',
                    style: 'currency',
                    minimumFractionDigits: 0
                });
                cursorPostion = this.value.length - originalLenght + cursorPostion;
                this.setSelectionRange(cursorPostion, cursorPostion);
            }
        });
    });
</script>
