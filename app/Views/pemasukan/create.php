<?= $this->extend('templates/template2'); ?>
<?= $this->section('content'); ?>

<div class="container" style="margin-top:100px;">
    <div class="row">
        <div class="p-4">
            <form action="/store" method="post">
                <div class="mb-3">
                    <label for="jumlah_pemasukan" class="form-label">Jumlah</label>
                    <input type="text" name="jumlah_pemasukan" class="form-control" id="jumlah_pemasukan">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endsection('content'); ?>
