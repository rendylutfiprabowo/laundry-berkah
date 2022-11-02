<div class="p-4" style="margin-top:100px;">
    <a href="/create" type="button" class="btn btn-primary mb-3">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID Pemasukan</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($pemasukan as $masuk) : ?>
            <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $masuk['id_pemasukan'] ?></td>
                <td><?= $masuk['created_at'] ?></td>
                <td><?= $masuk['jumlah_pemasukan'] ?></td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-warning me-3" href="/edit/<?= $masuk['id_pemasukan'] ?>">Edit</a>
                        <form action="/delete/<?= $masuk['id_pemasukan'] ?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php $no++; endforeach;?>
        </tbody>
    </table>
<div>