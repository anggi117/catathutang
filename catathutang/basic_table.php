<?php require_once ('footer.php'); ?>
<style type="text/css">
    .link {
        word-spacing: 10px;
    }
</style>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Basic table
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Nama</th>
            <th data-breakpoints="xs">Jumlah</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">No. HP</th>
            <th data-breakpoints="xs"></th>

          </tr>

        </thead>
        <tbody>
        <?php 
            $result = $connect->query('SELECT * FROM hutang');
            while($row = $result->fetch(PDO::FETCH_OBJ)): ?>
          <tr data-expanded="true">
            <td><?= $row->id ?> </td>
            <td><?= $row->nama ?> </td>
            <td> Rp. <?= $row->jumlah ?></td>
            <td> <?= $row->hp ?></td>
            <td><a href= "edit.php?id=<?= $row->id ?>">Edit</a>   |
                <a href="delete.php?id=<?= $row->id ?>">Delete</a></td>
          </tr>

        <?php endwhile; ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
