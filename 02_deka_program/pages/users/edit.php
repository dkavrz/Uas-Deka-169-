<?php
        // koneksi
        require_once '../../koneksi.php';
        $id = intval($_GET['id']);
        $data = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT nama,tujuan,tanggal FROM pesan WHERE id=$id "));
        // var_dump($sql);
        ?>
<!-- Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editUserModalLabel">Ubah Keberangkatan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="form-user-edit">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?=$id?>">
      <div class="modal-body">
       
 
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" value="<?=$data['nama']?>">
        </div>
        <div class="form-group">
           <label for="Tujuan">Pilih Tujuan</label>
          <select id="Tujuan" name="tujuan" class="form-control" required>
            <option value="">Pilih Tujuan</option>
            <option value="concert in the park">Concert in the Park</option>
              <option value="comedy night">Comedy Night</option>
              <option value="theater play">Theater Play</option>
              <option value="fight show">Fight Show</option>
              <option value="culture events">Culture Events</option>
              <option value="art exhibitions">Art Exhibitions</option>
         </select>
</div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="<?=$data['tanggal']?>" placeholder="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
 
<script>
    $('#form-user-edit').submit(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "pages/users/proses.php",
            data: $(this).serialize(),
            dataType: "json",
            success: function (res) {
                // console.log(res);
                if (res.status==true) {
                    Notiflix.Notify.success(res.msg);
                    $('#editUserModal').modal('hide');
                    UserPage()
                }
                // jika false
                if (res.status==false) {
                    Notiflix.Notify.failure(res.msg);
                }
            }
        });
   
        
    });
</script>