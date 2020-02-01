<form action="" method="post">
  <div class="modal fade" id="deleteModal<?php echo $render_id ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
  aria-hidden="true">
    <div class="modal-dialog modal-md modal-notify modal-danger" role="document">
      <!--Content-->
      <div class="modal-content text-center">
        <!--Header-->
        <div class="modal-header d-flex justify-content-center">
          <p class="heading">Do you want to delete the render of <?php echo $id_name; ?>?</p>
        </div>

        <div class="modal-body">

          <i class="fas fa-times fa-4x animated rotateIn"></i>

        </div>

        <div class="modal-footer flex-center">
          <a href="delete_render.php?id=<?php echo $render_id ?>"><button type="button" class="btn btn-outline-danger">Yes</button></a>
          <a type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No</a>
        </div>
      </div>
    </div>
  </div>
</form>
