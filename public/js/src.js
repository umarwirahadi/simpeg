$(document).ready(function(){
    var datasite=$('body').attr('data-site');
    const token = $("meta[name='csrf-token']").attr("content");

    $("#data-pegawai").DataTable({
        processing: true,
        serverSide: true,
        ajax: datasite + "/data-pegawai",
        columns: [
          { data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false },
          { data: 'nip', name: 'nip' },
          { data: 'nama_lengkap', name: 'nama_lengkap' },
          { data: 'no_ktp', name: 'no_ktp' },
          { data: 'jenis_kelamin', name: 'jenis_kelamin' },
          { data: 'status_pegawai', name: 'status_pegawai' },
          { data: 'no_hp', name: 'no_hp' },
          { data: 'aksi', name: 'aksi'}
        ],
        "buttons": ["excel"],
        initComplete: function () {
          var input = $('.dataTables_filter input').unbind(),
            self = this.api(),
            $searchButton = $('<button class="btn btn-success btn-sm m-2">')
              .text('Cari')
              .click(function () {
                self.search(input.val()).draw();
              }),
            $clearButton = $('<button class="btn btn-danger btn-sm">')
              .text('Reset')
              .click(function () {
                input.val('');
                $searchButton.click();
              })
          $('.dataTables_filter').append($searchButton, $clearButton);
        },
        "responsive": true, "lengthChange": true, "autoWidth": true, "searching": true, "filter": true, "info": true,
        "language": {
          "lengthMenu": " _MENU_ data",
          "zeroRecords": "Data kosong",
          "info": "Showing page _PAGE_ of _PAGES_",
          "infoEmpty": "Data tidak ditemukan",
          "infoFiltered": "(filtered from _MAX_ total records)"
        },
        scrollY: 500,
        scroller: {
          loadingIndicator: true
        }
      });


    $("#add-form-pegawai").on("submit",function(e){
        e.preventDefault();
        var formData=$(this).serialize();
        $.ajax({
        url:datasite+'/pegawai',
        type:'POST',
        data:formData,
        dataType:'json',
        success:function(data){
            if (data.status === 1) {
                Swal.fire({
                  title: 'Success',
                  text: data.message,
                  icon: 'success',
                  confirmButtonText: 'Ok'
                }).then((data2) => {
                  window.location.href = datasite + '/pegawai';
                })
              } else {
                Swal.fire({
                  title: 'error',
                  text: data.message,
                  icon: 'error'
                })
              }
        },
        error:function(a){
            if(a.status==422){
                $.each(a.responseJSON.data, function (i, v) {
                  PNotify.error({
                    title: 'error',
                    text: v,
                  });
                });
              }
        }
        });
    });


    $("#data-pegawai").on("click", ".delete-data-pegawai",function () {
        var dataID = $(this).data('id');
        const token = $("meta[name='csrf-token']").attr("content");
        Swal.fire({
          title: 'Yakin data pegawai akan dihapus ?',
          text: "harap diperhatikan apakah anda benar-benar ingin menghapus data ini",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: datasite + '/pegawai/' + dataID,
              type: 'DELETE',
              data: { "id": dataID, "_token": token },
              dataType: 'json',
              success: function (data) {
                if (data.status === 1) {
                  Swal.fire({
                    title: 'Success',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'Ok'
                  }).then(() => {
                    window.location.href = datasite + '/pegawai';
                  })
                } else {
                  Swal.fire({
                    title: 'error',
                    text: data.message,
                    icon: 'error'
                  })
                }
              }
            })
          }
        })
      });

      $("#edit-form-pegawai").on("submit",function(e){
        e.preventDefault();
        var formData=$(this).serialize();
        var id_data=$("#idpegawai").val();
        $.ajax({
        url:datasite+'/pegawai/'+id_data,
        type:'PUT',
        data:formData,
        dataType:'json',
        success:function(data){
            if (data.status === 1) {
                Swal.fire({
                  title: 'Success',
                  text: data.message,
                  icon: 'success',
                  confirmButtonText: 'Ok'
                }).then((data2) => {
                  window.location.href = datasite + '/pegawai';
                })
              } else {
                Swal.fire({
                  title: 'error',
                  text: data.message,
                  icon: 'error'
                })
              }
        },
        error:function(a){
            if(a.status==422){
                $.each(a.responseJSON.data, function (i, v) {
                  PNotify.error({
                    title: 'error',
                    text: v,
                  });
                });
              }
        }
        });
    });


    // module item
    $("#data-item").DataTable({
        processing: true,
        serverSide: true,
        ajax: datasite + "/data-item",
        columns: [
          { data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false },
          { data: 'kode', name: 'kode' },
          { data: 'item', name: 'item' },
          { data: 'kategori', name: 'kategori' },
          { data: 'status', name: 'status' },
          { data: 'aksi', name: 'aksi',orderable: false, searchable: false }
        ],
        dom:'frBtip',
        "buttons": ["excel","print","copy"],
        initComplete: function () {
          var input = $('.dataTables_filter input').unbind(),
            self = this.api(),
            $searchButton = $('<button class="btn btn-success btn-sm m-2">')
              .text('Cari')
              .click(function () {
                self.search(input.val()).draw();
              }),
            $clearButton = $('<button class="btn btn-danger btn-sm">')
              .text('Reset')
              .click(function () {
                input.val('');
                $searchButton.click();
              })
          $('.dataTables_filter').append($searchButton, $clearButton);
        },
        "responsive": true, "lengthChange": true, "autoWidth": true, "searching": true, "filter": true, "info": true,
        "language": {
          "lengthMenu": " _MENU_ data",
          "zeroRecords": "Data kosong",
          "info": "Showing page _PAGE_ of _PAGES_",
          "infoEmpty": "Data tidak ditemukan",
          "infoFiltered": "(filtered from _MAX_ total records)"
        },
        scrollY: 500,
        scroller: {
          loadingIndicator: true
        }
      });

      $("#add-form-item").on("submit",function(e){
        e.preventDefault();
        var formData=$(this).serialize();
        $.ajax({
        url:datasite+'/item',
        type:'POST',
        data:formData,
        dataType:'json',
        success:function(data){
            if (data.status === 1) {
                Swal.fire({
                  title: 'Success',
                  text: data.message,
                  icon: 'success',
                  confirmButtonText: 'Ok'
                }).then((data2) => {
                  window.location.href = datasite + '/item';
                })
              } else {
                Swal.fire({
                  title: 'error',
                  text: data.message,
                  icon: 'error'
                })
              }
        },
        error:function(a){
            if(a.status==422){
                $.each(a.responseJSON.data, function (i, v) {
                  PNotify.error({
                    title: 'error',
                    text: v,
                  });
                });
              }
        }
        });
    });
    $("#edit-form-item").on("submit",function(e){
        e.preventDefault();
        var formData=$(this).serialize();
        var id_data=$("#id_data").val();
        $.ajax({
        url:datasite+'/item/'+id_data,
        type:'PUT',
        data:formData,
        dataType:'json',
        success:function(data){
            if (data.status === 1) {
                Swal.fire({
                  title: 'Success',
                  text: data.message,
                  icon: 'success',
                  confirmButtonText: 'Ok'
                }).then((data2) => {
                  window.location.href = datasite + '/item';
                })
              } else {
                Swal.fire({
                  title: 'error',
                  text: data.message,
                  icon: 'error'
                })
              }
        },
        error:function(a){
            if(a.status==422){
                $.each(a.responseJSON.data, function (i, v) {
                  PNotify.error({
                    title: 'error',
                    text: v,
                  });
                });
              }
        }
        });
    });

    $("#data-item").on("click", ".delete-data-item",function () {
        var dataID = $(this).data('id');
        const token = $("meta[name='csrf-token']").attr("content");
        Swal.fire({
          title: 'Yakin data item akan dihapus ?',
          text: "harap diperhatikan apakah anda benar-benar ingin menghapus data ini",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: datasite + '/item/' + dataID,
              type: 'DELETE',
              data: { "id": dataID, "_token": token },
              dataType: 'json',
              success: function (data) {
                if (data.status === 1) {
                  Swal.fire({
                    title: 'Success',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'Ok'
                  }).then(() => {
                    window.location.href = datasite + '/item';
                  })
                } else {
                  Swal.fire({
                    title: 'error',
                    text: data.message,
                    icon: 'error'
                  })
                }
              }
            })
          }
        })
      });
});
