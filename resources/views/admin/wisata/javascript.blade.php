<script>
    $(document).ready(function(){
        var idEdit = 0;

        // Show Data
        var table = $('.tableWisata').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('wisata.admin.data') }}",
        'columnDefs': [
        {
            "targets": [0,3], // your case first column
            "className": "text-center"
            
        },
        {
            "targets": 4,
            "render": 
            function (data, type, row) {
            return type === 'display' && data.length > 50 ? data.substr(0, 50) + '…' : data;
        }
        }],
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nama', name: 'nama'},
            {data: 'harga', name: 'harga'},
            {data: 'tujuan', name: 'tujuan'},
            {data: 'deskripsi', name: 'deskripsi'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
        // End Show
        // inisiasi summernote
        $('#deskripsi').summernote();
        // Create Modal
        $('#addWisata').click(function () {
            $('#frm_wisata').trigger("reset");
            $('#modalWisata').modal('show');
        });

        // Store Data
        $('#saveBtn').click(function(){
            var url;
            var type;
            
            if(idEdit === 0)
            {
                url = "{{ route('wisata.admin.store') }}"
                type = "POST"
            }else{

                url = '{{ route("wisata.admin.update", ":id") }}';
                url = url.replace(':id', idEdit );
                
                
                type = "PUT"
            }
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : "{{csrf_token()}}"
                },
                type : type,
                url : url,
                data : $('#frm_wisata').serialize(),
                success : function(response){
                    Swal.fire({
                        title : 'Berhasil !',
                        icon: 'success',
                        text  : 'Berhasil',
                        showConfirmButton : true
                    })
                    idEdit = 0;
                    console.log($('#frm_wisata').serialize())
                    $('#frm_wisata').trigger("reset");
                    $('#modalWisata').modal('hide');
                    table.draw()
                }
            })
        });
        // End Store Data

        
        // EDIT DATA
        $('body').on('click','#edit',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("wisata.admin.edit",":id") }}'
            url = url.replace(':id',id)

            $.ajax({
                type : 'GET',
                url : url,
                success:function(res){
                    console.log(res)
                    idEdit = res.data.id;
                    $('#frm_wisata').trigger("reset");
                    $('#modalWisata').modal('show');
                    $('#nama').val(res.data.nama);
                    $('#harga').val(res.data.harga);
                    $('#tujuan').val(res.data.tujuan);
                    $('#deskripsi').summernote('code',res.data.deskripsi);
                    console.log(idEdit)

                }
            })
        })
        // END EDIT
        
        // Delete
        $('body').on('click','#delete',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("wisata.admin.delete", ":id") }}';
            url = url.replace(':id', id );
            Swal.fire({
                title : 'Anda Yakin ?',
                text  : 'Data Yang Sudah Dihapus Tidak Akan Bisa Dikembalikan',
                icon  : 'warning',
                showConfirmButton : true,
                showCancelButton :true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Tidak, Batalkan!',
                allowOutsideClick: false,
            })
            .then((result)=>{
                if(result.value) {
                    $.ajax({
                        headers:{
                            'X-CSRF-TOKEN' : '{{csrf_token()}}'
                        },
                        type : 'DELETE',
                        url:url,
                        success:function(response){
                        
                            Swal.fire({
                                title: 'Berhasil!',
                                icon : 'success',
                                text : 'Data Berhasil Di Hapus',
                                showConfirmButton :true
                            })
                        
                            table.draw()
                        }
                    })
                }else{
                    Swal.close()
                }
            })
        })
    // End Delete

    })
</script>