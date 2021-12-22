<html lang="en" style="transform: none;">
<head id="Head1"><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description">
<meta name="author"><link rel="icon" type="image/png" sizes="35x35" href="images/favicon.png">
<title>Stock pricing</title>
     
    
        </form>

    <link href="stock/bootstrap.css?v=19" rel="stylesheet">
    <link href="stock/style.css?v=19" rel="stylesheet">
    <link href="stock/com.css?v=19" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet">
    <link href="stock/pricing.css?v=19" rel="stylesheet">
    <link href="cstock/stroke.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
        .table-striped > tbody > tr:nth-of-type(odd)
        {
            background-color: #f5f8fa;
        }
        .table > tbody > tr > td
        {
            border: 0px;
            font-size: 13px;
            color: #5a5a5a;
        }
        .table > tbody > tr > td:first-child
        {
            font-weight: 600;
        }
        .table > tbody > tr > td p
        {
            color: #5a5a5a;
            font-size: 13px;
        }
        html
        {
            scroll-behavior: smooth;
        }
        .table-responsive
        {
            max-height: fit-content !important;
        }
        .table > tbody > tr > td
        {
            border-top: 1px solid #ddd !important;
        }
        .strategy-box
        {
            padding: 0px;
        }
    </style>
    <script type="text/javascript" id="www-widgetapi-script" src="https://www.youtube.com/s/player/f1ca6900/www-widgetapi.vflset/www-widgetapi.js" async=""></script><script src="//www.youtube.com/iframe_api"></script><script src="https://connect.facebook.net/signals/config/4419124158129568?v=2.9.48&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-KS6D7D"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script src="js/jquery.2.2.1.min.js" type="text/javascript"></script>
    <script src="https://stockaxis.com/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/theia-sticky-sidebar.js"></script>
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <!-- Global site tag (gtag.js) - Google AdWords: 975576672 -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-975576672"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-975576672');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
  m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-36732818-1', 'auto');
        ga('send', 'pageview');

    </script>
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-MTP84F" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager -->
    <script>        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({ 'gtm.start':
new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KS6D7D');</script>
    <!-- End Google Tag Manager -->
    <script type="text/javascript">
        function UncheckOthers(objchkbox) {
            //Get the parent control of checkbox which is the checkbox list
            var objchkList = objchkbox.parentNode.parentNode.parentNode;
            //Get the checkbox controls in checkboxlist
            var chkboxControls = objchkList.getElementsByTagName("input");
            //Loop through each check box controls
            for (var i = 0; i < chkboxControls.length; i++) {
                //Check the current checkbox is not the one user selected
                if (chkboxControls[i] != objchkbox && objchkbox.checked) {
                    //Uncheck all other checkboxes
                    chkboxControls[i].checked = false;
                }
            }
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Carter+One&amp;display=swap" rel="stylesheet">
    <!--Facebook-tag-->
    <meta name="facebook-domain-verification" content="i6csa6e2es7qfjl7ejtm9v68g2e45u">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KS6D7D" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <form name="form1" method="post" action="./Pricing.aspx?PKGName=SOM" id="form1" style="transform: none;">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=gcmtxvx8B1mVuhP2nh-FL7u0JZHuWQcV11Y5GO4ZKjDOIpdRucxAJXb-YKveoLIlAv2GDsQpSTdFNzRfgfDrEIkBWLE1&amp;t=637297883819849385" type="text/javascript"></script>


<script src="/ScriptResource.axd?d=D4-A0wWxM7jGyDNXHDQ6wl0ZmRjxVAU1CgFZNpixPnUQAbh6W_5gS-Hc-KMypbd4o1Be8BZInOPKRXSct1Q_UPfMxh_yRGFxkxGF1n9zeF88FR9pMVeko_Mp8Uriao6ioYcVeg2&amp;t=254cc609" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="/ScriptResource.axd?d=-j3aEWp4g2b_b4vDMDgGT7WT4xiZIRo6i1LoaoWlPuwiGbA2MBCYRX3cGakbWckepmZ_4JRVq0ZmXldftki7RDWP8CwlXP2ZpVQateNZ40hxUv4KGipsj9biskGRHY_igf2x3jvwkf5EGhHWaYsjpIlK4SM1&amp;t=254cc609" type="text/javascript"></script>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CC5BE9A3">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdABMnLRkpHv9anf6khPKuVbZJ9qGxZmipKtINb/C4sjxTmYlaN1SzXFvKR1CGI6G9blDssHClWgYz44ZFlHR6ROO8ji66IObcKfJFDJeVtfDys28yUyt4N11GCF+DV21+RJLUhos3MzDT6lKYzE3K/IDPWgy5AVE5hFAsPvpl8K1AcS6wNG5LAj4hMjIdqafT0HErnSUxOU5RMG5AIanCENzXMzWfygPggAexJOiHNCQPRZoVBOdQ2fIa2E585GnzPOUeVncrvIOOvoNnEWxCSOEUP5OSmxaO9JBReGHZO0Z35G2OBduw1Il9epC4ksa/WKJ8R8dMAFNdXO2id1RBSEsbc92dsndUeFhTGAsYMugD2rU3zaTs9Ah+Lyp4AX88QyFmscx8No65fZzkO44MlJ6LCNHrR2WWRjA/4UoGE5O0IA6JbYY=">
</div>
    
    <section class="pricing-main pad-t-30 margin-m-t-20">
    <div class="col-md-12 no-pad float-none text-center"> <img src="images/StockAxis-Logo-Mas.png" alt="StockAxis" border="0"> </div>
  </section>
  <!--Offer-Start-->
        
    <div class="col-md-12 no-pad float-none" id="section1">
    </div>
    <section class="pricing-main pad-t-50 pad-b-100 pad-m-b-50 pad-m-b-0" style="transform: none;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 margin-b-30">
          <div class="pricing-title text-center">
            <h3>
              <span id="lblTitle">Investment Choices</span>
            </h3>
            <h2>
              <span id="lblSubTitle">Research Based Stock Recommendations</span>
            </h2>
            <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ScriptManager1', 'form1', ['tUpdatePanel1',''], ['lnksmallCapFeatures','','lnksmallCapFeatures1',''], [], 90, '');
//]]>
</script>

          </div>
        </div>
      </div>
    </div>
    <div class="container" style="transform: none;">
      <div class="row" style="transform: none;">
        <div id="UpdatePanel1" style="transform: none;">
	
            <input type="hidden" name="hdnPkgSlide" id="hdnPkgSlide" value="0" style="">
         

            <script type="text/javascript" style="">
                // JavaScript function to call inside UpdatePanel
                function LoadScript() {
                    //alert($('input[name=hdndraggable]').val());
                    $('.sidebar').theiaStickySidebar({
                        additionalMarginTop: 77
                    });

                    $('.carousel').flickity({
                        // options

                        draggable: true,
                        initialIndex: $('input[name=hdnPkgSlide]').val(),
                        prevNextButtons: true,
                        pageDots: false,
                        wrapAround: true
                    });
                }
                        </script>
            <div class="col-sm-7 no-pad col-md-7 col-lg-8">
              
              <div class="pad-section-50 pad-m-t-0 pad-m-b-0 display-none-d">
                <div class="col-md-12 float-none margin-center">
                  
                  <!--Stocks on The Move Box-->
                  <div id="divSOTMMobile" class="strategy-box margin-b-30">
                    <div class="col-md-12 float-none card-off-pad">
                    <div class="row b-b">
                      <div class="col-sm-12">
                        <h4> <span>Stocks on The </span> Move</h4>
                        <p> Reap The Budding Jewels!</p>
                      </div>
                    </div>
                    <div class="row margin-t-20">
                      <div class="col-sm-8 col-md-8 col-lg-6 b-l">
                        <div class="strategy-fee">
                          <p class="margin-b-5"><b>Synopsis</b></p>
                          <div class="strategy-fee-cont">
                            <p>Recommendations of 15 – 20 momentum stocks in a year based on technical research.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="col-12 pad-l-0 pad-t-10">
                          <a id="lnksmallCapFeatures" class="fw-500 txt-newblue" href="javascript:__doPostBack('lnksmallCapFeatures','')"> Key Traits</a>
                        </div>
                        <div class="float-clear"> </div>
                      </div>
                      <div class="col-md-12 float-none margin-t-20 butn-box quest-options">
                        <div class="multibagger-fee-box checkbox-wrap-link check">
                          <table id="chklstSOTM" class="col-sm-4 col-md-4 col-lg-4" border="0">
		<tbody><tr>
			<td><input id="chklstSOTM_0" type="checkbox" name="chklstSOTM$0" onclick="UncheckOthers(this);setTimeout('__doPostBack(\'chklstSOTM$0\',\'\')', 0)"><label for="chklstSOTM_0">1 year - Rs. 25000</label></td>
		</tr><tr>
			<td><input id="chklstSOTM_1" type="checkbox" name="chklstSOTM$1" onclick="UncheckOthers(this);setTimeout('__doPostBack(\'chklstSOTM$1\',\'\')', 0)"><label for="chklstSOTM_1">6 months - Rs. 15000</label></td>
		</tr><tr>
			<td><input id="chklstSOTM_2" type="checkbox" name="chklstSOTM$2" onclick="UncheckOthers(this);setTimeout('__doPostBack(\'chklstSOTM$2\',\'\')', 0)"><label for="chklstSOTM_2">3 months - Rs. 10000</label></td>
		</tr>
	</tbody></table>
                          <div class="float-clear"></div>
                        </div>
                        
                      </div>                      
                    </div>
                    </div>
                   
                  </div>
                </div>
                
                      <!--3-6-months-->
                      
                      <!--1-Year-->
                      
              </div>
              
              <div class="col-md-42 no-pad display-none-m">
                <!--Emerging Market Box-->
                
                <!--Stocks on The Box-->
                <div id="divSOTM" class="strategy-box margin-b-30">
                    <div class="col-md-12 float-none card-off-pad">
                  <div class="row b-b">
                    <div class="col-sm-9">
                      <h4 class="margin-b-20"> <span>Stocks on The </span> Move</h4>
                    </div>
                    <div class="col-sm-3 text-right margin-b-10">
                      <a id="lnksmallCapFeatures1" class="fw-500 txt-newblue" href="javascript:__doPostBack('lnksmallCapFeatures1','')"> Key Traits</a>
                    </div>
                  </div>
                  <div class="row margin-t-30">
                    <div class="col-sm-12 col-md-7 col-lg-7">
                      <div class="strategy-fee">
                        <p class="margin-b-5"><b>Synopsis</b></p>
                        <div class="strategy-fee-cont">
                          <p>Recommendations of 15 – 20 momentum stocks in a year based on technical research.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-1 col-lg-1">
                      <div class="line-spc-card"></div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                      <p class="margin-b-5"><b>Service Duration</b></p>
                      <div class="form-group universal-form-select margin-b-0">
                        <select name="ddStockOnTheMove" onchange="javascript:setTimeout('__doPostBack(\'ddStockOnTheMove\',\'\')', 0)" id="ddStockOnTheMove">
		<option selected="selected" value="0">Select</option>
		<option value="3">1 year - Rs. 25000</option>
		<option value="2">6 months - Rs. 15000</option>
		<option value="1">3 months - Rs. 10000</option>

	</select>
                      </div>
                      
                    </div>
                  </div>
                  </div>
                 
                  <!--3-6-months-->
                  
                  <!--1-Year-->
                  
                </div>
              </div>
            </div>
            <!--Sidebar-->
            <div class="col-sm-5 col-md-5 col-lg-4 sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
              <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                <div class="pricing-sidebar">
                  <div class="pricing-title text-center">
                    <h3> Your Plans &amp; Pricing</h3>
                    <h2>
                      <span id="lblTitleShort"></span>
                    </h2>
                  </div>
                  
                  <!--Seleced Strategy-->
                  <div class="selected-strategy">
                    <!--Emerging market Leaders Seleced-->
                    <div id="divEMLSelected" class="selected-box-cart bg-red-light margin-b-15">
                      <div class="row margin-b-10">
                        <div class="col-xs-10 col-sm-10"> <b class="fw-800">Emerging market Leaders</b> </div>
                        <div class="col-xs-2 col-sm-2">
                          <a id="lnkEMLClose" class="close" href="javascript:__doPostBack('lnkEMLClose','')"></a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-6 col-sm-6"> <b class="fw-600 font-size-14">Service Duration</b></div>
                        <div class="col-xs-6 col-sm-6 text-right">
                          <span id="lblEMLDuration" class="fw-400 font-size-14">1 Year</span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-9 col-sm-9"> <b class="fw-600 font-size-14">Research Fees</b></div>
                        <div class="col-xs-3 col-sm-3 text-right"> <b class="fw-400 font-size-14">
                          <span id="lblEMLSelectedPrice">25000</span>
                          </b></div>
                      </div>
                    </div>
                    <!--Stock on The Move Seleced-->
                    
                  </div>
                  
                  


                 
                    <div class="col-md-12 float-none lcard-off" "="">
                     <div class="col-md-12 float-none no-pad lcard-off-br"> <i class="pe-7s-alarm"></i></h3></div>
                     <div class="col-md-12 float-none no-pad"></div>
                        
                             <div id="DivCouponVoucher">
                                <div class="col-md-12 no-pad float-none margin-t-20 margin-b-10">
                                  <div class="input-group offcoup">
                                   
                                    <div class="input-group-btn">
                                      
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 float-none no-pad margin-t-10">
                                  
                                </div>
                            </div>
                    </div>
                  <!--Total-->
                  <div class="strategy-calc">
                    <div class="row pad-b-10">
                      <div class="col-xs-5 col-sm-5"> <b class="fw-400 font-size-14">Total Amount</b></div>
                      <div class="col-xs-7 col-sm-7 text-right"> <b class="fw-400 font-size-14">Rs.
                        <span id="lblTotalAmt">25000</span>
                        </b></div>
                    </div>
                    
                    
                    
                    
                    
                    
                    <div class="row pad-b-10">
                      <div class="col-xs-5 col-sm-5"> <b class="fw-400 font-size-14">Research Fees</b></div>
                      <div class="col-xs-7 col-sm-7 text-right"> <b class="fw-400 font-size-14">Rs.
                        <span id="lblAdvisoryFee">21186</span>
                        </b></div>
                    </div>
                    <div class="row">
                      <div class="col-xs-8 col-sm-8"> <b class="fw-400 font-size-14">Goods &amp; Services Tax (18%)</b></div>
                      <div class="col-xs-4 col-sm-4 text-right"> <b class="fw-400 font-size-14">Rs.
                        <span id="lblGST">3814</span>
                        </b></div>
                    </div>
                    <hr class="margin-t-10 margin-b-10"> 
                    <div class="row">
                      <div class="col-xs-7 col-sm-7"> <b class="fw-400 font-size-14">Payable Amount</b></div>
                      <div class="col-xs-5 col-sm-5 text-right"> <b class="fw-400 font-size-14">Rs.
                        <span id="lblPayableAmt">25000</span>
                        </b></div>
                    </div>
                    <div class="row margin-t-20">
                      <div class="col-sm-12">
                        <a id="lnkCheckOut" class="btn btn-blue-dark btn-m width-100 text-center" href="loguser">Proceed For Payment</a>
                      </div>
                    </div>
                    <div class="row margin-t-20">
                      <div class="col-sm-12">
                        <span id="lblSelectMsg" style="color:Red;"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 float-none no-pad margin-t-10">
                  <div class="tooltip-dic align-center"> How to apply coupon avail discount?
                    <div class="tooltiptextbs"> To apply a coupon code to your subscription, follow the steps below:
                      <ol type="1">
                        <li>Select your preferred services</li>
                        <li>Enter the coupon code in the designated coupon field.</li>
                        <li>Click the [Apply] button to the right of the coupon field.<br>
                          Once you have entered your code and clicked [Apply], you will see your ‘Coupon Discount’ in green, below your total amount</li>
                        <li>Proceed to checkout and subscribe to your services.</li>
                      </ol>
                    </div>
                  </div>
                  <div style="display:none">
                    <input name="txtCID" type="text" value="0" id="txtCID" style="width:50px;">
                  </div>
                </div>
              </div>
            </div>
            <div class="float-clear"></div>
          
</div>
      </div>
    </div>
  </section>
    <div class="col-md-12 no-pad float-none" id="section2">
    </div>
    <!--Emerging Market Feature Popup-->
    <div id="multibaggerFeatures" class="modal fade modal-default-fade modal-light in" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-default-dialog pri-pop-w">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        ×</button>
                </div>
                <div class="modal-body margin-center no-pad">
                    <div class="col-md-12 float-none no-pad mod-hed">
                        <div class="featuresPopHead">
                            <h3>
                                <span><i class="pe-7s-light pe-fw"></i>Emerging Market Leaders</span></h3>
                        </div>
                    </div>
                    <!--about-us-txt-->
                    <div class="col-md-12 float-none no-pad pad-b-0 pad-m-b-50 pri-pop-height">
                        <div class="featuresPopCont pad-30 pad-m-20">
                            <div class="text-center margin-b-30">
                                <p class="no-margin align-center font-weight-600">
                                    Recommendations of 10 - 15 sound fundamental companies in a year with the potential
                                    to grow exponentially which can create wealth in the medium to long term.<i> The essence
                                        is to spot young companies and watch them grow.</i></p>
                            </div>
                            <h3 class="txt-dark font-weight-600 align-center margin-b-15">
                                Emerging Market Leaders - Key Traits</h3>
                            <div class="table-responsive pri-lb-tab margin-b-10">
                                <table class="table term-tab-txt table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="text-align-left">
                                                Stock Selection Criteria
                                            </td>
                                            <td class="align-center">
                                                Both growth and value stocks where fundamentals are very strong.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                Number of recommendations
                                            </td>
                                            <td class="align-center">
                                                Recommendations of 10 - 15 sound fundamental companies in a year.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                Recommended Investment Tenure
                                            </td>
                                            <td class="align-center">
                                                3 years to get optimum returns.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                Possible Risk
                                            </td>
                                            <td class="align-center">
                                                Business model does not scale up, liquidity risk and high volatility in Returns
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                Access to the Research Analysts
                                            </td>
                                            <td class="align-center">
                                                <img src="images/checkmark.png">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                Recommendations via SMS, email &amp; mobile app notifications at real-time
                                            </td>
                                            <td class="align-center">
                                                <img src="images/checkmark.png">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                Research Reports &amp; Regular Updates
                                            </td>
                                            <td class="align-center">
                                                <img src="images/checkmark.png">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                A Dedicated Relationship Manager
                                            </td>
                                            <td class="align-center">
                                                <img src="images/checkmark.png">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                Online access to the recommended stocks
                                            </td>
                                            <td class="align-center">
                                                <img src="images/checkmark.png">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12 float-none no-pad text-center margin-t-20">
                                <a id="LinkButton1" class="btn btn-m btn-light font-weight-600" href="javascript:__doPostBack('LinkButton1','')">Select</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--portfolio-information-->
    <section class="pad-t-100 pad-b-100 pad-m-t-50 pad-m-b-50 bg-1 pad-section-50">
    <div class="container">
      <div class="col-md-12 float-none no-pad margin-b-50 margin-m-b-30 wow fadeIn align-center service-title" data-wow-delay="0.2s">
        <h2>Performance Report</h2>
        <p>View recent recommendations before subscription</p>
      </div>
      <div class="row">
        <div class="col-md-12 margin-center no-pad float-none bhoechie-tab-container wow fadeIn" data-wow-delay="0.2s">
          <div class="col-md-12 float-none bhoechie-tab-menu">
            <div class="list-group tab-w-ls"> <a id="chart1" target="1" class="showSingle list-group-item text-center"> Emerging Market Leaders </a> <a id="chart2" target="2" class="showSingle list-group-item active text-center"> Stocks on The Move </a> </div>
          </div>
          <div class="col-md-12 float-none bhoechie-tab">
            <div id="div1" class="row targetDiv" style="display: none;">
              <div class="col-md-12 float-none margin-t-40 margin-b-40">
                <div class="row">
                  <div class="col-md-12 float-none margin-t-0">
                    <div class="table-responsive performance-m-height table-">
                      <table class="table table-hover table-striped">
                        <thead>
                          <tr class="bg-lightblue">
                            <th class="width-15 text-left"> Company </th>
                            <th class="width-15 display-none-m text-right"> Reco. Price </th>
                            <th class="width-15 display-none-m text-right"> Reco. Date </th>
                            <th class="width-15 text-right"> Profit Booked </th>
                            <th class="width-15 text-right"> Duration </th>
                          </tr>
                        </thead>
                        <tbody>
                          
                              <tr>
                                <td class="width-30 width-15 comp-home-logo text-align-left"><a id="rptPerformanceEML_ctl00_HyperLink1" href="https://stockaxis.com/Research-Reports/Indo-Count-Industries-Ltd-MB-08-06-2021.html#" target="_blank"><img id="rptPerformanceEML_ctl00_Image1" class="img-responsive per-logo-img border-0" src="//stockaxis.com/backoffice/Attachments/Indo-Count-Inds-Ltd.png" alt="Company Logo" style="border-width:0px;"></a>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right">Rs.
                                  <span id="rptPerformanceEML_ctl00_Label5">162.00</span>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right"><span id="rptPerformanceEML_ctl00_lblRecoDate">Jun 08, 2021</span>
                                  
                                </td>
                                <td class="width-30 width-15 tab-hed-green font-weight-600 text-align-right"><span id="rptPerformanceEML_ctl00_Label8">80.12%</span>
                                  <br>
                                  
                                </td>
                                <td class="width-30 width-15 text-align-right"><span id="rptPerformanceEML_ctl00_lblDays">3.8 Months</span>
                                </td>
                              </tr>
                            
                              <tr>
                                <td class="width-30 width-15 comp-home-logo text-align-left"><a id="rptPerformanceEML_ctl01_HyperLink1" href="https://stockaxis.com/Research-Reports/Hikal-Ltd-EML-21-05-2021.html#" target="_blank"><img id="rptPerformanceEML_ctl01_Image1" class="img-responsive per-logo-img border-0" src="//stockaxis.com/backoffice/Attachments/Hikal-Ltd.png" alt="Company Logo" style="border-width:0px;"></a>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right">Rs.
                                  <span id="rptPerformanceEML_ctl01_Label5">377.00</span>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right"><span id="rptPerformanceEML_ctl01_lblRecoDate">May 21, 2021</span>
                                  
                                </td>
                                <td class="width-30 width-15 tab-hed-green font-weight-600 text-align-right"><span id="rptPerformanceEML_ctl01_Label8">57.29%</span>
                                  <br>
                                  <span id="rptPerformanceEML_ctl01_Label9">38.73%</span>
                                </td>
                                <td class="width-30 width-15 text-align-right"><span id="rptPerformanceEML_ctl01_lblDays">4.8 Months</span>
                                </td>
                              </tr>
                            
                              <tr>
                                <td class="width-30 width-15 comp-home-logo text-align-left"><a id="rptPerformanceEML_ctl02_HyperLink1" href="https://stockaxis.com/Research-Reports/KPIT-Technologies-Ltd-EML-07-04-2021.html#" target="_blank"><img id="rptPerformanceEML_ctl02_Image1" class="img-responsive per-logo-img border-0" src="//stockaxis.com/backoffice/Attachments/KPIT.png" alt="Company Logo" style="border-width:0px;"></a>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right">Rs.
                                  <span id="rptPerformanceEML_ctl02_Label5">182.00</span>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right"><span id="rptPerformanceEML_ctl02_lblRecoDate">Apr 07, 2021</span>
                                  
                                </td>
                                <td class="width-30 width-15 tab-hed-green font-weight-600 text-align-right"><span id="rptPerformanceEML_ctl02_Label8">86.54%</span>
                                  <br>
                                  
                                </td>
                                <td class="width-30 width-15 text-align-right"><span id="rptPerformanceEML_ctl02_lblDays">5.9 Months</span>
                                </td>
                              </tr>
                            
                              <tr>
                                <td class="width-30 width-15 comp-home-logo text-align-left"><a id="rptPerformanceEML_ctl03_HyperLink1" href="https://stockaxis.com/Flash-Note/Intellect-Design-Arena-Ltd-EML-15-03-2021.html#" target="_blank"><img id="rptPerformanceEML_ctl03_Image1" class="img-responsive per-logo-img border-0" src="//stockaxis.com/backoffice/Attachments/intellect-design-arena.png" alt="Company Logo" style="border-width:0px;"></a>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right">Rs.
                                  <span id="rptPerformanceEML_ctl03_Label5">496.00</span>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right"><span id="rptPerformanceEML_ctl03_lblRecoDate">Mar 12, 2021</span>
                                  
                                </td>
                                <td class="width-30 width-15 tab-hed-green font-weight-600 text-align-right"><span id="rptPerformanceEML_ctl03_Label8">39.11%</span>
                                  <br>
                                  
                                </td>
                                <td class="width-30 width-15 text-align-right"><span id="rptPerformanceEML_ctl03_lblDays">6.9 Months</span>
                                </td>
                              </tr>
                            
                              <tr>
                                <td class="width-30 width-15 comp-home-logo text-align-left"><a id="rptPerformanceEML_ctl04_HyperLink1" href="https://stockaxis.com/Research-Reports/Coforge-Ltd-EML-15-12-2020.html#" target="_blank"><img id="rptPerformanceEML_ctl04_Image1" class="img-responsive per-logo-img border-0" src="//stockaxis.com/backoffice/Attachments/Coforge-Ltd.png" alt="Company Logo" style="border-width:0px;"></a>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right">Rs.
                                  <span id="rptPerformanceEML_ctl04_Label5">2540.00</span>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right"><span id="rptPerformanceEML_ctl04_lblRecoDate">Mar 09, 2021</span>
                                  
                                </td>
                                <td class="width-30 width-15 tab-hed-green font-weight-600 text-align-right"><span id="rptPerformanceEML_ctl04_Label8">129.64%</span>
                                  <br>
                                  
                                </td>
                                <td class="width-30 width-15 text-align-right"><span id="rptPerformanceEML_ctl04_lblDays">6.6 Months</span>
                                </td>
                              </tr>
                            
                              <tr>
                                <td class="width-30 width-15 comp-home-logo text-align-left"><a id="rptPerformanceEML_ctl05_HyperLink1" href="https://stockaxis.com/Research-Reports/Poly-Medicure-Ltd-EML-19-01-2021.html#" target="_blank"><img id="rptPerformanceEML_ctl05_Image1" class="img-responsive per-logo-img border-0" src="//stockaxis.com/backoffice/Attachments/w8SEr9ZCPoly-Medicure.png" alt="Company Logo" style="border-width:0px;"></a>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right">Rs.
                                  <span id="rptPerformanceEML_ctl05_Label5">516.00</span>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right"><span id="rptPerformanceEML_ctl05_lblRecoDate">Jan 19, 2021</span>
                                  
                                </td>
                                <td class="width-30 width-15 tab-hed-green font-weight-600 text-align-right"><span id="rptPerformanceEML_ctl05_Label8">81.59%</span>
                                  <br>
                                  <span id="rptPerformanceEML_ctl05_Label9">81.59%</span>
                                </td>
                                <td class="width-30 width-15 text-align-right"><span id="rptPerformanceEML_ctl05_lblDays">5.2 Months</span>
                                </td>
                              </tr>
                            
                              <tr>
                                <td class="width-30 width-15 comp-home-logo text-align-left"><a id="rptPerformanceEML_ctl06_HyperLink1" href="https://stockaxis.com/Research-Reports/Cera-Sanitaryware-Ltd-MB-12-11-2020.html#" target="_blank"><img id="rptPerformanceEML_ctl06_Image1" class="img-responsive per-logo-img border-0" src="//stockaxis.com/backoffice/Attachments/cera.png" alt="Company Logo" style="border-width:0px;"></a>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right">Rs.
                                  <span id="rptPerformanceEML_ctl06_Label5">2790.00</span>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right"><span id="rptPerformanceEML_ctl06_lblRecoDate">Jan 13, 2021</span>
                                  
                                </td>
                                <td class="width-30 width-15 tab-hed-green font-weight-600 text-align-right"><span id="rptPerformanceEML_ctl06_Label8">104.30%</span>
                                  <br>
                                  
                                </td>
                                <td class="width-30 width-15 text-align-right"><span id="rptPerformanceEML_ctl06_lblDays">8.6 Months</span>
                                </td>
                              </tr>
                            
                              <tr>
                                <td class="width-30 width-15 comp-home-logo text-align-left"><a id="rptPerformanceEML_ctl07_HyperLink1" href="https://stockaxis.com/Research-Reports/Prince-Pipes-and-Fittings-Ltd-SC-30-12-2020.html#" target="_blank"><img id="rptPerformanceEML_ctl07_Image1" class="img-responsive per-logo-img border-0" src="//stockaxis.com/backoffice/Attachments/Prince-Pipes-Ltd.png" alt="Company Logo" style="border-width:0px;"></a>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right">Rs.
                                  <span id="rptPerformanceEML_ctl07_Label5">295.50</span>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right"><span id="rptPerformanceEML_ctl07_lblRecoDate">Dec 30, 2020</span>
                                  
                                </td>
                                <td class="width-30 width-15 tab-hed-green font-weight-600 text-align-right"><span id="rptPerformanceEML_ctl07_Label8">168.83%</span>
                                  <br>
                                  
                                </td>
                                <td class="width-30 width-15 text-align-right"><span id="rptPerformanceEML_ctl07_lblDays">4.8 Months</span>
                                </td>
                              </tr>
                            
                              <tr>
                                <td class="width-30 width-15 comp-home-logo text-align-left"><a id="rptPerformanceEML_ctl08_HyperLink1" href="https://stockaxis.com/Research-Reports/Acrysil-Ltd-MB-29-12-2020.html#" target="_blank"><img id="rptPerformanceEML_ctl08_Image1" class="img-responsive per-logo-img border-0" src="//stockaxis.com/backoffice/Attachments/Acrysil-Ltd.png" alt="Company Logo" style="border-width:0px;"></a>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right">Rs.
                                  <span id="rptPerformanceEML_ctl08_Label5">182.00</span>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right"><span id="rptPerformanceEML_ctl08_lblRecoDate">Dec 29, 2020</span>
                                  
                                </td>
                                <td class="width-30 width-15 tab-hed-green font-weight-600 text-align-right"><span id="rptPerformanceEML_ctl08_Label8">73.54%</span>
                                  <br>
                                  <span id="rptPerformanceEML_ctl08_Label9">73.54%</span>
                                </td>
                                <td class="width-30 width-15 text-align-right"><span id="rptPerformanceEML_ctl08_lblDays">1.9 Months</span>
                                </td>
                              </tr>
                            
                              <tr>
                                <td class="width-30 width-15 comp-home-logo text-align-left"><a id="rptPerformanceEML_ctl09_HyperLink1" href="https://stockaxis.com/Research-Reports/Tata-Elxsi-Ltd-EML-06-01-2021.html#" target="_blank"><img id="rptPerformanceEML_ctl09_Image1" class="img-responsive per-logo-img border-0" src="//stockaxis.com/backoffice/Attachments/tata-elxsi.png" alt="Company Logo" style="border-width:0px;"></a>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right">Rs.
                                  <span id="rptPerformanceEML_ctl09_Label5">1631.00</span>
                                </td>
                                <td class="width-30 width-15 display-none-m text-align-right"><span id="rptPerformanceEML_ctl09_lblRecoDate">Dec 17, 2020</span>
                                  
                                </td>
                                <td class="width-30 width-15 tab-hed-green font-weight-600 text-align-right"><span id="rptPerformanceEML_ctl09_Label8">292.21%</span>
                                  <br>
                                  
                                </td>
                                <td class="width-30 width-15 text-align-right"><span id="rptPerformanceEML_ctl09_lblDays">9.8 Months</span>
                                </td>
                              </tr>
                            
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="div2" class="row targetDiv" style="display: block;">
              <div class="col-md-12 float-none margin-t-40 margin-b-40">
                <div class="row">
                  <div class="col-md-12 float-none margin-t-0">
                    <div class="table-responsive performance-m-height border-0">
                      <table class="table table-hover">
                        <thead>
                          <tr class="bg-lightblue">
                            <th class="width-15 text-left"> Company </th>
                            <th class="width-15 display-none-m text-right"> Reco. Price </th>
                            <th class="width-15 display-none-m text-right"> Reco. Date </th>
                            <th class="width-15 text-right"> Profit Booked </th>
                            <th class="width-15 text-right"> Duration </th>
                          </tr>
                        </thead>
                        <tbody>
                          
                        <tbody>
                            @foreach($item as $list)
                            <tr>
<td><img src="{{asset('public/assets/'.$list->image)}}  "></td>
<td>{{$list->price}}</td>
<td>{{$list->date}}</td>
<td>{{$list->profit}}</td>
<td>{{$list->duration}}</td>
                          </tr>
                          @endforeach
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="float-clear"></div>
        </div>
      </div>
    </div>
  </section>
    <section class="pad-t-20 pad-b-50 pad-m-t-0">
    <div class="container">
      <!--FAQ-->
      <div class="row margin-t-50">
        <div class="col-sm-12">
          <div class="faq-txt">
            <div class="row">
              <div class="col-sm-12 float-none margin-b-50">
                <div class="pricing-title text-center">
                  <h3> Frequently Asked Questions</h3>
                  <h2> MOST COMMON QUESTIONS</h2>
                </div>
              </div>
            </div>
            <div class="panel-group" id="accordion">
              <div class="col-md-12 no-pad float-none">
                <div class="col-md-45 pad-l-0 pad-m-0">
                  <h3>Seeking to build wealth</h3>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion3" href="#collapse001" class="accordion-toggle collapsed"> Is Emerging Market Leaders the right service for me? <span class="icon-plus2"></span></a> </h4>
                    </div>
                    <div id="collapse001" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="text-justify"> That depends on what your investment objectives are. If you are a long-term investor seeking some quality Multibagger stocks that can generate sustainable wealth for your equity portfolio, then we believe you have found exactly what you are looking for!</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsecf2" class="accordion-toggle collapsed"> How can StockAxis Emerging Market Leaders help me? <span class="icon-plus2"></span></a> </h4>
                    </div>
                    <div id="collapsecf2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="text-justify"> Choosing potential market leaders that can eventually lead to multi-bagger returns requires intensive institutional level research which requires expertise, dedication &amp; resources. Emerging Market Leaders brings you all of that and more so that your portfolio is empowered &amp; filled with wealth generators. After all, quality research is the key to quality returns. </p>
                      </div>
                    </div>
                  </div>
                  <h3 class="margin-t-50">Looking for short-term opportunities</h3>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsecf3" class="accordion-toggle collapsed"> Is StockAxis Stocks on the Move right for me? <span class="icon-plus2"></span></a> </h4>
                    </div>
                    <div id="collapsecf3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="text-justify"> If you are an investor who seeks to benefit from the equity market in the short-term horizon but wants to avoid the risks associated with trading, then StockAxis Stocks on the move might just be your match.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsecf4" class="accordion-toggle collapsed"> How can Stocks on the Move help me? <span class="icon-plus2"> </span></a> </h4>
                    </div>
                    <div id="collapsecf4" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="text-justify margin-b-20"> Oftentimes, investors enter a ‘hot stock’ after it has significantly moved &amp; end up making meagre returns or simply wasting their time &amp; efforts. We don’t want that to happen to you. </p>
                        <p class="text-justify"> Stocks on the Move will enable you to invest in premium stocks at just the right technical ‘buy points’ so that you can generate quality returns by capturing an uptrend at the right time. </p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsecf5" class="accordion-toggle collapsed"> Will I be using Stop Loss? <span class="icon-plus2"></span></a> </h4>
                    </div>
                    <div id="collapsecf5" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="text-justify">Yes. Stocks on the Move adheres to a strict stop loss of 8-10% to ensure that your capital is protected at all times.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-45 pad-r-0 pad-m-0 col-md-offset-l">
                  <h3>Getting Started with StockAxis</h3>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion3" href="#collapse06" class="accordion-toggle collapsed"> How does this service work? <span class="icon-plus2"></span> </a> </h4>
                    </div>
                    <div id="collapse06" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="text-justify"> With StockAxis Services, you get to know what to buy, when to buy &amp; why to buy. All you have to do is execute the trades once you receive our recommendations &amp; then watch your equity portfolio grow.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsecf13" class="accordion-toggle collapsed"> How will I receive the recommendations? <span class="icon-plus2"></span></a> </h4>
                    </div>
                    <div id="collapsecf13" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="text-justify"> You shall receive the recommendations on a real-time basis via SMS, E-mail &amp; App notification.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsecf16" class="accordion-toggle collapsed"> What else will I receive apart from recommendations? <span class="icon-plus2"></span></a> </h4>
                    </div>
                    <div id="collapsecf16" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="text-justify"> You deserve to know why you are investing in our recommendations. We promise to keep you updated and share all the research reports with you via E-mail. </p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsecf18" class="accordion-toggle collapsed"> How do I track my recommendations? <span class="icon-plus2"></span></a> </h4>
                    </div>
                    <div id="collapsecf18" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="text-justify">You can easily keep track of your recommendations by logging in to our website or mobile app. You can also choose to invest &amp; rest as we are constantly keeping track for you. </p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion3" href="#collapse07" class="accordion-toggle collapsed"> What if I have queries? <span class="icon-plus2"> </span></a> </h4>
                    </div>
                    <div id="collapse07" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="text-justify"> Fret not! You shall be allotted a Relationship Manager who shall accompany you on your investment journey with StockAxis &amp; will ensure that all your queries are answered.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsecf17" class="accordion-toggle collapsed"> What happens if I have research-related queries? <span class="icon-plus2"></span></a> </h4>
                    </div>
                    <div id="collapsecf17" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="text-justify"> If so, our research analysts are just a call away &amp; shall be happy to assist you.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="float-clear"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!--Stocks on The Move Feature Popup-->
    <div id="smallCapFeatures" class="modal fade modal-default-fade modal-light in" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-default-dialog pri-pop-w">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        ×</button>
                </div>
                <div class="modal-body margin-center no-pad">
                    <div class="col-md-12 float-none no-pad mod-hed">
                        <div class="featuresPopHead">
                            <h3>
                                <span><i class="pe-7s-diamond pe-fw"></i>Stocks on The Move</span></h3>
                        </div>
                    </div>
                    <!--about-us-txt-->
                    <div class="col-md-12 float-none no-pad pad-b-0 pad-m-b-50 pri-pop-height">
                        <div class="featuresPopCont pad-30">
                            <div class="text-center margin-b-30">
                                <p class="no-margin align-center font-weight-600">
                                    Recommendations of 15 – 20 Stocks on The Move in a year which are at their nascent
                                    stage and likely to become tomorrow’s mid-cap stocks.</p>
                            </div>
                            <h3 class="txt-dark font-weight-600 align-center margin-b-15">
                                Stocks on The Move - Key Traits</h3>
                            <div class="table-responsive pri-lb-tab margin-b-10">
                                <table class="table term-tab-txt table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="text-align-left">
                                                Stock Selection Criteria
                                            </td>
                                            <td class="align-center">
                                                Bottom up approach, focus towards business with scalability, and significant opportunity
                                                for re-rating of stocks with an aim to deliver superior returns in the long term.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                Number of recommendations
                                            </td>
                                            <td class="align-center">
                                                Recommendations of 15 - 20 Stocks on The Move stocks in a year.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                Recommended Investment Tenure
                                            </td>
                                            <td class="align-center">
                                                3 - 6 months to get optimum returns.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                Access to the Research Analysts
                                            </td>
                                            <td class="align-center">
                                                <img src="images/checkmark.png">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                Research Reports &amp; Regular Updates
                                            </td>
                                            <td class="align-center">
                                                <img src="images/checkmark.png">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                A Dedicated Relationship Manager
                                            </td>
                                            <td class="align-center">
                                                <img src="images/checkmark.png">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-align-left">
                                                Online access to the recommended stocks
                                            </td>
                                            <td class="align-center">
                                                <img src="images/checkmark.png">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12 float-none no-pad text-center margin-t-20">
                                <a id="LinkButton4" class="btn btn-m btn-light font-weight-600" href="javascript:__doPostBack('LinkButton4','')">Select</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <section class="pricing-main pad-t-40 pad-b-40 footer-bg">
    <div class="col-md-12 no-pad float-none margin-center">
      <div class="container">
        <div class="footer-bot-p margin-t-15 margin-m-t-0 margin-b-10 wow fadeIn">
          <div class="row v-align">
            <div class="col-md-3 col-sm-3 text-center-m">
              <div class="mas-ftr-logo">
                <div class="mas-logo text-center-m"> <img src="https://stockaxis.com/images/StockAxis-Logo-Mas.png"> </div>
              </div>
            </div>
            <div class="col-md-9 margin-m-t-20">
              <div class="col-md-12 float-none">
                <p class="margin-0"> <b>SEBI Registered Research Analyst Details:</b> |  Registered Name: Opulent Investment Adviser Private Limited |  Type of registration: Non-Individual | Registration No.: INH000007669 | Validity: Jul 02, 2020 - Jul 01, 2025 </p>
              </div>
              <div class="col-md-12 margin-t-20 margin-m-l-0">
                <p class="text-center">Our past performance does not guarantee the future performance. Investment in equities is subject to market risks. Notwithstanding all the efforts to do best research, clients should understand that investing in equities involves a risk of loss of both income and principal. Please ensure that you understand fully the risks involved in investment in equities. </p>
              </div>
            </div>
          </div>
          <div align="center" class="col-md-12 float-none masftrlasp"> </div>
        </div>
      </div>
    </div>
  </section>
    

<script type="text/javascript">
//<![CDATA[
LoadScript();//]]>
</script>
</form><div class="razorpay-container" style="z-index: 1000000000; position: fixed; top: 0px; display: none; left: 0px; height: 100%; width: 100%; backface-visibility: hidden; overflow-y: visible;"><style>@keyframes rzp-rot{to{transform: rotate(360deg);}}@-webkit-keyframes rzp-rot{to{-webkit-transform: rotate(360deg);}}</style><div class="razorpay-backdrop" style="min-height: 100%; transition: all 0.3s ease-out 0s; position: fixed; top: 0px; left: 0px; width: 100%; height: 100%;"><span style="text-decoration: none; background: rgb(214, 68, 68); border: 1px dashed white; padding: 3px; opacity: 0; transform: rotate(45deg); transition: opacity 0.3s ease-in 0s; font-family: lato, ubuntu, helvetica, sans-serif; color: white; position: absolute; width: 200px; text-align: center; right: -50px; top: 50px;">Test Mode</span></div><iframe style="opacity: 1; height: 100%; position: relative; background: none; display: block; border: 0 none transparent; margin: 0px; padding: 0px; z-index: 2;" allowtransparency="true" frameborder="0" width="100%" height="100%" allowpaymentrequest="true" src="https://api.razorpay.com/v1/checkout/public" class="razorpay-checkout-frame"></iframe></div>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script>
        function myFunction() {
            document.getElementById("myP").style.display = "none";
            document.getElementById("myP1").style.display = "none";
        }
    </script>
    
    <script>
        jQuery(function () {
            jQuery('.showSingle').click(function () {
                jQuery('.targetDiv').hide();
                jQuery('#div' + $(this).attr('target')).show();
                var a = 0;
                a = $(this).attr('target');
                //alert(a);
                if (a == 1) {
                    $('#chart1').removeClass('showSingle list-group-item text-center').addClass('showSingle list-group-item active text-center');
                    $('#chart2').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart3').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart4').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#ctl00_Content_chart5').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                }
                else if (a == 2) {
                    $('#chart1').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart2').removeClass('showSingle list-group-item text-center').addClass('showSingle list-group-item active text-center');
                    $('#chart3').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart4').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#ctl00_Content_chart5').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                }
                else if (a == 3) {
                    $('#chart1').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart2').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart3').removeClass('showSingle list-group-item text-center').addClass('showSingle list-group-item active text-center');
                    $('#chart4').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#ctl00_Content_chart5').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                }
                else if (a == 4) {
                    $('#chart1').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart2').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart3').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart4').removeClass('showSingle list-group-item text-center').addClass('showSingle list-group-item active text-center');
                    $('#ctl00_Content_chart5').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                }
                else if (a == 5) {
                    $('#chart1').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart2').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart3').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart4').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#ctl00_Content_chart5').removeClass('showSingle list-group-item text-center').addClass('showSingle list-group-item active text-center');
                }
                else {
                    $('#chart1').removeClass('showSingle list-group-item text-center').addClass('showSingle list-group-item active text-center');
                    $('#chart2').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart3').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#chart4').removeClass('showSingle list-group-item active text-center').addClass('showSingle list-group-item text-center');
                    $('#ctl00_Content_chart5').removeClass('showSingle list-group-item text-center').addClass('showSingle list-group-item active text-center');
                }
            });
        });
    </script>



