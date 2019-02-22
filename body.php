<div class="row">
<div class="col s12 m12">
  <div class="card">
    <div class="card-content">

      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s3"><a href="#succeed">Backup Succeeded</a></li>
            <li class="tab col s3"><a href="#failed">Backup Failed</a></li>
          </ul>
        </div>
        <div id="succeed" class="col s12">
          <?php require $files['backup-succeeded']; ?>
        </div>
        <div id="failed" class="col s12">
          <?php require $files['backup-failed']; ?>
        </div>
      </div>

    </div>
  </div>
</div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="jquery-2.1.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
  $(document).ready(function(){
    $('.tabs').tabs();
	
	$('body').materialScrollTop();
  });
</script>