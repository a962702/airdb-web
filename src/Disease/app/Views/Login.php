<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("basic/Head") ?>
    <?php echo view("basic/Cssload") ?>

</head>

<body>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="home-btn d-none d-sm-block">
    </div>
    <div class="wrapper-page">
        <div class="card card-pages shadow-none">

            <div class="card-body">
                <h5 class="font-18 text-center">空汙預測門診登入</h5>
                <form class="form-horizontal m-t-30" id="accountForm">
                    <div class="form-group">
                        <div class="col-12">
                            <label>帳號</label>
                            <input class="form-control" name="account" type="text" required="" placeholder="Account">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12">
                            <label>密碼</label>
                            <input class="form-control" name="password" type="password" required="" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">登入</button>
                        </div>
                    </div>
                </form>
                <div class="form-group row m-t-30 m-b-0">
                    <div class="col-sm-7">
                    </div>
                    <div class="col-sm-5 text-right">
                        <a href="<?php echo base_url("register") ?>" class="text-muted">新增帳號</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <?php echo view("basic/Js") ?>
    <script>
        get_Session();
        function get_Session() {
            $.ajax({
                url: "<?php echo base_url('Login/getSession')?>",
                method: "post",
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    var Return_data = JSON.parse(data);
                    console.log(Return_data);
                },
                error: function (data) {

                }
            });
        }

        $(document).ready(function () {
            $("form").submit(function (event) {
                event.preventDefault();
                var account = $("input[name='account']").val();
                var password = $("input[name='password']").val();
                $.ajax({
                        url: 'Login/checkLogin',
                        type: 'POST',
                        data: $("form").serialize()
                    })
                    .done(function (e) {
                        var data = JSON.parse(e);
                        console.log(data);
                        if (data[0] == 0) {
                            Swal.fire(
                                '帳號尚未註冊',
                                '請點擊下方「新增帳號」!!',
                                'error'
                            );
                        } else if (data[0] == 1) {
                            Swal.fire(
                                '帳號尚未開通',
                                '請洽管理員開通帳號',
                                'error'
                            );
                        } else if (data[0] == 2) {
                            var account = data[1];
                            $.ajax({
                                url: "<?php echo base_url('Login/setSession')?>",
                                // method: "post",
                                type: "POST",
                                dataType: "json",
                                data: {
                                    "account": "123"
                                },success: function (data) {
                                    var Return_data = JSON.parse(data);
                                    console.log(Return_data);
                                    window.location = "TB";
                                },
                                error: function (data) {
                                }
                            });
                        } else if (data[0] == 3) {
                            Swal.fire(
                                '帳號密碼錯誤',
                                '請重新輸入',
                                'error'
                            );
                        }
                    })
            })
        });

    </script>
</body>

</html>