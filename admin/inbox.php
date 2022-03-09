<?php include("../admin/header.php"); ?>

<div class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">

                    <div class="card-header text-capitalize text-center" style=" font-weight:bold">All Users List</div>

                    <div class="card-body">
                        <table class="table table-striped text-center">

                            <tr>
                                <th scope="col">Sl No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">body</th>
                                <th>Date</th>
                                <th scope="col">Action</th>
                            </tr>
                            <?php
                            $query = "SELECT * FROM tbl_contact WHERE  status='0'  ORDER BY id DESC";
                            $contact = $db->select($query);
                            if ($contact) {
                                $i = 0;
                                while ($result = $contact->fetch_assoc()) {
                                    $i++;


                            ?>

                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $result['name']; ?></td>
                                    <td><?php echo $result['email']; ?></td>
                                    <td><?php echo $result['subject']; ?></td>
                                    <td><?php echo $fm->textShorten($result['body']); ?></td>
                                    <td><?php echo  $fm->formatDate($result['date']); ?></td>

                                    <td>


                                        <a href="" class="btn btn-info">View</a>

                                        <a href="" class="btn btn-success">Replay</a>



                                    </td>

                                    </tr>
                            <?php }
                            } ?>

                        </table>
                    </div>

                </div>

            </div>

        </div>
        <div class="row pt-5">
            <div class="col-xl-12">
                <div class="card">

                    <div class="card-header text-capitalize text-center" style=" font-weight:bold">All Seen Message</div>

                    <div class="card-body">
                        <table class="table table-striped text-center">

                            <tr>
                                <th scope="col">Sl No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">body</th>
                                <th>Date</th>
                                <th scope="col">Action</th>
                            </tr>

                            <?php



                            ?>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>



                                <a href="" class="btn btn-danger">Delete</a>

                            </td>
                            </td>
                            </tr>

                        </table>
                    </div>

                </div>

            </div>

        </div>
    </div>

    </script>
    <?php include("../admin/footer.php"); ?>