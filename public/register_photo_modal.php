<?php

if(count($_POST) && isset($_POST['add_photo'])){

    

}

?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar foto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="post" action="">
                    <div>
                        <label for="" class="form-label">Descrição da imagem</label>
                        <input type="text" name="description" value="<?php if(!isset($_POST['photo'])) echo $_POST['description'];  ?>" />
                    </div>
                    <div>
                        <label for="form-label">Selecione sua imagem</label> <br>
                        <input type="file" name="photo">
                    </div>
                    <button name="add_photo" type="submit">Adicionar foto</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>