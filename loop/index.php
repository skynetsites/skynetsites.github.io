<!DOCTYPE html>
<html dir="ltr" lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <title>Ecoplus</title>
    <link rel="canonical" href="https://ecoplus.loop.com.br/" />
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="dist/js/pages/chartist/chartist-init.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/libs/c3/c3.min.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="assets/libs/jvectormap/jquery-jvectormap.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 <script type="text/javascript">
        window.onload = function () {
            CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#699531",
                "#8cc542"              
                ]);
        var naoconformidadepokm = new CanvasJS.Chart("nao-conformidade-pokm", {
            colorSet: "greenShades",
            animationEnabled: true,
            title: {
               // text: "Military Expenditure of Countries: 2016"
            },
            axisX: {
                interval: 1,
                titleFontColor: "#455a64",
                lineColor: "#455a64",
                labelFontColor: "#455a64",
                tickColor: "#455a64",
			},
            axisY: {
                //title: "Expenses in Billion Dollars",
                titleFontColor: "#fff",
                lineColor: "#fff",
                labelFontColor: "#fff",
                tickColor: "#fff",
				
                includeZero: true,
                scaleBreaks: {
                    type: "wavy",
                    customBreaks: [{
                        startValue: 0,
                        endValue: 210
                        },
                        {
                            startValue: 0,
                            endValue: 600
                        }
                ]}
            },
            data: [{
                type: "bar",
                dataPoints: [
                    { label: "Excesso Velocidade", y: 4, indexLabel: "4" },
					{ label: "Excesso RPM", y: 6, indexLabel: "6" },
					{ label: "Excesso de Aceleração", y: 8, indexLabel: "8"},
					{ label: "Kick Down", y: 10, indexLabel: "10"},
					{ label: "Falta de Previdência", y: 15, indexLabel: "15"},
					{ label: "Ociosidade", y: 18, indexLabel: "18"},
					{ label: "Fase Não Econômica", y: 20, indexLabel: "20"}
				
				]
            }]
        });
        naoconformidadepokm.render();
		
		
   var resultado6meses = new CanvasJS.Chart("resultado6meses", {
	colorSet: "greenShades",
	animationEnabled: true,
	//theme: "light2",
	title:{
		//text: "Crude Oil Reserves vs Production, 2016"
	},
            axisX: {
                interval: 1,
                titleFontColor: "#455a64",
                lineColor: "#455a64",
                labelFontColor: "#455a64",
                tickColor: "#455a64",
			},	
	axisY: {
		//title: "Billions of Barrels",
		//titleFontColor: "#4F81BC",
                titleFontColor: "#fff",
                lineColor: "#fff",
                labelFontColor: "#fff",
                tickColor: "#fff",
	},
	axisY2: {
		//title: "Millions of Barrels/day",
		//titleFontColor: "#C0504E",
                titleFontColor: "#fff",
                lineColor: "#fff",
                labelFontColor: "#fff",
                tickColor: "#fff",
	},	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Proven Oil Reserves (bn)",
		legendText: "Proven Oil Reserves",
		showInLegend: false, 
		dataPoints:[
			{ label: "Jan", y: 2, indexLabel: "2%" },
			{ label: "Fev", y: 4.9, indexLabel: "4.9%" },
			{ label: "Mar", y: 7, indexLabel: "7%" },
			{ label: "Abr", y: 23.2, indexLabel: "23.2%" },
			{ label: "Mai", y: 25.6, indexLabel: "25.6%" },
			{ label: "Jun", y: 76.7, indexLabel: "76.7%" }
		]
	},
	{
		type: "column",	
		name: "Oil Production (million/day)",
		//legendText: "Oil Production",
		axisYType: "secondary",
		showInLegend: false,
		dataPoints:[
			{ label: "Jan", y: 2.6, indexLabel: "2.6%" },
			{ label: "Fev", y: 5.9, indexLabel: "5.9%" },
			{ label: "Mar", y: 9, indexLabel: "9%" },
			{ label: "Abr", y: 26.4, indexLabel: "26.4%" },
			{ label: "Mai", y: 28.7, indexLabel: "28.7%" },
			{ label: "Jun", y: 70.7, indexLabel: "70.7%" }
		]
	}]
});
resultado6meses.render();
		
		
		
		
        function toggleDataSeries(e) {
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            }
            else {
                e.dataSeries.visible = true;
            }
            chart.render();
        }
        function explodePie (e) {
            if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
                e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
            } else {
                e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
            }
            e.chart.render();
        }
        }
