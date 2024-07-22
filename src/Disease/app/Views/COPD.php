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
                                <h2>慢性阻塞性肺病預測模型</h2>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">疾病模型</li>
                                    <li class="breadcrumb-item">慢性阻塞性肺病預測模型</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h2>選擇預測模型</h2>
                                    <div class="form-group form-check">
                                        <input type="radio" class="form-check-input" name="model" id="model_14" disabled>
                                        <label class="form-check-label" for="model_14">14天預測模型</label>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="radio" class="form-check-input" name="model" id="model_60" checked>
                                        <label class="form-check-label" for="model_60">60天預測模型</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2>空汙數據</h2>
                                    <div class="form-group row">
                                        <label for="aqi_address" class="col-sm-2 col-form-label">地址</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="aqi_address" id="aqi_address" value="高雄市小港區">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aqi_based_Day" class="col-sm-2 col-form-label">空汙基準日</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="date" name="aqi_based_Day" id="aqi_based_Day" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aqi_EMA_Days" class="col-sm-2 col-form-label">空汙回推天數</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="number" name="aqi_EMA_Days" id="aqi_EMA_Days" value="30" required>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-block" id="btn_load_aqi">載入數據</button>
                                    <hr/>
                                    <div class="form-group row">
                                        <label for="aqi_CO" class="col-sm-2 col-form-label-lg">CO</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" id="aqi_CO" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aqi_O3" class="col-sm-2 col-form-label-lg">O3</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" id="aqi_O3" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aqi_SO2" class="col-sm-2 col-form-label-lg">SO2</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" id="aqi_SO2" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aqi_NO" class="col-sm-2 col-form-label-lg">NO</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" id="aqi_NO" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aqi_NO2" class="col-sm-2 col-form-label-lg">NO2</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" id="aqi_NO2" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aqi_NOx" class="col-sm-2 col-form-label-lg">NOx</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" id="aqi_NOx" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aqi_PM2_5" class="col-sm-2 col-form-label-lg">PM2.5</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" id="aqi_PM2_5" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aqi_PM10" class="col-sm-2 col-form-label-lg">PM10</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" id="aqi_PM10" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2>病人基本資料</h2>
                                    <div class="form-group row">
                                        <label for="basic_age" class="col-sm-2 col-form-label">年齡</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="basic_age">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="basic_sex" class="col-sm-2 col-form-label">性別</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="basic_sex">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="basic_re_ADM_TIME" class="col-sm-2 col-form-label">re_ADM_TIME</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="basic_re_ADM_TIME">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="basic_BED_DAY" class="col-sm-2 col-form-label">BED_DAY</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="basic_BED_DAY">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="basic_avg_COPD_reADM_days" class="col-sm-2 col-form-label">avg_COPD_reADM_days</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="basic_avg_COPD_reADM_days">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="basic_avg_BED_DAY" class="col-sm-2 col-form-label">avg_BED_DAY</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="basic_avg_BED_DAY">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2>抽血數值</h2>
                                    <div class="form-group row">
                                        <label for="Input_data_sO2c" class="col-sm-2 col-form-label">%sO2c</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_sO2c" id="Input_data_sO2c">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_ALB" class="col-sm-2 col-form-label">ALB</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_ALB" id="Input_data_ALB">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_BNP" class="col-sm-2 col-form-label">BNP</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_BNP" id="Input_data_BNP">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_BUN" class="col-sm-2 col-form-label">BUN</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_BUN" id="Input_data_BUN">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_CEA" class="col-sm-2 col-form-label">CEA</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_CEA" id="Input_data_CEA">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_CK" class="col-sm-2 col-form-label">CK</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_CK" id="Input_data_CK">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_CK" class="col-sm-2 col-form-label">CK-MB</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_CK-MB" id="Input_data_CK">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_CRP" class="col-sm-2 col-form-label">CRP</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_CRP" id="Input_data_CRP">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_CRTN" class="col-sm-2 col-form-label">CRTN</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_CRTN" id="Input_data_CRTN">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_Ca" class="col-sm-2 col-form-label">Ca++</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_Ca" id="Input_data_Ca">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_Cortisol" class="col-sm-2 col-form-label">Cortisol</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_Cortisol" id="Input_data_Cortisol">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_D-Dimer" class="col-sm-2 col-form-label">D-Dimer</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_D-Dimer" id="Input_data_D-Dimer">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_GLU" class="col-sm-2 col-form-label">GLU</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_GLU" id="Input_data_GLU">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_GPT" class="col-sm-2 col-form-label">GPT</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_GPT" id="Input_data_GPT">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_HCT" class="col-sm-2 col-form-label">HCT</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_HCT" id="Input_data_HCT">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_HDL-C" class="col-sm-2 col-form-label">HDL-C</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_HDL-C" id="Input_data_HDL-C">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_HGB" class="col-sm-2 col-form-label">HGB</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_HGB" id="Input_data_HGB">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_HbA1C" class="col-sm-2 col-form-label">HbA1C</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_HbA1C" id="Input_data_HbA1C">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_IgE" class="col-sm-2 col-form-label">IgE</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_IgE" id="Input_data_IgE">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_K" class="col-sm-2 col-form-label">K</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_K" id="Input_data_K">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_LDL-C" class="col-sm-2 col-form-label">LDL-C</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_LDL-C" id="Input_data_LDL-C">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_Lactate" class="col-sm-2 col-form-label">Lactate</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_Lactate" id="Input_data_Lactate">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_Mg" class="col-sm-2 col-form-label">Mg</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_Mg" id="Input_data_Mg">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_Mite_DF" class="col-sm-2 col-form-label">Mite DF</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_Mite_DF" id="Input_data_Mite_DF">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_Mite_far" class="col-sm-2 col-form-label">Mite/far</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_Mite_far" id="Input_data_Mite_far">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_O2SAT" class="col-sm-2 col-form-label">O2SAT</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_O2SAT" id="Input_data_O2SAT">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_SCC" class="col-sm-2 col-form-label">SCC</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_SCC" id="Input_data_SCC">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_Sugar" class="col-sm-2 col-form-label">Sugar</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_Sugar" id="Input_data_Sugar">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_T-BIL" class="col-sm-2 col-form-label">T-BIL</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_T-BIL" id="Input_data_T-BIL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_T-CHO" class="col-sm-2 col-form-label">T-CHO</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_T-CHO" id="Input_data_T-CHO">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_T3" class="col-sm-2 col-form-label">T3</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_T3" id="Input_data_T3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_T4" class="col-sm-2 col-form-label">T4</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_T4" id="Input_data_T4">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_TCO2" class="col-sm-2 col-form-label">TCO2</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_TCO2" id="Input_data_TCO2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_TG" class="col-sm-2 col-form-label">TG</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_TG" id="Input_data_TG">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_TP" class="col-sm-2 col-form-label">TP</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_TP" id="Input_data_TP">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_TSH" class="col-sm-2 col-form-label">TSH</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_TSH" id="Input_data_TSH">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_Theophy" class="col-sm-2 col-form-label">Theophy</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_Theophy" id="Input_data_Theophy">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_Tropo-I" class="col-sm-2 col-form-label">Tropo-I</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_Tropo-I" id="Input_data_Tropo-I">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_WBC" class="col-sm-2 col-form-label">WBC</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_WBC" id="Input_data_WBC">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_hsCRP" class="col-sm-2 col-form-label">hsCRP</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_hsCRP" id="Input_data_hsCRP">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_pCO2" class="col-sm-2 col-form-label">pCO2</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_pCO2" id="Input_data_pCO2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Input_data_house_dust" class="col-sm-2 col-form-label">家塵</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" name="Input_data_house_dust" id="Input_data_house_dust">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2>相關疾病勾選</h2>
                                    <p style="font-size:20px;">
                                        <span style="color:red;font-size:20px;font-weight:bold;">提醒：</span>如無以下疾病，無須勾選。
                                    </p>
                                    <div id="inputCheckbox"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2>藥物</h2>
                                    <div class="form-group row">
                                        <label for="medicine_1DL30" class="col-sm-2 col-form-label">1DL30</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_1DL30">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_1MEPTI" class="col-sm-2 col-form-label">1MEPTI</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_1MEPTI">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_1PHYLL" class="col-sm-2 col-form-label">1PHYLL</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_1PHYLL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_1PREDN" class="col-sm-2 col-form-label">1PREDN</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_1PREDN">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_1PROPH" class="col-sm-2 col-form-label">1PROPH</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_1PROPH">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_3ALVES" class="col-sm-2 col-form-label">3ALVES</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_3ALVES">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_3ANORO" class="col-sm-2 col-form-label">3ANORO</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_3ANORO">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_3INCRU" class="col-sm-2 col-form-label">3INCRU</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_3INCRU">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_3RELV2" class="col-sm-2 col-form-label">3RELV2</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_3RELV2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_3RELVA" class="col-sm-2 col-form-label">3RELVA</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_3RELVA">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_3SPI25" class="col-sm-2 col-form-label">3SPI25</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_3SPI25">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_3SPIOL" class="col-sm-2 col-form-label">3SPIOL</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_3SPIOL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_3SR160" class="col-sm-2 col-form-label">3SR160</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_3SR160">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_3TRELE" class="col-sm-2 col-form-label">3TRELE</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_3TRELE">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicine_3VENTO" class="col-sm-2 col-form-label">3VENTO</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" id="medicine_3VENTO">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2>疫苗</h2>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="vaccine_2PNEU0">
                                        <label class="form-check-label" for="vaccine_2PNEU0">2PNEU0</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="vaccine_2PNEUM">
                                        <label class="form-check-label" for="vaccine_2PNEUM">2PNEUM</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="vaccine_2PRE13">
                                        <label class="form-check-label" for="vaccine_2PRE13">2PRE13</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="vaccine_2PRE30">
                                        <label class="form-check-label" for="vaccine_2PRE30">2PRE30</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="vaccine_2SYNFL">
                                        <label class="form-check-label" for="vaccine_2SYNFL">2SYNFL</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="btn_predict" class="btn btn-primary btn-lg btn-block waves-effect waves-light">進行預測</button>
                    <hr/>
                    <div class="row">
                        <div class="col">
                            <h2>預測結果</h2>
                            <p id="epoch" style='font-size:50px; font-weight:bold;'></p>
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
            url: "<?php echo base_url('COPD/getAllName')?>",
            method: "post",
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                var Return_data = JSON.parse(data);
                for (var i = 0; i < Return_data.length; i++) {
                    document.getElementById("inputCheckbox").innerHTML +=
                        "<div class='custom-control custom-checkbox' style='display: inline-block'>" +
                        "<input type='checkbox' class='custom-control-input'" + "id=" + Return_data[i].replaceAll(' ', '_') + ">" +
                        "<label class='custom-control-label' for=" + Return_data[i].replaceAll(' ', '_') + " style='margin-right: 50px'>" + Return_data[i] + "</label>" +
                        "</div>";
                }
            }
        });
    }

    $('#btn_load_aqi').on('click', () => {
        addr = $('#aqi_address').val();
        date = $('#aqi_based_Day').val();
        period = $('#aqi_EMA_Days').val();
        if (addr.length == 0 || date.length == 0 || period.length == 0)
        {
            window.alert('[空汙數據] 部份欄位尚未填入！');
        }
        else
        {
            $.ajax({
                url: "<?php echo base_url('COPD/FetchAQI') ?>",
                method: "post",
                dataType: "json",
                data: {
                    addr: $('#aqi_address').val(),
                    date: $('#aqi_based_Day').val(), 
                    period: $('#aqi_EMA_Days').val(),
                },
                success: (result) => {
                    air_data = result;
                    $('#aqi_CO').val(air_data["co"]);
                    $('#aqi_O3').val(air_data["o3"]);
                    $('#aqi_SO2').val(air_data["so2"]);
                    $('#aqi_NO').val(air_data["no"]);
                    $('#aqi_NO2').val(air_data["no2"]);
                    $('#aqi_NOx').val(air_data["nox"]);
                    $('#aqi_PM2_5').val(air_data["pm2.5"]);
                    $('#aqi_PM10').val(air_data["pm10"]);
                    /*
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
                    */
                },
                error: (xhr) => {
                    switch (xhr.status) {
                        case 403:
                            alert("[空汙數據] 您的IP位址不允許");
                            break;
                        case 404:
                            alert("[空汙數據] 資料欄位不正確");
                            break;
                        default:
                            alert("[空汙數據] 發生錯誤，請重試一次");
                    }
                }
            });
        }
    })

    $(document).ready(() => {
        $('#btn_predict').on('click', () => {
            $.ajax({
                url: "<?php echo base_url('COPD/getAllName')?>",
                method: "post",
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
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
                                b.textContent = Math.round(Swal.getTimerLeft() / 1000 * 100)
                                if (document.getElementById("epoch").innerHTML != "") {
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

                    Return_data = JSON.parse(data);
                    inputTextselect = "";
                    for (i = 0; i < Return_data.length; i++) {
                        DiseaseName = document.getElementById(Return_data[i].replaceAll(' ', '_'));
                        if (DiseaseName.checked == true) {//concate disease name
                            inputTextselect += ("1" + " ");
                        }
                        else {
                            inputTextselect += ("0" + " ")
                        }
                    }
                    inputTextselect = inputTextselect.substring(0, inputTextselect.length - 1).replaceAll(' ', ',');
                    array = inputTextselect.split(",").map(Number);
                    ml_data = {
                        sO2c: document.getElementById("Input_data_sO2c").value,
                        dis_list: array,
                    }
                    ml_data_json = JSON.stringify(ml_data);
                    $.ajax({
                        url: "<?php echo base_url('COPD/GetResult')?>",
                        method: "post",
                        dataType: "json",
                        data: {
                            ml_data: ml_data_json,
                        },
                        success: function (data) {

                            res = Number(data);
                            if (res >= 80) {
                                document.getElementById("epoch").style.color = "#00DB00";
                                document.getElementById("epoch").innerHTML = parseFloat(res).toFixed(3) + "%";
                            }else{
                                document.getElementById("epoch").style.color = "red";
                                document.getElementById("epoch").innerHTML = parseFloat(res).toFixed(3) + "%";
                            }


                        },
                        error: function (data) {
                            document.getElementById("epoch").style.color = "red";
                            document.getElementById("epoch").innerHTML = "ERROR!";
                        }
                    });
                }
            });
        });
    });

    function out() {
        $.ajax({
            url: "<?php echo base_url('COPD/out')?>",
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
