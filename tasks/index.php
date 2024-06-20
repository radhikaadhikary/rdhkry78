<?php  require("../includes/header.php");?>
<?php  require("../includes/navbar.php");?>

    <section>
        <div class="container my-5">
            <div class="title">
                <h3>Manage Tasks</h3>
            </div>

            <div class="table-responsive py-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Title</th>
                            <th scope="col">Decription</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">1</td>
                            <td>R1C2</td>
                            <td>R1C3</td>
                            <td>
                                <a class="btn btn-primary btn-sm " href="#" role="button">Edit</a>
                                <a class="btn btn-info btn-sm " href="#" role="button">Show</a>
                                <a class="btn btn-danger btn-sm " href="#" role="button">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <?php  require("../includes/footer.php");?>