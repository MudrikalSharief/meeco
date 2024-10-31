<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Accounts</h4>
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
                           
                            <div class="d-flex align-items-center">
                                <label for="role-filter" class="me-2">Status</label>
                                <select id="role-filter me-2" class="form-select me-2">
                                    <option value="choose">All</option>
                                    <option value="">Active</option>
                                    <option value="">Inactive</option>]
                                    <?php
                                        // $roleList = $accountObj->get_role();
                                        // foreach ($roleList as $rol) {
                                    ?>
                                        <!-- <option value="<?= $none//$rol['role']?>"><?=$none //$rol['role'] ?></option> -->
                                    <?php
                                        // }
                                    ?>
                                </select>
                            </div>

                            <div class="d-flex align-items-center">
                                <label for="role-filter" class="me-2">Promo</label>
                                <select id="role-filter" class="form-select  me-2">
                                    <option value="choose">All</option>
                                    <option value="">Guest</option>
                                    <option value="">Casual</option>
                                    <option value="">Regular</option>
                                    <option value="">VIP</option>
                                </select>
                            </div>

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
                                <a id="add-account" href="#" class="btn btn-primary brand-bg-color">Add User</a>
                            </div>                
                    </div>
                    
                    <div class="table-responsive">
                        <table id="table-account" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Gmail</th>
                                    <th>Joined</th>
                                    <th>Status</th>
                                    <th>Promo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             
                                <tr>
                                        <td>1</td>
                                        <td>Sharief Mudrikal</td>
                                        <td>shariefkundo@gmail.com</td>
                                        <td>10-10-24</td>
                                        <td class="status">Active</td>
                                        <td class="promo">Casual</td>
                                        <td class="td-centered"><img class="action icon-red" src="../img/icons/delete.svg" alt=""></td>
                                </tr>

                                <tr>
                                        <td>2</td>
                                        <td>Jomark Abello</td>
                                        <td>jomarkabello@gmail.com</td>
                                        <td>10-09-24</td>
                                        <td class="status">Active</td>
                                        <td class="promo">Regular</td>
                                        <td class="td-centered"><img class="action icon-red" src="../img/icons/delete.svg" alt=""></td>
                                </tr>

                                <tr>
                                        <td>3</td>
                                        <td>Elousa Marcelino</td>
                                        <td>elousamarcelino@gmail.com</td>
                                        <td>10-09-24</td>
                                        <td class="status">Active</td>
                                        <td class="promo">Guest</td>
                                        <td class="td-centered"><img class="action icon-red" src="../img/icons/delete.svg" alt=""></td>
                                </tr>

                                <tr>
                                        <td>4</td>
                                        <td>Anthony Huesca</td>
                                        <td>anthonyhuesca@gmail.com</td>
                                        <td>10-08-24</td>
                                        <td class="status">Active</td>
                                        <td class="promo">VIP</td>
                                        <td class="td-centered"><img class="action icon-red" src="../img/icons/delete.svg" alt=""></td>
                                </tr>

                                <tr>
                                        <td>5</td>
                                        <td>Yousef Badua</td>
                                        <td>yousefbadua@gmail.com</td>
                                        <td>10-07-24</td>
                                        <td class="status">Active</td>
                                        <td class="promo">Casual</td>
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
