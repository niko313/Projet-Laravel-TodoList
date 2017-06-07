<?php
$data ='test';
?>
@section('body')
<script data-main="js/main" src="js/libs/require/require.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  {{HTML::todoview($data)}}
  <!-- /.content -->
</div>

<!-- /.content-wrapper -->
@stop
