<script>
    $(document).ready(function() {
        var idEdit = 0;

        // Show Data
        var table = $('.tableDetail').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('detail.admin.data') }}",
            'columnDefs': [{
                    "targets": [0,1, 2, 3, 5], // your case first column
                    "className": "text-center"

                },
            ],
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'id_wisata',
                    name: 'id_wisata'
                },
                {
                    data: 'jmlPeserta',
                    name: 'jmlPeserta'
                },
                {
                    data: 'hrgTour',
                    name: 'hrgTour'
                },
                {
                    data: 'hrgTourHotel',
                    name: 'hrgTourHotel'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
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

        // Get Wisata
        $.ajax({
            url:"{{ route('detail.admin.wisata') }}",
            type:'GET',
            success:function(data){
                console.log(data)
                $.each(data,function(key, value)
                {
                    $("#wisata").append('<option value=' + value.id + '>' + value.nama + '</option>');
                });
            }
        })
        // End Wisata

        // Create Modal
        $('#addDetail').click(function() {
            $('#frm_detail').trigger("reset");
            $('#modalDetail').modal('show');
        });

        // Store Data
        $('#saveBtn').click(function() {
            var url;
            var type;

            if (idEdit === 0) {
                url = "{{ route('detail.admin.store') }}"
                type = "POST"
            } else {

                url = '{{ route('detail.admin.update', ':id') }}';
                url = url.replace(':id', idEdit);


                type = "PUT"
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                type: type,
                url: url,
                data: $('#frm_detail').serialize(),
                success: function(response) {
                    Swal.fire({
                        title: 'Berhasil !',
                        icon: 'success',
                        text: 'Berhasil',
                        showConfirmButton: true
                    })
                    idEdit = 0;
                    console.log($('#frm_detail').serialize())
                    $('#frm_detail').trigger("reset");
                    $('#modalDetail').modal('hide');
                    table.draw()
                }
            })
        });
        // End Store Data
        
        
        // EDIT DATA
        $('body').on('click', '#edit', function() {
            var id = $(this).attr('data-id');
            var url = '{{ route('detail.admin.edit', ':id') }}'
            url = url.replace(':id', id)

            $.ajax({
                type: 'GET',
                url: url,
                success: function(res) {
                    console.log(res)
                    idEdit = res.data.id;
                    $('#frm_detail').trigger("reset");
                    $('#modalDetail').modal('show');
                    $('#peserta').val(res.data.jmlPeserta);
                    $('#harga').val(res.data.hrgTour);
                    $('#harga_hotel').val(res.data.hrgTourHotel);
                    $("#wisata").empty()
                    $("div.s_wisata select").val(res.wisata).change();
                       
                    // $("#admin").append('<option value="'+res.data.id+'">Default=='+data.default.name+'</option>');
                    $.each(res.wisata,function(key, value)
                    {
                        $("#wisata").append('<option value=' + value.id + '>' + value.nama + '</option>');
                    });
                    console.log(res.wisata)

                    

                }
            })
        })
        // END EDIT

        // Delete
        $('body').on('click', '#delete', function() {
            var id = $(this).attr('data-id');
            var url = '{{ route('detail.admin.delete', ':id') }}';
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