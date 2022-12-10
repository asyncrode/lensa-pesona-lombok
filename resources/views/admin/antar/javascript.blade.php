<script>
    $(document).ready(function() {
        var idEdit = 0;

        // Show Data
        var table = $('.tableAntar').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('antar.admin.data') }}",
            'columnDefs': [{
                    "targets": [0, 3, 4, 5, 6], // your case first column
                    "className": "text-center"

                },
                {
                    "targets": 4,
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
                    data: 'dari',
                    name: 'dari'
                },
                {
                    data: 'menuju',
                    name: 'menuju'
                },
                {
                    data: 'avanza',
                    name: 'avanza'
                },
                {
                    data: 'innova',
                    name: 'innova'
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
        $('#addAntar').click(function() {
            $('#frm_antar').trigger("reset");
            $('#modalAntar').modal('show');
        });

        // Store Data
        $('#saveBtn').click(function() {
            var url;
            var type;

            if (idEdit === 0) {
                url = "{{ route('antar.admin.store') }}"
                type = "POST"
            } else {

                url = '{{ route('antar.admin.update', ':id') }}';
                url = url.replace(':id', idEdit);


                type = "PUT"
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                type: type,
                url: url,
                data: $('#frm_antar').serialize(),
                success: function(response) {
                    Swal.fire({
                        title: 'Berhasil !',
                        icon: 'success',
                        text: 'Berhasil',
                        showConfirmButton: true
                    })
                    idEdit = 0;
                    console.log($('#frm_antar').serialize())
                    $('#frm_antar').trigger("reset");
                    $('#modalAntar').modal('hide');
                    table.draw()
                }
            })
        });
        // End Store Data


        // EDIT DATA
        $('body').on('click', '#edit', function() {
            var id = $(this).attr('data-id');
            var url = '{{ route('antar.admin.edit', ':id') }}'
            url = url.replace(':id', id)

            $.ajax({
                type: 'GET',
                url: url,
                success: function(res) {
                    console.log(res)
                    idEdit = res.data.id;
                    $('#frm_antar').trigger("reset");
                    $('#modalAntar').modal('show');
                    $('#dari').val(res.data.dari);
                    $('#menuju').val(res.data.menuju);
                    $('#avanza').val(res.data.avanza);
                    $('#innova').val(res.data.innova);
                    console.log(idEdit)

                }
            })
        })
        // END EDIT

        // Delete
        $('body').on('click', '#delete', function() {
            var id = $(this).attr('data-id');
            var url = '{{ route('antar.admin.delete', ':id') }}';
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
