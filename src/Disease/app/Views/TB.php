<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("basic/Head") ?>
    <?php echo view("basic/Cssload") ?>

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php echo view("basic/Topbar") ?>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php echo view("basic/Leftbar") ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h2>肺結核預測模型</h2>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">疾病模型</li>
                                    <li class="breadcrumb-item">肺結核預測模型</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                            </div>
                        </div>
                    </div>
                    <div class="row" id="test1">
                        <div class="col-sm-12 col-xl-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <form id="Input_data_disease" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <h2>輸入資料</h2>
                                            <p style="font-size:20px;"><span style="color:red;font-size:20px;font-weight:bold;">注意：</span>請確認是否輸入正確。
                                            </p>
                                            <div class="m-b-30">
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">地址</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="address" id="address" placeholder="高雄市鼓山區中山大學" id="example-text-input" required="required" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">病歷編號</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Disease_ID" id="Disease_ID" placeholder="1" id="example-text-input" required="required" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">空汙回推天數</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="number" name="EMA_Days" id="EMA_Days" placeholder="30" id="example-text-input" required="required" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">空汙基準日</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="date" name="Based_Day" id="Based_Day" id="example-text-input" required="required" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">年齡</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="number" name="Age" id="Age" placeholder="40" id="example-text-input" required="required" >
                                                    </div>
                                                </div>
<!--
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">\u76f8\u95dc\u75be\u75c5\u8cc7\u65995</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Input_data_disease5" id="Input_data_disease5" placeholder="5" id="example-text-input">
                                                    </div>
                                                </div>
-->

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">性別</label>
                                                    <div class="col-sm-10">
                                                    <select class="form-control" id="Sex">
                                                        <option selected>男</option>
                                                        <option>女</option>
                                                    </select>
                                                    </div>
                                                </div>
<!--
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">\u76f8\u95dc\u75be\u75c5\u8cc7\u65996</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Input_data_disease6" id="Input_data_disease6" placeholder="5" id="example-text-input">
                                                    </div>
                                                </div>
-->
                                                <br>

                                                <p style="font-size:20px;">相關疾病勾選</p>

                                                <p style="font-size:20px;"><span style="color:red;font-size:20px;font-weight:bold;">提醒：</span>如無以下疾病，無須勾選。
                                                </p>
                                                <div id="inputCheckbox">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <button type="submit" id="butsave" class="btn btn-primary waves-effect waves-light">進行預測</button>
                                                <br>
                                                <p id="VideoInfo" style="font-size: 20px;"></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="card m-b-30">
                                        <div id="yoloresultText" class="card-body">
                                            <h2>預測結果</h2>
                                            <p id="epoch" style='font-size:50px; font-weight:bold;'></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="card m-b-30">
                                        <div id="airresultText" class="card-body">
                                            <h2>空汙數值</h2>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label-lg">CO</label>
                                                <div class="col-sm-10">
                                                    <p class="form-control" id="CO" id="example-text-input"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label-lg">O3</label>
                                                <div class="col-sm-10">
                                                    <p class="form-control" id="O3" id="example-text-input"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label-lg">NO</label>
                                                <div class="col-sm-10">
                                                    <p class="form-control" id="NO" id="example-text-input"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label-lg">SO2</label>
                                                <div class="col-sm-10">
                                                    <p class="form-control" id="SO2" id="example-text-input"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label-lg">NO2</label>
                                                <div class="col-sm-10">
                                                    <p class="form-control" id="NO2" id="example-text-input"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label-lg">NOx</label>
                                                <div class="col-sm-10">
                                                    <p class="form-control" id="NOx" id="example-text-input"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label-lg">PM2.5</label>
                                                <div class="col-sm-10">
                                                    <p class="form-control" id="PM2.5" id="example-text-input"></p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label-lg">PM10</label>
                                                <div class="col-sm-10">
                                                    <p class="form-control" id="PM10" id="example-text-input"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container-fluid -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
            <?php echo view("basic/Footer") ?>
        </div>
        <!-- END wrapper -->

        <?php echo view("basic/Js") ?>


</body>