//clear html5 canvas
    </script> 
   <script type="text/javascript" src="dist/js/canvasjs.min.js"></script>
   <style>
   #resultado6meses .canvasjs-chart-canvas {width:100%!important;height:400px!important;}
   @media screen and (max-width: 720px) {
  .title-card {
	  margin-left:0!important;
  }
  #basic-doughnut {
    height: 274px;
  }
  #basic-doughnut canvas {
    width: 335px;
    height: 233px;
  }
  #nao-conformidade-pokm {
        overflow: hidden;
  }
  #nao-conformidade-pokm canvas {
    width: 100%!important;
    height: 400px!important;
  }

}
   
   </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo text -->
                        <span class="logo-text">
                            <img src="assets/images/ecoplus_logo_verde_branco.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto float-left">
                        <!-- This is  -->
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> 						</li>
                        </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
					<!-- ============================================================== -->
					<!-- Language -->
					<!-- ============================================================== -->
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="flag-icon flag-icon-es"></i> <span>Español</span> <i class="mdi mdi-plus-circle" style="color:white;"></i></a>
					<div class="dropdown-menu dropdown-menu-right scale-up">
					<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Español</a>
					<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-pt"></i> Português</a>
					<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a> 
					</div>
					</li>
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/users/5.jpg" alt="user" width="30" class="profile-pic rounded-circle" /> <span>Isaias Oliveira</span>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up">
                                <ul class="dropdown-user list-style-none">
                                    <li>
                                        <div class="dw-user-box p-3 d-flex">
                                            <div class="u-img"><img src="assets/images/users/5.jpg" alt="user" class="rounded" width="80"></div>
                                            <div class="u-text ml-2">
                                                <h4 class="mb-0">Isaias Oliveira</h4>
                                                <p class="text-muted mb-1 font-14">isaias@neoprint.com.br</p>
                                                <a href="#" class="btn btn-rounded btn-danger btn-sm text-white d-inline-block"><i class="ti-user"></i> Ver Perfil</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="dropdown-divider"></li>                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-write"></i> Editar Conta</a></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-agenda"></i> Editar Endereço</a></li>
                                    <li role="separator" class="dropdown-divider"></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-settings"></i> Configurações</a></li>
                                    <li role="separator" class="dropdown-divider"></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="fa fa-power-off"></i> Deslogar</a></li>
                                </ul>
                            </div>
                        </li>                        <!-- ============================================================== -->                        <!-- End Profile -->                        <!-- ============================================================== -->                        <!-- ============================================================== -->                        <!-- Messages -->                        <!-- ============================================================== -->                        <li class="nav-item dropdown">                            <a class="nav-link aves-effect waves-dark" href="#" id="2" > <i                                    class="mdi mdi-power"></i> <span>Sair</span>							</a>						</li>                        <!-- ============================================================== -->                        <!-- End Messages -->                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile position-relative" style="background: url(assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="assets/images/users/5.jpg" alt="user" class="w-100" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text pt-1"> 
                        <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block position-relative" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Isaias Oliveira</a>
                        <div class="dropdown-menu animated flipInY"> 
                            <a href="#" class="dropdown-item"><i class="ti-user"></i>
                                Ver Perfil</a> 
                            <div class="dropdown-divider"></div> 							<a href="#" class="dropdown-item"><i class="ti-write"></i> Editar Conta</a></li>                            <a href="#" class="dropdown-item"><i class="ti-agenda"></i> Editar Endereço</a></li>                            <div class="dropdown-divider"></div>                             <a href="#" class="dropdown-item"><i class="ti-settings"></i> Configurações</a></li>                            <div class="dropdown-divider"></div>                             <a href="authentication-login1.html" class="dropdown-item"><i class="fa fa-power-off"></i> Deslogar</a></li>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                  <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span
                                class="hide-menu">Indicadores Gerenciais</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="relatorio-grafico.html" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span
                                class="hide-menu">Relatórios Gráficos</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="relatorio-detalhado.html" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span
                                class="hide-menu">Relatórios Detalhados</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="monitoramento.html" aria-expanded="false"><i class="mdi mdi-chemical-weapon"></i><span
                                class="hide-menu">Monitoramento</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="mapadecalor.html" aria-expanded="false"><i class="mdi mdi-map"></i><span
                                class="hide-menu">Mapa de Calor</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="odometro.html" aria-expanded="false"><i class="mdi mdi-apple-safari"></i><span
                                class="hide-menu">Odômetro</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Configurações"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="E-mail"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Deslogar"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-6 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Indicadores Gerenciais</h3>
                </div>
                <div class="col-md-6 col-12 align-self-center d-none d-md-block">
                    <div class="d-flex mt-2 justify-content-end">
                        <ol class="breadcrumb mb-0 p-0 bg-transparent">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Início</a></li>
						<li class="breadcrumb-item active">Indicadores Gerenciais</li>
						</ol>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
			
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
								<div class="d-md-flex no-block">
                                    <label class="card-title" style="line-height:35px; margin-bottom:0;color:green;font-weight:600;">Mês:</label>
                                    <div class="title-card" style="margin-left:10px;border:2px green solid;">
                                        <select class="custom-select" id='purpose'>
                                            <option selected="" selected>Selecione o Mês</option>
                                            <option value="1">Janeiro</option>
                                            <option value="2">Fevereiro</option>
                                            <option value="3">Março</option>
                                            <option value="4">Abril</option>
                                            <option value="5">Maio</option>
                                            <option value="6">Junho</option>
                                            <option value="7">Julho</option>
                                            <option value="8">Agosto</option>
                                            <option value="9">Setembro</option>
                                            <option value="10">Outubro</option>
                                            <option value="11">Novembro</option>
                                            <option value="12">Dezembro</option>
										</select>
                                    </div>
                                </div>
							<div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
				
				
                <!-- Row -->
                <div class="row" id="business">
<!-- Column -->
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row">
                    <div
                      class="
                        round round-lg
                        text-white
                        d-flex
                        align-items-center
                        justify-content-center
                        rounded-circle
                        bg-info
                      "
                    >
                    <i class="fas fa-bus"></i>
                    </div>
                    <div class="ms-2 align-self-center" style="margin-left: 0.5rem!important;">
                      <h2 class="mb-10">113</h2>
                      <h6 class="text-muted mb-0">Veículos</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row">
                    <div
                      class="
                        round round-lg
                        text-white
                        d-flex
                        align-items-center
                        justify-content-center
                        rounded-circle
                        bg-info
                      "
                    >
                    <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="ms-2 align-self-center" style="margin-left: 0.5rem!important;">
                      <h2 class="mb-10">14.664</h2>
                      <h6 class="text-muted mb-0">Não Conformidades Totais</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row">
                    <div
                      class="
                        round round-lg
                        text-white
                        d-flex
                        align-items-center
                        justify-content-center
                        rounded-circle
                        bg-info
                      "
                    >
                    <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <div class="ms-2 align-self-center" style="margin-left: 0.5rem!important;">
                      <h2 class="mb-10">432.754</h2>
                      <h6 class="text-muted mb-0">Km Percorridos Totais</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row">
                    <div
                      class="
                        round round-lg
                        text-white
                        d-flex
                        align-items-center
                        justify-content-center
                        rounded-circle
                        bg-info
                      "
                    >
                    <i class="fas fa-user"></i>
                    </div>
                    <div class="ms-2 align-self-center" style="margin-left: 0.5rem!important;">
                      <h2 class="mb-10">275.956</h2>
                      <h6 class="text-muted mb-0">Km Percorridos com Login</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->

                </div>
                <!-- Row -->
				
				<div class="row">	
                <div class="col-lg-6 col-xl-6">

                        <div class="card">

                            <div class="card-body analytics-info">

                                <h5 class="card-title">Total de Não Conformidades por Km</h5>
                                <!--<p>Não conformidades/Km<br>Março 2021 a Maio 2021</p>-->

                                <div id="nao-conformidade-pokm" style="height:400px;"></div>

                            </div>

                        </div>

                    </div>
                    
                    <div class="col-lg-6 col-xl-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h5 class="card-title text-center">Redução de Emissão de Gases Poluentes (g/km)</h5>
                                <div id="basic-doughnut" style="height:400px;"></div>
                                
                            <div class="text-center" style="margin-top: -25px;">
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item px-2">
                      <h6>
                        <i class="fa fa-circle font-10 me-2" style="color:#699531!important;"></i> CO2
                      </h6>
                    </li>
                    <li class="list-inline-item px-2">
                      <h6>
                        <i class="fa fa-circle font-10 me-2" style="color:#8cc542!important;"></i> HCT
                      </h6>
                    </li>
                    <li class="list-inline-item px-2">
                      <h6>
                        <i class="fa fa-circle font-10 me-2" style="color:#bce56c!important;"></i> NOx
                      </h6>
                    </li>
                    <li class="list-inline-item px-2">
                      <h6>
                        <i class="fa fa-circle font-10 me-2" style="color:#bef773!important;"></i> MP
                      </h6>
                    </li>
                  </ul>
                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                <!-- Row -->
                
                
				
				<div class="row">
                
            <div class="col-lg-3 col-md-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row pb-2">
                    <div
                      class="
                        round round-lg
                        text-white
                        d-flex
                        align-items-center
                        justify-content-center
                        rounded-circle
                        bg-info
                      "
                    >
                    <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <div class="ms-2 align-self-center" style="margin-left: 0.5rem!important;">
                      <h2 class="mb-10">10.352,20 <i class="fas fa-euro-sign"></i></h2>
                    </div>
                  </div>
                  <div class="text-center">
                    <h6 class="text-muted mb-0">Economia de Combustível em Euro</h6>
                  </div>
                </div>
              </div>
              
              
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row pb-2">
                    <div
                      class="
                        round round-lg
                        text-white
                        d-flex
                        align-items-center
                        justify-content-center
                        rounded-circle
                        bg-info
                      "
                    >
                    <i class="fas fa-bus"></i>
                    </div>
                    <div class="ms-2 align-self-center" style="margin-left: 0.5rem!important;">
                      <h2 class="mb-10">10.471 <strong>Litros</strong></h2>
                    </div>
                  </div>
                  <div class="text-center">
                    <h6 class="text-muted mb-0">Economia de Combustível em Litros</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-9 col-md-9">
                <div class="card" style="width: auto;">

                            <div class="card-body analytics-info" style="width: auto;">

                                <h5 class="card-title text-center">Resultado dos últimos 6 Meses</h5>
                                <div id="resultado6meses" style="height: 400px; width: 100%;"></div> 
                                </div> 

                            </div>

                        </div>
            </div>
                </div>
                <!-- Row -->
                
            </div>
            </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © Copyright 2022 Loop Tecnologia.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <div class="chat-windows"></div>
    
    <!-- ============================================================== -->
    <!-- All Jquery -->

    <!-- ============================================================== -->

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->

    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>

    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- apps -->

    <script src="dist/js/app.min.js"></script>

    <script src="dist/js/app.init.overlay.js"></script>

    <script src="dist/js/app-style-switcher.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->

    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>

    <script src="assets/extra-libs/sparkline/sparkline.js"></script>

    <!--Wave Effects -->

    <script src="dist/js/waves.js"></script>

    <!--Menu sidebar -->

    <script src="dist/js/sidebarmenu.js"></script>

    <!--Custom JavaScript -->

    <script src="dist/js/custom.min.js"></script>

    <!-- This Page JS -->

    <script src="assets/libs/echarts/dist/echarts-en.min.js"></script>

    <script src="dist/js/pages/echarts/bar/222bar.js"></script>
    
    
    <script src="dist/js/pages/echarts/pie-doughnut/pie-doghnut.js"></script>
</body>

</html>