<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("basic/Head")?>

    <?php echo view("basic/Cssload") ?>

</head>

<body>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <!--
    <div class="home-btn d-none d-sm-block">
        <a href="<?php echo base_url('login') ?>" class="text-white"><i class="fas fa-home h2"></i></a>
    </div>
    -->
    <div class="wrapper-page">
        <div class="card card-pages shadow-none">

            <div class="card-body">

                <h5 class="font-18 text-center">空汙預測門診註冊</h5>

                <form class="form-horizontal m-t-30" id="addUserForm">
                    <div class="form-group">
                        <div class="col-12">
                            <label>部門單位</label>
                            <input class="form-control" type="text" required="" placeholder="部門單位" name="department">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12">
                            <label>帳號</label>
                            <input class="form-control" type="text" required="" placeholder="帳號" name="account">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12">
                            <label>密碼</label>
                            <input class="form-control" type="password" required="" placeholder="密碼"
                                name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12">
                            <label>再次輸入密碼</label>
                            <input class="form-control" type="password" required="" placeholder="再次輸入密碼"
                                name="password2">
                        </div>
                    </div>



                    <!-- <div class="form-group">
                                <div class="col-12">
                                        <label>Email</label>
                                    <input class="form-control" type="email" required="" placeholder="Adress@exemple.com" name="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                        <label>School</label>
                                    <input class="form-control" type="text" required="" placeholder="School" name="school">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                        <label>Department</label>
                                    <input class="form-control" type="text" required="" placeholder="Department" name="department">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                        <label>Phone</label>
                                    <input class="form-control" type="text" required="" placeholder="Phone" name="phone">
                                </div>
                            </div> -->

                    <div class="form-group text-center m-t-20">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light"
                                type="submit">註冊</button>
                        </div>
                    </div>

                    <div class="form-group mb-0 row">
                        <div class="col-12 m-t-10 text-center">
                            <a href="<?php echo base_url('login') ?>" class="text-muted">已完成註冊?</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <?php echo view("basic/Js") ?>

    <script>
        $(document).ready(function () {
            $("form").submit(function (event) {
                event.preventDefault();
                var account = $("input[name='account']").val();
                var password = $("input[name='password']").val();
                var password2 = $("input[name='password2']").val();
                var department = $("input[name='department']").val();
                
                if(password==password2){
                    $.ajax({
                        url: 'Register/AddUser',
                        type: 'POST',
                        data: $("form").serialize()
                    })
                    .done(function (e) {
                        var data = JSON.parse(e);
                        console.log(data[0]);
                        if (data[0]==0) {
                            swal.fire(
                                "Good Job!",
                                "註冊成功!",
                                "success"
                            ).then(function() {
                                window.location = "Login";
                            });
                        } else {
                            swal.fire(
                                '帳號已被註冊！',
                                '請重新註冊帳號',
                                'error'
                            );
                        }
                    })
                }else{
                    swal.fire(
                        '密碼不一致！',
                        '請再次輸入密碼',
                        'error'
                    );
                }

            })
        });

    </script>
</body>

</html>