<script type="text/javascript">
    getAllName();

    function getAllName() {
        $.ajax({
            url: "<?php echo base_url('TB/getAllName')?>",
            method: "post",
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                //console.log(data);
                var Return_data = JSON.parse(data);
                //console.log("After:"+data)
                for (var i = 0; i < Return_data.length; i++) {
                    //console.log(Return_data[i])
                    document.getElementById("inputCheckbox").innerHTML +=
                        "<div class='custom-control custom-checkbox' style='display: inline-block'>" +
                        "<input type='checkbox' class='custom-control-input'" + "id=" + Return_data[i].replaceAll(' ', '_') + ">" +
                        "<label class='custom-control-label' for=" + Return_data[i].replaceAll(' ', '_') + " style='margin-right: 50px'>" + Return_data[i] + "</label>" +
                        "</div>";
                }
            }
        });
    }


    $(document).ready(function () {
        $('#Input_data_disease').on('submit', function (even) {
            even.preventDefault();
            var inputText;
            document.getElementById("epoch").innerHTML = "";
            document.getElementById("CO").innerHTML = "";
            document.getElementById("O3").innerHTML = "";
            document.getElementById("NO").innerHTML = "";
            document.getElementById("SO2").innerHTML = "";
            document.getElementById("NO2").innerHTML = "";
            document.getElementById("NOx").innerHTML = "";
            document.getElementById("PM2.5").innerHTML = "";
            document.getElementById("PM10").innerHTML = "";
            $.ajax({
                url: "<?php echo base_url('TB/getAllName')?>",
                method: "post",
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    let timerInterval
                    Swal.fire({
                      title: '模型運算中!',
                      html: '剩餘 <b></b> %',
                      timer: 1000,
                      timerProgressBar: true,
                      allowOutsideClick: false,
                      allowEscapeKey: false,
                      didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                          b.textContent = Math.round(Swal.getTimerLeft()/1000*100)
                          if(document.getElementById("epoch").innerHTML != ""){
                            clearInterval(timerInterval)
                            Swal.close();
                          }
                        }, 100)
                      },
                      willClose: () => {
                        clearInterval(timerInterval)
                      }
                    }).then((result) => {
                      /* Read more about handling dismissals below */
                      if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                      }
                    })
                    var Return_data = JSON.parse(data);
                    var inputTextselect = "";
                    for (var i = 0; i < Return_data.length; i++) {
                        var DiseaseName = document.getElementById(Return_data[i].replaceAll(' ', '_'));
                        //console.log(Return_data[i].replaceAll(' ', '_'))
                        if (DiseaseName.checked == true) {//concate disease name
                            //inputTextselect += (Return_data[i] + "~");
                            inputTextselect += ("1" + " ");
                        }
                        else {
                            inputTextselect += ("0" + " ")
                        }
                    }
                    var Sex = document.getElementById("Sex").value
                    if (Sex == "\u7537"){
                        Sex = 1;
                    }
                    else{
                        Sex = 0;
                    }
                    var inputTextselect = inputTextselect.substring(0, inputTextselect.length - 1).replaceAll(' ', ',');
                    var array = inputTextselect.split(",").map(Number);
                    address = document.getElementById("address").value.replaceAll(' ', '');
                    EMA_Days = document.getElementById("EMA_Days").value;
                    Based_Day = document.getElementById("Based_Day").value;
                    Age = document.getElementById("Age").value;
                    
                    if(address == ''){
                        alert("Address miss");
                        document.getElementById("epoch").style.color = "red";
                        document.getElementById("epoch").innerHTML = "Miss address";
                    }
                    else if(Disease_ID == ''){
                        alert("ID miss");
                        document.getElementById("epoch").style.color = "red";
                        document.getElementById("epoch").innerHTML = "Miss ID";
                    }
                    else if(Based_Day == ''){
                        alert("Based day miss");
                        document.getElementById("epoch").style.color = "red";
                        document.getElementById("epoch").innerHTML = "Miss based day";
                    }
                    else if(Age == ''){
                        alert("Age miss");
                        document.getElementById("epoch").style.color = "red";
                        document.getElementById("epoch").innerHTML = "Miss age";
                    }
                    
                    Disease_ID = document.getElementById("Disease_ID").value.replaceAll(' ', '');
                    var addr = address
                    var date = Based_Day
                    var period = EMA_Days
                    $.ajax({
                        url: "<?php echo base_url('TB/FetchAQI') ?>",
                        method: "post",
                        dataType: "json",
                        data: {
                            addr: addr,
                            date: date, 
                            period: period,
                        },
                        success: function(result){
                            var air_data = result 
                            var ml_data = {
                                    "sex": Number(Sex),
                                    "age": Number(Age),
                                    "address": address,
                                    "id": Disease_ID,
                                    "date": Based_Day,
                                    "dis_list": array,
                                    "air_data": air_data,
                                }
                            var ml_data_json = JSON.stringify(ml_data);
                            $.ajax({
                                url: "<?php echo base_url('TB/GetResult')?>",
                                method: "post",
                                dataType: "json",
                                data:{
                                    ml_data:ml_data_json,
                                },

                                success: function (result) {
                                    console.log(result);
                                    
                                    res = Number(result);
                                    //.split("~");
                                    
                                    if (res >= 50) {
                                        document.getElementById("epoch").style.color = "red";
                                        document.getElementById("epoch").innerHTML = parseFloat(res).toFixed(3) + "%";
                                    } else {
                                        document.getElementById("epoch").style.color = "#00DB00";
                                        document.getElementById("epoch").innerHTML = parseFloat(res).toFixed(3) + "%";
                                    }

                                    //Set AQI
                                    if (air_data["co"] >= 9.4) {
                                        document.getElementById("CO").style.color = "red";
                                        document.getElementById("CO").innerHTML = air_data["co"] ;
                                    } else {
                                        document.getElementById("CO").style.color = "#00DB00";
                                        document.getElementById("CO").innerHTML = air_data["co"] ;
                                    }
                                    if (air_data["o3"] >= 70) {
                                        document.getElementById("O3").style.color = "red";
                                        document.getElementById("O3").innerHTML = air_data["o3"] ;
                                    } else {
                                        document.getElementById("O3").style.color = "#00DB00";
                                        document.getElementById("O3").innerHTML = air_data["o3"] ;
                                    }
                                    if (air_data["no"] >= 360) {
                                        document.getElementById("NO").style.color = "red";
                                        document.getElementById("NO").innerHTML = air_data["no"] ;
                                    } else {
                                        document.getElementById("NO").style.color = "#00DB00";
                                        document.getElementById("NO").innerHTML = air_data["no"] ;
                                    }
                                    if (air_data["so2"] >= 75) {
                                        document.getElementById("SO2").style.color = "red";
                                        document.getElementById("SO2").innerHTML = air_data["so2"] ;
                                    } else {
                                        document.getElementById("SO2").style.color = "#00DB00";
                                        document.getElementById("SO2").innerHTML = air_data["so2"] ;
                                    }
                                    if (air_data["no2"] >= 100) {
                                        document.getElementById("NO2").style.color = "red";
                                        document.getElementById("NO2").innerHTML = air_data["no2"] ;
                                    } else {
                                        document.getElementById("NO2").style.color = "#00DB00";
                                        document.getElementById("NO2").innerHTML = air_data["no2"] ;
                                    }
                                    if (air_data["nox"] >= 360) {
                                        document.getElementById("NOx").style.color = "red";
                                        document.getElementById("NOx").innerHTML = air_data["nox"] ;
                                    } else {
                                        document.getElementById("NOx").style.color = "#00DB00";
                                        document.getElementById("NOx").innerHTML = air_data["nox"] ;
                                    }
                                    if (air_data["pm2.5"] >= 35.4) {
                                        document.getElementById("PM2.5").style.color = "red";
                                        document.getElementById("PM2.5").innerHTML = air_data["pm2.5"] ;
                                    } else {
                                        document.getElementById("PM2.5").style.color = "#00DB00";
                                        document.getElementById("PM2.5").innerHTML = air_data["pm2.5"] ;
                                    }
                                    if (air_data["pm10"] >= 100) {
                                        document.getElementById("PM10").style.color = "red";
                                        document.getElementById("PM10").innerHTML = air_data["pm10"] ;
                                    } else {
                                        document.getElementById("PM10").style.color = "#00DB00";
                                        document.getElementById("PM10").innerHTML = air_data["pm10"] ;
                                    }
                                },
                                error: function () {
                                    console.log("error: " + result);
                                    document.getElementById("epoch").style.color = "red";
                                    document.getElementById("epoch").innerHTML = "Error";
                                }
                            })
                        },
                        error: function(xhr){
                            switch (xhr.status) {
                                case 403:
                                    alert("IP位址不允許");
                                    break;
                                case 404:
                                    alert("資料欄位不正確");
                                    break;
                                default:
                                    alert("發生錯誤，請重試一次");
                            }
                        }
                    });
                }
            });
        });
    });

    function out() {
        $.ajax({
            url: "<?php echo base_url('TB/Logout')?>",
            type: "post",
            success: function (data) {
                window.location.href = 'Login';
            },
            error: function (o) {

            }
        });
    }

</script>

</html>

