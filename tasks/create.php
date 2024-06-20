
<?php require('../includes/header.php');?> 
<?php require('../includes/navbar.php');?> 
  

    <section>
        <div class="container my-5">
            <div class="title">
                <h3>Add Task</h3>
            </div>

            <div class="row py-5">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" id="summernote" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <img src="https://dummyimage.com/800x300/dddddd/fff.png&text=Responsive+Image" class="img-fluid" alt="...">
                </div>
            </div>

        </div>
    </section>

<?php require('../includes/footer.php');?> 
   