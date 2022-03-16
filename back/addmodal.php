<div class="model" id="modalAddCours">
<div class="modal-dialog" id="dark">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add students</h4>
            </div>
            <div class="modal-body d-flex justify-content-center align-item-center" style="flex-direction: column;">
            <h1>Formulaire d'ajout</h1>
             <form method="POST" enctype="multipart/form-data" action="add.php">
               <fieldset> 
                <div class="form-group">
                   <label for="img">Entrez votre image</label>
                   <input type="file" class="form-control" alt="profile picture"  name="img">
                 </div>   
                 <div class="form-group">
                   <label for="name"> nom</label>
                   <input type="text" class="form-control"  placeholder="Entrez votre nom" name="name">
                 </div>
                 <div class="form-group">
                   <label for="email"> email</label>
                   <input type="email" class="form-control"  placeholder="user@email.com" name="email">
                 </div>
                 <div class="form-group">
                   <label for="phone"> phone</label>
                   <input type="text" class="form-control"  placeholder="123XXXXXXXXXX" name="phone">
                 </div>
                 <div class="form-group">
                   <label for="enroll_number"> enroll number</label>
                   <input type="text" class="form-control"  placeholder="123XXXXXXXXXX" name="enroll_number">
                 </div>
                 <div class="form-group">
                   <label for="date_of_admission"> date d'admission</label>
                   <input type="date" class="form-control"  placeholder="123XXXXXXXXXX" name="date_of_admission">
                 </div>
                 <input id="submit"
                 class="btn btn-info my-3 px-5" type="submit"
                        name="submit" value="submit"
                        onclick="on_submit()"> 
                 
               </fieldset>
             </form>
             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger hideModel"  data-bs-dismiss="modal">Close</button>
            </div>
        </div>
</div>
</div>