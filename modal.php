<!-- Modal Edit-->
<div class="modal fade" id="editModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
        <form action="?id=<?=$value['id'] ?>" method="post">
          <div class="form-group">
	        		<input type="text" class="form-control" name="edit_name" value="<?=$value['name'] ?>" placeholder="ФИО">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="edit_theme" value="<?=$value['theme'] ?>" placeholder="Тема">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="edit_zadacha" value="<?=$value['zadacha'] ?>" placeholder="Задача">
	        	</div>
				<div class="form-group">
	        		<input type="text" class="form-control" name="edit_date" value="<?=$value['date'] ?>" placeholder="Дата">
	        	</div>
				<div class="form-group">
	        		<input type="text" class="form-control" name="edit_score" value="<?=$value['score'] ?>" placeholder="Баллы">
	        	</div>
        	<div class="modal-footer">
        		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="?id=<?=$value['id'] ?>" method="post">
        	<button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
    	</form>
      </div>
    </div>
  </div>
</div>
