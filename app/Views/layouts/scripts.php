<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>        -->
        <script src="/admin/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/admin/assets/demo/chart-area-demo.js"></script>
        <script src="/admin/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="/admin/js/datatables-simple-demo.js"></script>

<script type="text/javascript">
    $('.detailbutton').on('click', function(){
        let title = $(this).data('title');
        let foto  = $(this).data('img');
        let desc  = $(this).data('desc');
        let seniman = $(this).data('seniman');
        let tahun = $(this).data('tahun');

        $('#exampleModal').modal('show');
        $('#showtitle').html(title);
        $('#showimg').attr('src',foto);
        $('#showdesc').html(desc);
        $('#showseniman').html(seniman);
        $('#showtahun').html(tahun);

    });
    $('#closemodal').on('click', function(){
        
        $('#exampleModal').modal('hide');
    });
</script>