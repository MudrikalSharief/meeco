<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Contacts</h4>
            </div>
        </div>
    </div>
    <div class="modal-container"></div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <?php
                            // require_once '../classes/account.class.php';
                            // $accountObj = new Account();
                        ?>
                        <div class="d-flex justify-content-center align-items-center">
                             <form class="d-flex me-2">
                                <div class="input-group w-100">
                                    <input type="text" class="form-control form-control-light" id="custom-search" placeholder="Search user...">
                                    <span class="input-group-text bg-primary border-primary text-white brand-bg-color">
                                        <i class="bi bi-search"></i>
                                    </span>
                                </div>
                            </form> 

                        </div>
                        <div class="page-title-right d-flex align-items-center"> 
                                <a id="add-account" href="#" class="btn btn-primary brand-bg-color">Add Admin</a>
                            </div>                
                    </div>
                    
                    <div class="table-responsive">
                        <table id="table-account" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Gmail</th>
                                    <th>Contact Date</th>
                                    <th>Issue</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             
                                <tr>
                                        <td>1</td>
                                        <td>Sharief Mudrikal</td>
                                        <td>shariefkundo@gmail.com</td>
                                        <td>10-10-24</td>
                                        <td class="status">Issue-here</td>
                                        <td class="td-centered"><img class="action icon-red" src="../img/icons/delete.svg" alt=""></td>
                                </tr>

                                <tr>
                                        <td>2</td>
                                        <td>Jomark Abello</td>
                                        <td>jomarkabello@gmail.com</td>
                                        <td>10-09-24</td>
                                        <td class="status">Issue-here</td>
                                        <td class="td-centered"><img class="action icon-red" src="../img/icons/delete.svg" alt=""></td>
                                </tr>

                                <tr>
                                        <td>3</td>
                                        <td>Elousa Marcelino</td>
                                        <td>elousamarcelino@gmail.com</td>
                                        <td>10-09-24</td>
                                        <td class="status">Issue-here</td>
                                        <td class="td-centered"><img class="action icon-red" src="../img/icons/delete.svg" alt=""></td>
                                </tr>

                                <tr>
                                        <td>4</td>
                                        <td>Anthony Huesca</td>
                                        <td>anthonyhuesca@gmail.com</td>
                                        <td>10-08-24</td>
                                        <td class="status">Issue-here</td>
                                        <td class="td-centered"><img class="action icon-red" src="../img/icons/delete.svg" alt=""></td>
                                </tr>

                                <tr>
                                        <td>5</td>
                                        <td>Yousef Badua</td>
                                        <td>yousefbadua@gmail.com</td>
                                        <td>10-07-24</td>
                                        <td class="status">Issue-here</td>
                                        <td class="td-centered"><img class="action icon-red" src="../img/icons/delete.svg" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
