<script>
    // daily
    daily(<?= $dataDaily ?>);
    setTableDaily(<?= $dataDaily ?>);
    //daily
    comparing(<?= $dataDaily ?>); //comparing

    // end daily
</script>



<script>
    // daily
   pencapaian_user(<?= $datapencapaian_user ?>);

    //daily

    // end daily
</script>


<script>
    //mau
    mau(<?= $dataMAU ?>);
    setTableMau(<?= $dataMAU ?>);


    $('#restore-mau').on('click', function() {
        mau(<?= $dataMAU ?>);
        setTableMau(<?= $dataMAU ?>);
    });
</script>

<script>
    //merchant
    merchant(<?= $dataMerchant ?>);
    setTableMerchant(<?= $dataMerchant ?>);

    $('#restore-merchant').on('click', function() {

        merchant(<?= $dataMerchant ?>);
        setTableMerchant(<?= $dataMerchant ?>);
    });
</script>

<script>
    $('#btn-search-daily').on('click', function() {
        var date = $('#daily-date').val();
        if (!date) {
            $('#alert-daily').removeClass('d-none');
        } else {
            $('#alert-daily').addClass('d-none');
            $.ajax({
                url: 'http://localhost/client/grafik_kurniadisan/process/searchDaily.php',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    'date': date
                },
                success: function(data) {
                    daily(data);
                    setTableDaily(data);
                    comparing(data);
                }
            });
        }
    });

    $('#btn-search-mau').on('click', function() {
        var date = $('#mau-month').children("option:selected").val();
        if (!date) {
            $('#alert-mau').removeClass('d-none');
        } else {
            $('#alert-mau').addClass('d-none');
            $.ajax({
                url: 'http://localhost/client/grafik_kurniadisan/process/searchMau.php',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    'month': date
                },
                success: function(data) {
                    mau(data);
                    setTableMau(data);
                }
            });
        }
    });

    $('#btn-search-merchant').on('click', function() {
        var date = $('#merchant-date').val();
        if (!date) {
            $('#alert-merchant').removeClass('d-none');
        } else {
            $('#alert-merchant').addClass('d-none');
            $.ajax({
                url: 'http://localhost/client/grafik_kurniadisan/process/searchMerchant.php',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    'date': date
                },
                success: function(data) {
                    merchant(data);
                    setTableMerchant(data);
                }
            });
        }
    });
</script>