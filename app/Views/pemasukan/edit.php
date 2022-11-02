<div class="p-4" style="margin-top:100px;">
    <form action="/update/<?= $id_pemasukan ?>" method="post">
        <div class="mb-3">
            <label for="jumlah_pemasukan" class="form-label">Jumlah</label>
            <input type="text" name="jumlah_pemasukan" class="form-control" id="jumlah_pemasukan" value="<?= $jumlah_pemasukan ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<div>