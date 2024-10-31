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
                            <!-- <form class="d-flex me-2">
                                <div class="input-group w-100">
                                    <input type="text" class="form-control form-control-light" id="custom-search" placeholder="Search account...">
                                    <span class="input-group-text bg-primary border-primary text-white brand-bg-color">
                                        <i class="bi bi-search"></i>
                                    </span>
                                </div>
                            </form> -->
                            <div class="d-flex align-items-center">
                                <label for="role-filter" class="me-2">Status</label>
                                <select id="role-filter" class="form-select">
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
                                <select id="role-filter" class="form-select">
                                    <option value="choose">All</option>
                                    <option value="">Guest</option>
                                    <option value="">Casual</option>
                                    <option value="">Regular</option>
                                    <option value="">VIP</option>
                                </select>
                            </div>

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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php
                                // $i = 1;
                                // $array = $accountObj->get_accounts();

                                // foreach ($array as $arr) {
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= $none//$arr['first_name'] ?></td>
                                        <td><?= $none //$arr['last_name'] ?></td>
                                        <td><?= $none//$arr['username'] ?></td>
                                        <td><?=$none//$arr['role'] ?></td>
                                    </tr>
                                <?php
                                    // $i++;
                               // } -->
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