<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","4419124158129568");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=4419124158129568&amp;ev=PageView&amp;noscript=1"></noscript>
<script type="text/javascript" id="gtm-youtube-tracking">(function(k,g,q){function u(){"loading"!==k.readyState?r():"addEventListener"in k?v(k,"DOMContentLoaded",r):v(g,"load",r)}function r(){var a=[].slice.call(k.getElementsByTagName("iframe")).concat([].slice.call(k.getElementsByTagName("embed"))),b;for(b=0;b<a.length;b++){var d=w(a[b]);if(d){d=a[b];var c=g.location,e=k.createElement("a");e.href=d.src;e.hostname="www.youtube.com";e.protocol=c.protocol;var f="/"===e.pathname.charAt(0)?e.pathname:"/"+e.pathname;-1<e.search.indexOf("enablejsapi")||(e.search=
(0<e.search.length?e.search+"\x26":"")+"enablejsapi\x3d1");if(!(-1<e.search.indexOf("origin"))&&-1===c.hostname.indexOf("localhost")){var t=c.port?":"+c.port:"";c=c.protocol+"%2F%2F"+c.hostname+t;e.search=e.search+"\x26origin\x3d"+c}"application/x-shockwave-flash"===d.type&&(c=k.createElement("iframe"),c.height=d.height,c.width=d.width,f=f.replace("/v/","/embed/"),d.parentNode.parentNode.replaceChild(c,d.parentNode),d=c);e.pathname=f;d.src!==e.href+e.hash&&(d.src=e.href+e.hash);x(d)}}"addEventListener"in
k&&k.addEventListener("load",C,!0)}function w(a){a=a.src||"";return-1<a.indexOf("youtube.com/embed/")||-1<a.indexOf("youtube.com/v/")?!0:!1}function x(a){var b=YT.get(a.id);b||(b=new YT.Player(a,{}));"undefined"===typeof a.pauseFlag&&(a.pauseFlag=!1,b.addEventListener("onStateChange",function(d){D(d,a)}))}function E(a){var b={};h.events["Watch to End"]&&(b["Watch to End"]=Math.min(a-3,Math.floor(.99*a)));if(h.percentageTracking){var d=[],c;h.percentageTracking.each&&(d=d.concat(h.percentageTracking.each));
if(h.percentageTracking.every){var e=parseInt(h.percentageTracking.every,10),f=100/e;for(c=1;c<f;c++)d.push(c*e)}for(c=0;c<d.length;c++)f=d[c],e=f+"%",f=a*f/100,b[e]=Math.floor(f)}return b}function D(a,b){var d=a.data,c=a.target;a=c.getVideoUrl();a=a.match(/[?&]v=([^&#]*)/)[1];var e=c.getPlayerState(),f=Math.floor(c.getDuration()),t=E(f);f={1:"Play",2:"Pause"};f=f[d];b.playTracker=b.playTracker||{};1!==e||b.timer?(clearInterval(b.timer),b.timer=!1):(clearInterval(b.timer),b.timer=setInterval(function(){var m=
c,y=t,n=b.videoId,F=m.getCurrentTime(),p;m[n]=m[n]||{};for(p in y)y[p]<=F&&!m[n][p]&&(m[n][p]=!0,z(n,p))},1E3));1===d&&(b.playTracker[a]=!0,b.videoId=a,b.pauseFlag=!1);if(!b.playTracker[b.videoId])return!1;if(2===d){if(b.pauseFlag)return!1;b.pauseFlag=!0}A[f]&&z(b.videoId,f)}function z(a,b){a="https://www.youtube.com/watch?v\x3d"+a;var d=g.GoogleAnalyticsObject;if("undefined"===typeof g[B]||h.forceSyntax)if("function"===typeof g[d]&&"function"===typeof g[d].getAll&&2!==h.forceSyntax)g[d]("send","event",
"Videos",b,a);else"undefined"!==typeof g._gaq&&1!==G&&g._gaq.push(["_trackEvent","Videos",b,a]);else g[B].push({event:"youTubeTrack",attributes:{videoUrl:a,videoAction:b}})}function v(a,b,d){if(a.addEventListener)a.addEventListener(b,d);else if(a.attachEvent)a.attachEvent("on"+b,function(c){c.target=c.target||c.srcElement;d.call(a,c)});else if("undefined"===typeof a["on"+b]||null===a["on"+b])a["on"+b]=function(c){c.target=c.target||c.srcElement;d.call(a,c)}}function C(a){a=a.target||a.srcElement;
var b=w(a);"IFRAME"===a.tagName&&b&&-1<a.src.indexOf("enablejsapi")&&-1<a.src.indexOf("origin")&&x(a)}if(!navigator.userAgent.match(/MSIE [67]\./gi)){var h=q||{},G=h.forceSyntax||0,B=h.dataLayerName||"dataLayer",A={Play:!0,Pause:!0,"Watch to End":!0};for(l in h.events)h.events.hasOwnProperty(l)&&(A[l]=h.events[l]);if(g.YT)u();else{var l=k.createElement("script");l.src="//www.youtube.com/iframe_api";q=k.getElementsByTagName("script")[0];q.parentNode.insertBefore(l,q);g.onYouTubeIframeAPIReady=function(a){return function(){a&&
a.apply(this,arguments);u()}}(g.onYouTubeIframeAPIReady)}}})(document,window,{events:{Play:!0,Pause:!0,"Watch to End":!0},percentageTracking:{every:25,each:[10,90]}});</script><script type="text/javascript" id="gtm-scroll-tracking">(function(h){function f(a){if(!(this instanceof f))return new f(a);a=a||{};var b=a.context||"body";"string"===typeof b&&(b=m.querySelector(b));if(!b)throw Error("Unable to find context "+b);this._context=b;this.minHeight=a.minHeight||0;this._marks={};this._tracked={};this._config={percentages:{each:{},every:{}},pixels:{each:{},every:{}},elements:{each:{},every:{}}};a=w(this._checkDepth.bind(this),500);b=this._update.bind(this);var c=w(b,500);h.addEventListener("scroll",a,!0);h.addEventListener("resize",
c);this._artifacts={timer:x(b),resize:c,scroll:a}}function u(a){return a.handlers.map(function(b){return b.bind(this,{data:{depth:a.depth,label:a.label}})})}function r(a){var b=Math.floor(a.numerator/a.n),c;for(c=1;c<=b;c++)a.callback(c*a.n)}function x(a){var b=v();return setInterval(function(){v()!==b&&(a(),b=v())},500)}function v(){var a=m.body,b=m.documentElement;return Math.max(a.scrollHeight,a.offsetHeight,b.clientHeight,b.scrollHeight,b.offsetHeight)}function y(a){a=a.getBoundingClientRect().top;
var b=void 0!==h.pageYOffset?h.pageYOffset:(m.documentElement||m.body.parentNode||m.body).scrollTop;return a+b}function z(){}function w(a,b){var c,d,k,g=null,n=0,e=function(){n=new Date;g=null;k=a.apply(c,d)};return function(){var l=new Date;n||(n=l);var p=b-(l-n);c=this;d=arguments;0>=p?(clearTimeout(g),g=null,n=l,k=a.apply(c,d)):g||(g=setTimeout(e,p));return k}}function A(){var a={},b;for(b in f)a[b]=z;h.ScrollTracker=a}if(h.navigator.userAgent.match(/MSIE [678]/gi))return A();var m=h.document;
f.prototype.destroy=function(){clearInterval(this._artifacts._timer);h.removeEventListener("resize",this._artifacts.resize);h.removeEventListener("scroll",this._artifacts.scroll,!0)};f.prototype.on=function(a,b){var c=this._config;["percentages","pixels","elements"].forEach(function(d){a[d]&&["each","every"].forEach(function(k){a[d][k]&&a[d][k].forEach(function(g){c[d][k][g]=c[d][k][g]||[];c[d][k][g].push(b)})})});this._update()};f.prototype._update=function(){this._calculateMarks();this._checkDepth()};
f.prototype._calculateMarks=function(){function a(p,q){return function(t,B){t=t.getBoundingClientRect().top-n._context.getBoundingClientRect().top;g({label:p+"["+B+"]",depth:t,handlers:d.elements.every[p]})}}function b(p){return function(q){var t=Math.floor(q*k/100);g({label:String(q)+"%",depth:t,handlers:d.percentages.every[e]})}}function c(p){return function(q){g({label:String(q)+"px",depth:q,handlers:p})}}delete this._marks;this._fromTop=y(this._context);this._marks={};var d=this._config,k=this._contextHeight(),
g=this._addMark.bind(this),n=this,e;if(!(k<this.minHeight)){for(e in d.percentages.every)r({n:Number(e),numerator:100,callback:b(d.percentages.every[e])});for(e in d.pixels.every)r({n:Number(e),numerator:k,callback:c(d.pixels.every[e])});for(e in d.percentages.each){var l=Math.floor(k*Number(e)/100);g({label:e+"%",depth:l,handlers:d.percentages.each[e]})}for(e in d.pixels.each)l=Number(e),g({label:e+"px",depth:l,handlers:d.pixels.each[e]});for(e in d.elements.every)l=[].slice.call(this._context.querySelectorAll(e)),
l.length&&l.forEach(a(e,d.elements.every[e]));for(e in d.elements.each)if(l=this._context.querySelector(e))l=l.getBoundingClientRect().top-n._context.getBoundingClientRect().top,g({label:e,depth:l,handlers:d.elements.each[e]})}};f.prototype._checkDepth=function(){var a=this._marks,b=this._currentDepth(),c;for(c in a)b>=c&&!this._tracked[c]&&(a[c].forEach(function(d){d()}),this._tracked[c]=!0)};f.prototype.reset=function(){this._tracked={};delete this._marks;this.marks={}};f.prototype._contextHeight=
function(){return this._context!==m.body?this._context.scrollHeight-5:this._context.clientHeight-5};f.prototype._currentDepth=function(){var a=this._context;var b=a.offsetHeight;var c="CSS1Compat"===m.compatMode?m.documentElement:m.body;c=c.clientHeight;a=a.getBoundingClientRect();b=Math.max(0,0<a.top?Math.min(b,c-a.top):a.bottom<c?a.bottom:c);this._context.scrollTop?a=this._context.scrollTop+b:(this._context.scrollTop=1,this._context.scrollTop?(this._context.scrollTop=0,a=this._context.scrollTop+
b):a=h.pageYOffset||m.documentElement.scrollTop||m.body.scrollTop||0);return b?a+b:a>=this._fromTop?a:-1};f.prototype._addMark=function(a){var b=a.depth;this._marks[b]=(this._marks[b]||[]).concat(u(a))};h.ScrollTracker=f})(this);
(function(h){function f(){var u=h.ScrollTracker();u.on({percentages:{each:[10,90],every:[25]}},function(r){dataLayer.push({event:"scrollTracking",attributes:{distance:r.data.depth,label:r.data.label}})});delete h.ScrollTracker}"loading"!==document.readyState?f():document.addEventListener("DOMContentLoaded",f)})(window);</script><script type="text/javascript" id="gtm-jq-ajax-listen">(function(){function h(b){"undefined"!==typeof jQuery?(k=jQuery,n()):20>b&&setTimeout(h,500)}function n(){k(document).bind("ajaxComplete",function(b,a,f){var c=document.createElement("a");c.href=f.url;var g="/"===c.pathname[0]?c.pathname:"/"+c.pathname,d="?"===c.search[0]?c.search.slice(1):c.search;d=l(d,"\x26","\x3d",!0);var e=l(a.getAllResponseHeaders(),"\n",":");dataLayer.push({event:"ajaxComplete",attributes:{type:f.type||"",url:c.href||"",queryParameters:d,pathname:g||"",hostname:c.hostname||
"",protocol:c.protocol||"",fragment:c.hash||"",statusCode:a.status||"",statusText:a.statusText||"",headers:e,timestamp:b.timeStamp||"",contentType:f.contentType||"",response:a.responseJSON||a.responseXML||a.responseText||""}})})}function l(b,a,f,c){var g={};if(!b||!a||!f)return{};if(b=b.split(a))for(a=0;a<b.length;a++){var d=c?decodeURIComponent(b[a]):b[a],e=d.split(f);d=m(e[0]);e=m(e[1]);d&&e&&(g[d]=e)}return g}function m(b){if(b)return b.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"")}var k;h()})();</script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/975576672/?random=1637683461898&amp;cv=9&amp;fst=1637683461898&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=7&amp;u_tz=330&amp;u_java=false&amp;u_nplug=5&amp;u_nmime=2&amp;gtm=2oaba1&amp;sendb=1&amp;ig=1&amp;data=event%3Dgtag.config&amp;frm=0&amp;url=https%3A%2F%2Fwww.stockaxis.com%2FPricing.aspx%3FPKGName%3DSOM&amp;ref=https%3A%2F%2Fwww.stockaxis.com%2FStocks-on-the-move.aspx&amp;tiba=StockAxis%20-%20Pricing&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><iframe data-product="web_widget" title="No content" tabindex="-1" aria-hidden="true" src="about:blank" style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe><div><iframe title="Opens a widget where you can chat to one of our agents" id="launcher" tabindex="0" style="width: 240px; height: 50px; padding: 0px; margin: 10px 20px; position: fixed; bottom: 0px; overflow: visible; opacity: 1; border: 0px; z-index: 999998; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1); transition-property: opacity, top, bottom; right: 0px;">
</iframe>
</div>
</body>
</html>