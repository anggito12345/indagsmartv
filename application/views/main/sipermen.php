
<div class="page has-sidebar-left">
    <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort my-3">
            <table id="sipermen-table" class="table table-bordered table-hover"></table>
        </div>
    </div>
</div>

<script>
    $(document).ready(() => {
        $('#sipermen-table').DataTable({
            ajax: {
                url: '<?= base_url('assets/dummies/pengaduan.json'); ?>?_=' + new Date().getTime(),
                dataType: 'json',
                dataSrc: ''
            },
            columns:[
                {
                    data: "nama",
                    title: "Nama"
                },
                {
                    data: "alamat",
                    title: "Alamat",
                },
                {
                    data: "telp",
                    title: "Telp",
                },
                {
                    data: "hp",
                    title: "Hp",
                },
                {
                    data: "email",
                    title: "Email",
                },
                {
                    data: "keluhan",
                    title: "Keluhan",
                },
                {
                    data: "tgl_keluhan",
                    title: "Tanggal Keluhan",
                },
                {
                    data: "tgl_tindak_lanjut",
                    title: "Tanggal Tindak Lanjut",
                },
                {
                    data: "tindak_lanjut",
                    title: "Tindak Lanjut",
                },
                {
                    data: "status",
                    title: "Status",
                },
            ]
        })
    })
</script>